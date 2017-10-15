<?php 

require('./models/DB.php');

class Todo {

  /**
   * @todo add whitelist of accepted keys before executing query
   */
  private static function parse_keys($post_obj) {
    $keys = array_keys($post_obj);
    array_splice($keys, -1);
    return join(', ', $keys);
  }
  /**
   * @todo htmlspecialchars() for each value
   */
  private static function parse_values($post_obj) {
    $sanitized = [];
    $vals = array_values($post_obj);
    array_splice($vals, -1);
    foreach ($vals as $val) {
      array_push($sanitized, htmlspecialchars($val));
    }
    return join('", "', $sanitized);
  }

  public static function add_todo($post_obj) {
    $keys = self::parse_keys($post_obj);
    $values = self::parse_values($post_obj);
    $db = new DB();
    $db->pdo->query('INSERT INTO todos (' . $keys . ') VALUES ("' . $values . '")');
    // close connection
    $db = null;
    $stmt = null; 
  }

  public static function get_all_todos() {
    $db = new DB();
    $todos = [];
    $todos_obj = $db->pdo->query('SELECT * FROM todos ORDER BY id ASC');
    foreach ($todos_obj as $field_name => $field) {
      array_push($todos, $field);
    }
    return $todos;
    // close connection
    $db = null;
    $stmt = null; 
  }

  public static function search($query) {
    $db = new DB();
    $todos = [];
    $todos_obj = $db->pdo->query("SELECT * FROM todos 
                                  WHERE developer LIKE '%{$query}%' OR
                                        pm LIKE '%{$query}%' OR
                                        designer LIKE '%{$query}%' OR
                                        pmteam LIKE '%{$query}%' OR
                                        todo LIKE '%{$query}%' OR
                                        description LIKE '%{$query}%
                                        ORDER BY id ASC'
                                ");
    foreach ($todos_obj as $field_name => $field) {
      array_push($todos, $field);
    }
    return $todos;
    // close connection
    $db = null;
    $stmt = null;
  }

  public static function export_todos_to_csv($output, $query = null) {
    if (!$query) {
      $todos = self::get_all_todos();
    }
    // output the column headings
    fputcsv($output, array_keys($todos[0]));
    // loop over the rows, outputting them to csv file
    foreach ($todos as $todo => $fields) {
      fputcsv($output, $fields);
    }
  }

} /* todo class */
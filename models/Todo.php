<?php 

require('./models/DB.php');

class Todo {

  private static $whitelist = ['date', 'developer', 'pm', 'designer', 'pmteam', 'todo', 'time', 'completion', 'description'];

  public static function todo_query($sql) {
    $db = new DB();
    $todos = [];
    $todos_obj = $db->pdo->query($sql);
    foreach ($todos_obj as $field_name => $field) {
      array_push($todos, $field);
    }
    return $todos;
    // close connection
    $db = null;
    $stmt = null; 
  }

  /**
   * @todo add whitelist of accepted keys before executing query
   */
  private static function parse_keys($post_obj) {
    // whitelist form parameters by removing any for fields from POST obj that are not in the todos table
    $keys = array_intersect(array_keys($post_obj), self::$whitelist);
    return join(', ', $keys);
  }
  /**
   * @todo htmlspecialchars() for each value
   */
  private static function parse_values($post_obj) {
    $sanitized = [];
    $vals = array_values($post_obj);
    // remove form submission value
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
    return self::todo_query('SELECT * FROM todos ORDER BY id ASC');
  }

  public static function search($query) {
    return self::todo_query("SELECT * FROM todos 
                        WHERE developer LIKE '%{$query}%' OR
                              pm LIKE '%{$query}%' OR
                              designer LIKE '%{$query}%' OR
                              pmteam LIKE '%{$query}%' OR
                              todo LIKE '%{$query}%' OR
                              description LIKE '%{$query}%
                              ORDER BY id ASC'
                      ");
  }

  public static function export_todos_to_csv($output, $query = null) {
    if (!$query) {
      $todos = self::get_all_todos();
    } else {
      $todos = self::search($query);
    }
    // output the column headings
    fputcsv($output, array_keys($todos[0]));
    // loop over the rows, outputting them to csv file
    foreach ($todos as $todo => $fields) {
      fputcsv($output, $fields);
    }
  }

} /* todo class */
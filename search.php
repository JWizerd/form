<?php require('./models/Todo.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MadWire Bad ToDo</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <nav>
    <a href="./">Form</a>
    <a href="./view-all-todos.php">View All Todos</a>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <p><a href="./"><img class="img-responsive" src="./madwire-logo.jpg" alt=""></a></p>
        <h1>Search Results for: <?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?></h1>
        <hr>
      </div>
      <div class="col-sm-12 text-center">
        <?php 
        $todos = Todo::search(htmlspecialchars($_GET['q'])); 
        ?>
        <?php if (count($todos) > 0) : ?>
          <form action="./search.php" class="search-form" method="GET">
            <div class="col-sm-10">
              <input type="text" name="q" class="form-control">
            </div>
            <div class="col-sm-2">
              <input type="submit" name="s" value="search" class="form-control">
            </div>
          </form>
          <table class="table table-bordered">        
            <thead>
              <tr>
                <?php $keys = array_keys($todos[0]); ?>
                <?php foreach ($keys as $name) : ?>
                  <td><?= $name ?></td>
                <?php endforeach; ?>
              </tr>
            </thead>
              <?php foreach ($todos as $todo => $fields): ?>
                <tr class="todo">
                <?php foreach ($fields as $field): ?>
                  <td valign="middle"><p><?= $field; ?></p></td>
                <?php endforeach ?>
                </tr>
              <?php endforeach ?>
          </table>
        <?php else : ?>
          <h1>No bad todos Found.</h1>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>
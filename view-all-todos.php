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
        <h1>View All Todos</h1>
        <hr>
      </div>
      <div class="col-sm-12 text-center">
        <?php 
        $todos = Todo::get_all_todos(); 
        ?>
        <?php if (count($todos) > 0) : ?>
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
                <tr>
                <?php foreach ($fields as $field): ?>
                  <td><?= $field; ?></td>
                <?php endforeach ?>
                </tr>
              <?php endforeach ?>
          </table>
        <?php endif ?>
      </div>
    </div>
  </div>
</body>
</html>
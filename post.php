<?php 

require('./models/Todo.php');

if (isset($_POST['add-bad-todo'])) {
  Todo::add_todo($_POST);
}
  
header('Location: index.php');
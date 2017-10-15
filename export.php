<?php require('./models/Todo.php');

//output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=all-bad-todos.csv');

// create a file pointer connected to the output stream. 'w' is for writing the file only and php://output is for parsing data into file
/**
 * @link https://secure.php.net/manual/en/wrappers.php.php
 */

$output = fopen('php://output', 'w');

Todo::export_todos_to_csv($output);
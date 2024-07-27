<?php 

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/addTodoList.php";

addTodoList("Ach");
addTodoList("Muqoddam");

var_dump($todoList);

?>
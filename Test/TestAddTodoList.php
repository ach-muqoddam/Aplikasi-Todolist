<?php 

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/addTodoList.php";

addTodoList("Ach");
addTodoList("Muqoddam");

var_dump($todoList);

?>
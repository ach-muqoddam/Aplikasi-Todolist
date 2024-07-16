<?php 

require_once "./Model/TodoList.php";

require_once "./BusinessLogic/addTodoList.php";
require_once "./BusinessLogic/showTodoList.php";
require_once "./BusinessLogic/removeTodoList.php";

addTodoList("Adam");
addTodoList("Alya");
addTodoList("Adel");
addTodoList("Afka");
addTodoList("Atha");

showTodoList();

removeTodoList(3);
removeTodoList(4);

showTodoList();

?>
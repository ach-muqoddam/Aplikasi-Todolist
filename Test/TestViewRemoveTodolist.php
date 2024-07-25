<?php

require_once "./Model/TodoList.php";

require_once "./BusinessLogic/showTodoList.php";
require_once "./BusinessLogic/addTodoList.php";
require_once "./BusinessLogic/removeTodoList.php";

require_once "./View/ViewRemoveTodoList.php";

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP Menengah");
addTodoList("Belajar PHP Profesional");

showTodoList();

ViewRemoveTodoList();

showTodoList();

?>
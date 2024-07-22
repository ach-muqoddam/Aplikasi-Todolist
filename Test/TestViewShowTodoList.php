<?php 

require_once "./View/ViewShowTodoList.php";
require_once "./View/ViewAddTodoList.php";

require_once "./BusinessLogic/addTodoList.php";

addTodoList("Adam");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

ViewShowTodoList();


?>
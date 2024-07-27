<?php 

require_once __DIR__ . "/Helper/Input.php";

require_once __DIR__ . "/BusinessLogic/addTodoList.php";
require_once __DIR__ . "/BusinessLogic/showTodoList.php";
require_once __DIR__ . "/BusinessLogic/removeTodoList.php";

require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";

ViewShowTodoList();
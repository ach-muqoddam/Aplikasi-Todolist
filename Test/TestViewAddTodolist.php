<?php

require_once "./Model/TodoList.php";

require_once "./BusinessLogic/addTodoList.php";
require_once "./BusinessLogic/showTodoList.php";

require_once "./Helper/Input.php";

require_once "./View/ViewAddTodoList.php";

ViewAddTodoList();

showTodoList();

?>
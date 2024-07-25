<?php 

require_once "./Model/TodoList.php";

require_once "./Helper/Input.php";

require_once "./BusinessLogic/addTodoList.php";

function ViewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;
    
    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }

}

?>
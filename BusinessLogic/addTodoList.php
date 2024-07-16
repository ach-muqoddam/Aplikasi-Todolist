<?php 

/*
menambahkan todo di list
*/

function addTodoList(string $todo)
{
    global $todoList; // global scope

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}


?>
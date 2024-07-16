<?php 

/*
menghapus todo di list
*/

function removeTodoList(int $number): bool
{
    global $todoList; // global scope

    // logic cek data true atau false
    if ($number > sizeof($todoList)){
        return false;
    }

    // logic menggeser data
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    // logic menghapus data yg paling terakhir
    unset($todoList[sizeof($todoList)]);

    return true;
}

?>
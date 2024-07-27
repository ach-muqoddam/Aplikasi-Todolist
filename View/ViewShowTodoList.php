<?php 

require_once __DIR__ . "/../Model/TodoList.php";

require_once __DIR__ . "/../BusinessLogic/showTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";

require_once __DIR__ . "/..//Helper/Input.php";

function ViewShowTodoList()
{
    while(true){
        showTodoList();

        echo "MENU" . PHP_EOL;

        echo "1. Tambah" . PHP_EOL;
        echo "2. Hapus" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            ViewAddTodoList();
        } else if ($pilihan == "2") {
            ViewRemoveTodoList();
        }else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak mengerti" . PHP_EOL;
        }
    }

    echo "See you soon" . PHP_EOL;

}

?>
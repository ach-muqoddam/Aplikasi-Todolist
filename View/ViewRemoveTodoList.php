<?php 

require_once "./BusinessLogic/removeTodoList.php";

require_once "./Helper/Input.php";

function ViewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk membatalkan)");

    // cek jika ingin batalkan
    if ($pilihan == "x") {
        echo "batal menghapus todo" . PHP_EOL;
    } else {   
        // cek berhasil atau gagal saat dihapus
        $success = removeTodoList($pilihan);

        // cek kondisi untuk melakukan penghapusan
        if ($success) {
            echo "sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}

?>
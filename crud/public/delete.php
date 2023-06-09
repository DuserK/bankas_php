<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $accounts = file_get_contents(__DIR__.'/../accounts.json');
    $accounts = $accounts ? json_decode($accounts, 1) : [];

    $id =(int)$_GET['id'];
    foreach ($accounts as $a) {
        if($a['id'] == $id) {
            if($a['balance'] === 0){
                $accounts = array_filter($accounts, fn($a) => $a['id'] != $id);
            } else {
                header('Location: ./index.php?error=2');
                die;
            }

        }
    }
    

    $accounts = json_encode($accounts);
    file_put_contents(__DIR__.'/../accounts.json', $accounts);
    header('Location: ./');
    die;

}

?>
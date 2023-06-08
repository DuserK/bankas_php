<?php

$accounts = file_get_contents(__DIR__ . '/../accounts.json');
$accounts = $accounts ? json_decode($accounts,1) : [];

?>

<form action="./fund.php" method="post" class="change">
    <button type = "submit" class='plus'><i class="fa-solid fa-plus"></i></button> 
</form>
<form action="./withdraw.php" method="post" class="change">
    <button type = "submit" class='minus'><i class="fa-solid fa-minus"></i></button>    
</form>

<form action="./delete.php?id=<?= $account['id'] ?>" method="post" class="delete">
    <button type = "submit" class="delete"><i class="fa-solid fa-trash"></i></button>
</form>
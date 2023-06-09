<?php

$accounts = file_get_contents(__DIR__ . '/../accounts.json');
$accounts = $accounts ? json_decode($accounts,1) : [];

?>
<a href="./fund.php?id=<?= $account['id'] ?>"  class='plus'><i class="fa-solid fa-plus"></i></a>

<a href="./withdraw.php?id=<?= $account['id'] ?>"  class='minus'><i class="fa-solid fa-minus"></i></a>

<form action="./delete.php?id=<?= $account['id'] ?>" method="post" class="delete">
    <button type = "submit" class="delete"><i class="fa-solid fa-trash"></i></button>
</form>
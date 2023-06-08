<?php

$accounts = file_get_contents(__DIR__ . '/../accounts.json');
$accounts = $accounts ? json_decode($accounts,1) : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="/../3rd-party-css/3rd-party-css.css">
    <script src="https://kit.fontawesome.com/6b553b78cb.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>  
    <title>Bankas bankelis</title>
</head>
<body>
    <div class="container content">
    <?php require __DIR__ .'/menu.php'?>


    <?php require __DIR__ .'/listheader.php'?>
    <div>
        <ul class="list-group list-group-flush">
            <?php foreach ($accounts as $account) : ?>
                <div class="row info-account">
                    <div class="col-2"><?= $account['name'] ?></div>
                    <div class="col-2"><?= $account['surname'] ?></div>
                    <div class="col-2"><?= $account['personID'] ?></div>
                    <div class="col-3"><?= $account['accountNumber'] ?></div>
                    <div class="col-1" style = "text-align: right"><?= $account['balance'] ?> €</div>
                    <div class="col-2 edit"><?php require __DIR__ .'/editbuttons.php'?></div>
                </div>
            <?php endforeach ?>
        </ul>
    </div>
    </div>

</body>
</html>
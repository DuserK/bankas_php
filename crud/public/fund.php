<?php


$accounts = file_get_contents(__DIR__.'/../accounts.json');
$accounts = $accounts ? json_decode($accounts, 1) : [];
$id =(int)$_GET['id'];

foreach ($accounts as $a) {
    if($a['id'] == $id) {
        $p = $a;
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    foreach ($accounts as &$a) {
        if($a['id'] == $id) {
            $a['balance'] += $_POST['fund'];
            header('Location: ./fund.php?id='.$id.'&error=3');
        }
    }
    unset($a);

    $accounts = json_encode($accounts);
    file_put_contents(__DIR__.'/../accounts.json', $accounts);
    die;
    
}
$error =$_GET['error'] ?? 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="app.js"></script>  
    <title>Pridėti lėšų</title>
</head>
<body>
<div class="container content">
    <?php require __DIR__ .'/menu.php'?>
<div>
<div class="container">
    <div class="row  justify-content-md-center">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                Pridėti lėšų
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item">Vardas: <?=$p['name']?></li>
                    <li class="list-group-item">Pavardė: <?=$p['surname']?></li>
                    <li class="list-group-item">Asmens kodas: <?=$p['personID']?></li>
                    <li class="list-group-item">Sąskaitos numeris: <?=$p['accountNumber']?></li>
                    <li class="list-group-item">Likutis: <?=$p['balance']?> €</li>
                </ul>
                <form action="./fund.php?id=<?=$id?>" method="post">
                    <div class="mb-3">
                        <label class="form-label" required>Įveskite sumą</label>
                        <input class="form-control" name="fund" type="number">
                    </div>
                    <div><?php require __DIR__ .'/errors.php'?></div>
                    <button type="button" class="btn btn-secondary mt-4">
                    <a class="buttonLink" href="./"> Grįžti</a>
                    </button>
                    <button type="submit" class="btn btn-success mt-4">Pridėti lėšas</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>
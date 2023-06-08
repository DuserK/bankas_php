<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $accounts = file_get_contents(__DIR__.'/../accounts.json');
    $accounts = $accounts ? json_decode($accounts,1) : [];
    $accounts[] = [
    'name' => $_POST['name'],
    'surname' => $_POST['surname'],
    'personID' => $_POST['personID'],
    'accountNumber' => 'LT00 3500 0000 0000 0000',
    'balance' => 0,
    'id' => rand(100000000, 999999999)];

    $accounts = json_encode($accounts);
    file_put_contents(__DIR__ . '/../accounts.json', $accounts);
    header('Location: ./');
    die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="app.js"></script>  
    <title>Pridėti sąskaitą</title>
</head>
<body>
    <?php require __DIR__ .'/menu.php'?>

<div class="container">
  <div class="row  justify-content-md-center">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                Sukurti naują sąskaitą
            </div>
            <div class="card-body">
                <form action="./add.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" required>Vardas</label>
                        <input class="form-control" name="name" type="text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"required>Pavardė</label>
                        <input class="form-control" name="surname" type="text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" required>Asmens kodas</label>
                        <input class="form-control"  name="personID"  type="text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Banko sąskaita</label>
                        <input class="form-control" type="text" name="accountNumber" aria-label="readonly input example" hidden>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="number" name="balance" aria-label="readonly input example" hidden>
                    </div>
                    <button type="submit" class="btn btn-outline-warning mt-4">Išsaugoti</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>
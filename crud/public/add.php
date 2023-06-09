<?php
    function accountNumberGen () {
        $iban = '';
        $cn = sprintf('%02d', mt_rand(0, 99));
        $bn = '3500 0';
        $un1 = sprintf('%03d', mt_rand(0, 999));
        $un2 = sprintf('%04d', mt_rand(0, 9999));
        $un3 = sprintf('%04d', mt_rand(0, 9999));
        $iban = "LT$cn $bn$un1 $un2 $un3";
        return $iban;
    }

    $accountNumber = accountNumberGen();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    /// validacijos
    if (strlen($_POST['name'])<3) {
        header('Location: ./add.php?error=5');
        die;
    } 
    if (strlen($_POST['surname'])<3) {
        header('Location: ./add.php?error=6');
        die;
    } 
    $accounts = file_get_contents(__DIR__.'/../accounts.json');
    $accounts = $accounts ? json_decode($accounts,1) : [];
    
    foreach ($accounts as $a) {
        if($a['personID'] === $_POST['personID']) {
            header('Location: ./add.php?error=7');
            die;
        } 
    }
         $accounts[] = [
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'personID' => $_POST['personID'],
            'accountNumber' => $_POST['accountNumber'],
            'balance' => 0,
            'id' => rand(100000000, 999999999)];
        
            $accounts = json_encode($accounts);
            file_put_contents(__DIR__ . '/../accounts.json', $accounts);
            header('Location: ./add.php?error=8');
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
    <title>Pridėti sąskaitą</title>
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
                        <input class="form-control"  name="personID"  type="number" minlength="11" maxlength="11">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Banko sąskaita</label>
                        <input class="form-control" type="text" name="accountNumber" aria-label=" input example" value="<?= $accountNumber?>" readonly>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="number" name="balance" aria-label="readonly input example" hidden>
                    </div>
                    <div><?php require __DIR__ .'/errors.php'?></div>
                    <button type="button" class="btn btn-secondary mt-4">
                    <a class="buttonLink" href="./"> Grįžti</a>
                    </button>
                    <button type="submit" class="btn btn-primary mt-4">Išsaugoti</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>
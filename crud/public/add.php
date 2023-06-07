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
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" required>Vardas</label>
                        <input class="form-control" type="text" value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" required>Pavardė</label>
                        <input class="form-control" type="text" value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" required>Asmens kodas</label>
                        <input class="form-control" type="text" value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Asmens kodas</label>
                        <input class="form-control" type="text" value="LT00 3500 0000 0000 0000" aria-label="readonly input example" readonly>
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
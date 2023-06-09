<?php
switch ($error) {
    case 0:
        echo "";
        break;
    case 1:
        echo '<div class="alert alert-danger" role="alert">
        Nepakankamas likutis!
      </div>';
        break;
    case 2:
        echo '<div class="alert alert-danger" role="alert">
        Sąskaita nėra tuščia
      </div>';
        break;
    case 3:
        echo '<div class="alert alert-success" role="alert">
        Lėšos pridėtos
      </div>';
        break;
    case 4:
        echo '<div class="alert alert-success" role="alert">
        Lėšos sėkmingai nuskaičiuotos
      </div>';
        break;
    case 5:
        echo '<div class="alert alert-warning" role="alert">
        Vardas per trumpas (min 3 simboliai)
      </div>';
        break;
    case 6:
        echo '<div class="alert alert-warning" role="alert">
        Pavardė per trumpa (min 3 simboliai)
      </div>';
        break;
    case 7:
        echo '<div class="alert alert-warning" role="alert">
        Asmuo tokiu asmens kodu jau egzistuoja
      </div>';
        break;
    case 8:
        echo '<div class="alert alert-success" role="alert">
        Sąskaita sėkmingai sukurta
      </div>';
        break;
}
?>
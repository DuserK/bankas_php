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
}
?>
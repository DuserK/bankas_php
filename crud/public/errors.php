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
}
?>
<?php
    $coo = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($coo,"gestion_etudiant") or die(mysqli_error());
    ?>

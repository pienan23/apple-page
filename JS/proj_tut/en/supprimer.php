<?php
    require_once 'connex.php';

    if(isset($_GET['supet']))
    {
        $sup=$_GET['supet'];
        $reqeff = "DELETE FROM etudiants WHERE MATRICULE = '$sup'";
        $ress = mysqli_query($chaine,$reqeff);

    }

    if($ress)
    {
        header('location:liste.php');
    }
?>
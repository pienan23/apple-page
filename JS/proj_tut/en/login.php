<?php
session_start();

if(isset($_POST['valider']))
{
    $username = $_POST['utilisateur'];
    $mdp = $_POST['password'];

    $db = new PDO('mysql:host=localhost;dbname=admin_loko','root', '');
    $sql = "SELECT * FROM login WHERE username='$username'";

    $res = $db->prepare($sql);
    $res->execute();

    if($res->rowCount()>0)
    {
        $data= $res->fetchAll();
        if(password_verify($mdp, $data[0]["password"]))
        {
            $_SESSION['utilisateur'] = $username;
        }
    }
}
?>

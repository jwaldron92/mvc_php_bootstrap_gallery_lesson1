<?php require_once("init.php"); ?>
/**
 * Created by PhpStorm.
 * User: jjwInNY
 * Date: 2/13/18
 * Time: 8:25 PM
 */


<?php

if ($session->is_signed_in()) {
    redirect("index.php");
}

if (isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);



    //METHOD 1to check database user if exists, otherwise sign UP BUDDY!



    //METHOD 2 Check the database.
    if($user_found){

        $session->login($user_found);
        redirect("index.php");

    } else {
        $the_message = "Your password or username are incorrect";

    }

    //The page is loaded and $user_FOUND is not found


    } else {
    $username = "";
    $password ="";

}
?>

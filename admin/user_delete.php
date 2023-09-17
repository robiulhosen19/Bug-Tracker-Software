<?php include_once("class/function.php") ?>

<?php 

        $rece = $_REQUEST['id'];

       $query = "DELETE FROM `users` WHERE `id` = $rece";

        $run_delete_query = mysqli_query($conn, $query);
    
    if($run_delete_query ){

        header("loaction: show_user.php?delete");
    }
?>
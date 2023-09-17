<?php include_once("class/function.php") ?>

<?php 

        $rece = $_REQUEST['pro_id'];

       $query = "DELETE FROM `projects` WHERE `pro_id` = $rece";

        $run_delete_query = mysqli_query($conn, $query);
    
    if($run_delete_query ){

        header("loaction: show_project.php?deleted");
    }
?>
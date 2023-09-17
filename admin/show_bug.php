<?php include("includes/head.php")  ?>

<?php include_once("class/function.php") ?>
<?php
$query = "SELECT * FROM bugs ";

$show =   $result = mysqli_query($conn, $query);


?>

<body class="sb-nav-fixed">
    <?php include_once("includes/top_navbar.php")  ?>
    <div id="layoutSidenav">
        <?php include_once("includes/sidebar.php")  ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Project All Details</h1>
                    <ol class="breadcrumb mb-4">
                        <!-- <li class="breadcrumb-item active">Create User</li> -->
                        <a class="breadcrumb-item active" href="create_bug.php">Create New Bugs</a>
                    </ol>
                    <!--======================== page-content =================================-->
                    <?php
                    while ($row = mysqli_fetch_assoc($show)) {
                        $project_name = $row['project_name'];
                        $deu_date = $row['due_date'];
                        $start_date = $row['start_date'];
                        $asignto = $row['asign_to'];
                        $msg = $row['msg'];
                        $err_type = $row['err_type'];
                        $bug_creator = $row['bugCreator'];
                    ?>

                        <div class="card border-success mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success">Project Name:<?php echo $project_name; ?> </div>
                            <div class="card-header bg-transparent border-success">Bug Creator Name:<?php echo $bug_creator; ?></div>
                            <div class="card-header bg-transparent border-success">Assign To :<?php echo $asignto; ?></div>
                            <div class="card-body text-success">

                                <p class="card-text"> Problem Type:<?php echo $err_type; ?> </p>

                                <h5 class="card-title">Description<?php echo $msg; ?></h5>
                                <p class="card-text"><?php echo $title; ?></p>
                            </div>
                            <div class="card-footer bg-transparent border-success">Start Date: <?php echo $start_date; ?></div>
                            <div class="card-footer bg-transparent border-success">Due Date :<?php echo $deu_date; ?></div>
                            <div class="card-footer bg-transparent border-success">Close</div>
                        </div>

                    <?php } ?>

                    <!--======================== page-End =================================-->
                </div>
            </main>
            <?php include_once("includes/footer.php")   ?>
        </div>
    </div>
    <?php include("includes/scripts.php") ?>
</body>

</html>
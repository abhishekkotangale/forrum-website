<?php
    session_start();
    if(!isset($_SESSION['username_u'])){
        header('location:../index.html');
    }
    include '../assets/connection.php';

    $bid = $_GET['deleteblog'];

    $deleteQuery = "delete from blogs where bid='$bid' ";
    
    $query = mysqli_query($con,$deleteQuery);

    if($query){
        ?>
            <script>
                alert("Deleted Successfully");
                location.replace('dashboard.php');
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Please Try again after Some time");
            </script>
        <?php
    }
?>
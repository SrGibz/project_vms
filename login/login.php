<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];


        $sql = "select * from users where userid = '$username' and pwd= '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location:../pages/dashboard.html");
        }
        else{
            echo '<script>
                window.location.href = "../index.php";
                alert("Login Failed. Invalid!!")
            </script>';
        }
    }



?>
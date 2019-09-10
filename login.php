<!-- Database Connection and login PHP  -->
  <?php
  if (isset($_POST['submit'])){
    $u_username = $_POST ['username'];
    $u_password = $_POST ['password'];

    $sql ="SELECT * FROM userinfo WHERE username = '$u_username' AND password = '$u_password'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
      session_start();
    echo "<script>alert('$sql')</script>";
    echo $u_username . $u_password;
    if($numrows>0){
      $_SESSION['login'] = 1;
      header('location: default.php');
      die();
    }
    else{
      $_SESSION['login'] = 0;
    }
  }

  $conn->close();
  ?>

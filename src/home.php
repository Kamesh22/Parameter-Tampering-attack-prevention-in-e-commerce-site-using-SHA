<html>
<head>
     <title>E-Commerce Website - signUp</title>  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 
<style>
body {
  background-image: url('b3.png');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

</head>
<body>
  <nav class="navbar navbar-expand-sm bg-light justify-content-center">

      <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-5" href="home.php" ><b>Sign Up</b></a>
          </li>
          <li class="nav-item h2">E - Commerce Website</li>
          <li class="nav-item">
            <a class="nav-link mx-5" href="login.php"><b>Log In</b></a>
          </li>
        </ul>

  </nav><br>
  <form action="" method="post" class="container justify-content-center" style="width: 400px;">
    <div class="form-group justify-content-center text-center">
      <legend class="mb-5" style="color:white; font-size:36px;"><b>SIGN UP</b></legend>
      <input class="form-control" type="email" placeholder="Email ID" name="email" required><br><br>
      <input class="form-control" type="password" placeholder="Password" name="pswd" required><br><br>
      <input class="form-control" type="text" placeholder="Mobile Number" name="mob" required><br><br>
      <input type="submit" value="Submit" style="background-color:red; color:white;width:150px; height:50px; font-size:24px"><br><br>     
    </div>
  </form>
  <?php
    require_once "dbConn.php";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $sql = "INSERT INTO registration (Email, Password, MobNo) VALUES ('".$_POST["email"]."', '".$_POST["pswd"]."', '".$_POST["mob"]."')";
      
      if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["userEmail"] = $_POST["email"];
        header("Location: afterSignIn.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    mysqli_close($conn);
  ?>
</body>
</html>
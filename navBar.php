<!-- Navigation -->
<div id="myheader"> </div>
<div class="w3-top">
<nav class="w3-bar w3-yellow w3-border w3-border-black">
  <a href="default.php" class="w3-button w3-bar-item w3-large w3-hide-small w3-border-right w3-border-black w3-hover-black w3-hover-text-light-grey">Home</a>
  <a href="team.php" class="w3-button w3-bar-item w3-large w3-hide-small w3-border-right w3-border-black w3-hover-black w3-hover-text-light-grey">Team</a>
  <a href="competitions.php" class="w3-button w3-bar-item w3-large w3-hide-small w3-border-right w3-border-black w3-hover-black w3-hover-text-light-grey">Competititons</a>
  <a href="contact.php" class="w3-button w3-bar-item w3-large w3-hide-small w3-border-right w3-border-black w3-hover-black w3-hover-text-light-grey">Contact</a>
  <a href="game.php" class="w3-button w3-bar-item w3-large w3-hide-small w3-border-right w3-border-black w3-hover-black w3-hover-text-light-grey">Games</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-large w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
  <!--<a href="login/index.php" style="cursor:pointer;"> <i class="fa fa-user w3-padding w3-hide-small w3-right w3-hover-black
    w3-hover-text-light-grey" style="font-size:25px;"></i>-->
  <!--
  <a onclick="document.getElementById('log1n').style.display='block'" style="cursor:pointer;"> <i class="fa fa-user w3-padding w3-hide-small w3-right w3-hover-black
    w3-hover-text-light-grey" style="font-size:25px;"></i>
-->

    <div class="w3-button w3-bar-item w3-xlarge w3-hide w3-hide-large w3-hide-medium w3-hover-black w3-hover-text-light-grey">
      <a href="default.php"><i class="fa fa-home"></i></a>
    </div>

    <div class="w3-dropdown-hover w3-hide-small w3-right">
      <button class="w3-button w3-hover-black w3-hover-text-light-grey"
      style="font-family: Verdana; font-size:26px; padding:0px 10px; margin-right: 40px"><i class="fa fa-language w3-padding w3-hide-small w3-right w3-hover-black
        w3-hover-text-light-grey" style="font-size:25px;"></i> </button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <div id="google_translate_element"></div>
      </div>
    </div>

    <div class="w3-dropdown-hover w3-hide-small w3-right">
      <button class="w3-button w3-hover-black w3-hover-text-light-grey"
      style="font-family: Verdana; font-size:18px; padding:0px 10px;"><i class="fa fa-user w3-padding w3-hide-small w3-right w3-hover-black
        w3-hover-text-light-grey" style="font-size:25px;"></i> </button>

      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/login/index.php" class="w3-bar-item w3-button"> Login/Signup</a>
        <a href="/login/logout.php" class="w3-bar-item w3-button"> Logout</a>
      </div>
    </div>

    <div class="w3-button w3-bar-item w3-xlarge w3-hide w3-hide-large w3-hide-medium w3-hover-black w3-hover-text-light-grey">
    <a onclick="document.getElementById('log1n').style.display='block'"><i class="fa fa-user"></i></a>
    </div>
</nav>

<!-- Responsive Menu-->
  <div id="responsive-bar" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-hover-black w3-hover-text-light-grey">
  <a href="team.php" class="w3-bar-item w3-button">Team</a>
  <a href="competition.php" class="w3-bar-item w3-button">Competitions</a>
  <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
  </div>

</div>

<!-- Database Connection and login PHP  -->
<?php
include ("main.php");
// define variables and set to empty values
$nameErr = $surnameErr = $usernameErr = $passwordErr = $emailErr = $genderErr = "";
$name = $surname = $username = $password = $email = $gender = "";
$nameBool = False;
$surnameBool = False;
$usernameBool = False;
$passwordBool = False;
$emailBool = False;
$connectionBool = False;
$connectionErrBool = False;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }else{
      $nameBool = true;

    }
  }
  if (empty($_POST["surname"])) {
    $surnameErr = "Surname is required";
  } else {
    $surname = test_input($_POST["surname"]);
    // check if surname only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
      $surnameErr = "Only letters and white space allowed";
    }else{
      $surnameBool = true;

    }
  }
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }else{
      $usernameBool = true;

    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if password only contains letters and numbers
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,16}$/",$password)) {
      $passwordErr = "Password must include one uppercase letter,
      one lowercase letter, one number, and it must be longer than 6, shorter than 16";
    }else{
      $passwordBool = true;

    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }else{
      $emailBool = true;

    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($nameBool && $emailBool && $usernameBool && $passwordBool) {
  $sql = "INSERT INTO myguests (name, surname, username, password, email, gender)
  VALUES ('$name','$surname','$username','$password','$email','$gender')";
  if ($conn->query($sql) === TRUE) {
      $connectionBool = True;
      header('location: default.php');
  }
}else{
      echo "An unexpected error occured, try again later";
}
$conn->close();
?>

<!-- Modal for login -->
<div id="log1n" class="modal">

  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('log1n').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="/img/bee.png" alt="Logo" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button class="loginbtn" type="submit" name="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('log1n').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">New Visitor? <a href="#" onclick="document.getElementById('s1gnup').style.display='block'">Sign up</a></span>
    </div>
  </form>
</div>

<div id= "s1gnup" class ="modal">
  <form class="modal-content" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="imgcontainer">
      <span onclick="document.getElementById('s1gnup').style.display='none'"
        class ="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <h2>Sign Up Form</h2>
      <label><b>Name</b></label>
      <input type="text" value="<?php echo $name;?>"
      placeholder="Enter your name" name="name" required>
      <span class="error">* <?php echo $nameErr;?></span><br><br>

      <label><b>Surname</b></label>
      <input type="text" value="<?php echo $surname;?>"
      placeholder="Enter your surname" name="surname" required>
    <span class="error">* <?php echo $surnameErr;?></span><br><br>

    <label><b>Userame</b></label>
    <input type="text" value="<?php echo $username;?>"
    placeholder="Enter your username" name="username" required>
    <span class="error">* <?php echo $usernameErr;?></span><br><br>

    <label><b>E-mail</b></label>
    <input type="text" value="<?php echo $email;?>"
    placeholder="Enter email" name="email" required>
    <span class="error">* <?php echo $emailErr;?></span><br><br>

    <label><b>Password</b></label>
    <input type="password"
    placeholder="Enter your password" name="password" required>
    <span class="error">* <?php echo $passwordErr;?></span><br><br>

    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <input class="loginbtn" type="submit" name="submit" value="Sign Up">
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('s1gnup').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Already Signed Up? <a href="#" onclick="document.getElementById('s1gnup').style.display='none'">Log in</a></span>
    </div>

  </form>
  </div>


<script>
// Get the modal-mobile
var modal = document.getElementById('log1n');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Responsive navBar
function myFunction() {
    var x = document.getElementById("responsive-bar");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

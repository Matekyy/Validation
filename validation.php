<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>
body {
  background-image: url("R.jpg");
}
            .container{
                float: right;
                width: 400px;
                
            }
        </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  //Username  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  //Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  //Comment
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  //Gender
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
?>
    <?php
if (isset($_POST['submit'])){
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		$_SESSION['username'] = htmlentities($_POST['username']);
		$_SESSION['password'] = htmlentities($_POST['password']);
		$_SESSION['comment'] = htmlentities($_POST['comment']);
		$_SESSION['gender'] = htmlentities($_POST['gender']);
		header('Location: validation2.php');
	}

?>
    <div class="container text-center col-lg-4">
        <div class="card border-primary mb-3">
  <div class="card-header">
       <img src="W.jpg" width="100" height="100">
    <h2>Validation Form</h2>
  </div>
  <div class="card-body">
    <div class="container-fluid myclass">
    <div class="container">
  <div class="py-3">

  </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
    <div class="text-center">
      <span class="error"><h4>Required field</h4></span>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col mb-3">
            <label for="firstName">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
           <div class="mb-3">
          <label for="password">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
          <div class="mb-3">
          Comment: <br><br>
              <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
          </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Submit</button>
      </form>
    </div>
    </div>
  </div>
  </div>
</div>
</div>    

    </body>
</html>

<DOCTYPE html>
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
        </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php 
    session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$comment = $_SESSION['comment'];
$password = $_SESSION['password'];
$gender = $_SESSION['gender'];

    ?>
     
<div class="card" style="width: 18rem;">
  <div class="container text-center col-lg-5">
    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
  </div>
</div>
    </body>
</html>
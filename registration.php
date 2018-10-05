<!DOCTYPE html>
<html>
<head>
  <title>Registration page</title>
</head>
<style>
   .main-wrapper{
     margin-left: 200px;
   }
</style>
<body>
  <!--section class="main-container"-->
    <div class="main-wrapper">
      <h2>Sign up</h2>
      <form class="Signup-form" action="registration_code.php" method="POST">
        <input type="text" name="first" placeholder="First Name"><br><br>
        <input type="text" name="last" placeholder="Last Name"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="text" name="uid" placeholder="Username"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>

        <button type="submit" name="submit">Register</button>
      </form>
    </div>
  <!--/section-->
</body>
</html>

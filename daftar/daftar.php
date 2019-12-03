<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="shortcut icon" href="REGI2.png" type="image/x-icon">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
     <a href="login.php">Masuk</a>
    <h2 class="active"> Daftar </h2>

    <!-- Icon -->


    <!-- Login Form -->
    <form method="post" action="koneksidaftar.php">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" required autocomplete="off">
      <input type="email" id="email" class="fadeIn fourth" name="email" placeholder="Email" required autocomplete="off">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required autocomplete="off">
      <input type="submit" class="fadeIn fourth" value="Daftar">
    </form>
  </div>
</div>
</body>
</html>
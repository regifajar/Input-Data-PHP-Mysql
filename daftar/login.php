<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="REGI2.png" type="image/x-icon">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Masuk </h2>
    <a href="daftar.php">Daftar</a>

    <!-- Icon -->
    

    <!-- Login Form -->
    <form method="post" action="cek_login.php">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" required autocomplete="off">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required autocomplete="off">
      <input type="submit" class="fadeIn fourth" value="Masuk">
    </form>
  </div>
</div>
</body>
</html>
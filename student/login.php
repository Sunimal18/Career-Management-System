<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <?php include '../style_Sheets/loginpage_style.php';?>

</head>
<body>
  <div class="auth-page">
    <div class="auth-card">
      <h2>Welcome Back!</h2>
      <p>Login to your account</p>
      <form action="sql/login.php" method="POST">
        <input type="email" name="email" placeholder="University Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
      <p class="redirect">Don't have an account? <a href="register.php">Register here</a></p>
    </div>
  </div>
</body>
</html>





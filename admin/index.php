<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login - Internship Finder</title>
  
  <?php include 'style_Sheets/login_style.php';?>

</head>
<body>
  <!-- Admin Login Form -->
  <div class="login-container">
    <div class="login-box">
      <h1>Admin Login</h1>
      <form action="sql/login.php" method="POST" class="login-form">
        <div class="textbox">
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="textbox">
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="login-btn">Login</button>
      </form>
    </div>
  </div>
</body>
</html>

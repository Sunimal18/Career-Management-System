<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <?php include '../style_Sheets/registerpage_style.php';?>

</head>
<body>
  <div class="auth-page">
    <div class="auth-card">
      <h2>Join Us!</h2>
      <p>Create your account to find the best internships</p>
      <form action="sql/register.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="University Email" required>
        <input type="text" name="degree" placeholder="Your Degree" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="confirm_password" required>
        <label for="cv" class="file-label">Upload CV</label>
        <input type="file" name="cv" id="cv" required>
        <button type="submit">Register</button>
      </form>
      <p class="redirect">Already have an account? <a href="login.php">Login here</a></p>
    </div>
  </div>
</body>
</html>

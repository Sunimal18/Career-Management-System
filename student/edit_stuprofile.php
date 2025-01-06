<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile - Internship Finder</title>
  <!-- Style sheets -->
  <?php include '../style_Sheets/edit_stuprofile_style.php';?>
  <?php include '../style_Sheets/studenthome_style.php';?>

</head>
<body>
<?php
  include '../library/db_conn.php';
  $id=$_REQUEST['id'];
  $sql="SELECT * FROM student WHERE stu_id=$id";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc())
  {
?>
  <div class="auth-page">
    <div class="auth-card">
      <h2>Edit Profile</h2>
      <p>Update your details to keep your profile accurate</p>
      <form action="sql/edit_stu_profile.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Full Name" value="<?php echo $row['full_name'] ?>" required>
        <input type="email" name="email" placeholder="University Email" value="<?php echo $row['uni_email'] ?>" readonly>
        <input type="text" name="degree" placeholder="Degree Program" value="<?php echo $row['degree'] ?>" required>
        <label for="cv" class="file-label">Upload New CV</label>
        <input type="file" name="cv" id="cv">
        <button type="submit">Save Changes</button>
      </form>
      <a href="Stu_profile.php" class="back-link">Cancel and Return to Profile</a>
    </div>
  </div>
<?php } ?>
</body>
</html>

<style>
/* General Styles */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  color: #333;
}

h1 {
  text-align: center;
  color: #4caf50;
  margin-top: 20px;
}
.navbar .logo img {
  height: 60px;
  margin-right: 10px;
}
/* Main Content Styling */
.edit-company {
  max-width: 600px;
  margin: 30px auto;
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.edit-company label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.edit-company input,
.edit-company textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 1rem;
  box-sizing: border-box;
}

.edit-company button {
  display: inline-block;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background: #4caf50;
  color: white;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.3s;
}


.cancel-btn {
  background: #f44336;
  margin-left: 5px;
  padding-top: 10px;
  padding-bottom: 10px;
  display: inline-block;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.3s;
}
.cancel-btn:hover {
  background: #d32f2f;
}
/* Responsive Design */
@media (max-width: 768px) {
  .navbar {
    flex-wrap: wrap;
    text-align: center;
  }

  .navbar .nav-links {
    flex-direction: column;
    width: 100%;
  }

  .navbar .nav-links li {
    margin: 5px 0;
  }

  .edit-company {
    width: 90%;
    margin: 20px auto;
  }
}

</style>
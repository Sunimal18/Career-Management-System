<style>
    /* General Styles */
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: #f4faff;
  color: #333;
}

a {
  text-decoration: none;
  color: inherit;
}

/* Navbar Styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background: linear-gradient(45deg, #4a90e2, #6dd5ed);
  color: white;
  flex-wrap: wrap;
}
.navbar .logo img {
  height: 60px;
  margin-right: 10px;
}

.navbar .logo {
  display: flex;
  align-items: center;
}

.navbar .logo img {
  width: 40px;
  height: 40px;
  margin-right: 10px;
}

.navbar .logo span {
  font-size: 1.5rem;
  font-weight: bold;
}

.nav-links {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
  flex-wrap: wrap;
}

.nav-links li {
  margin: 0 10px;
}

.nav-links a {
  color: white;
  font-weight: 500;
  padding: 10px 15px;
  border-radius: 20px;
  transition: background 0.3s;
}

.nav-links a:hover, .nav-links a.active {
  background: rgba(255, 255, 255, 0.2);
}

.logout-btn {
  background: #ff5f6d;
  padding: 10px 15px;
  border-radius: 20px;
  transition: transform 0.2s;
}

.logout-btn:hover {
  transform: translateY(-3px);
}

/* View and Edit Student Pages */
main {
  padding: 20px;
  margin: 0 auto;
  max-width: 100%;
}

h1 {
  text-align: center;
  font-size: 2rem;
  color: #4a90e2;
  margin-bottom: 30px;
}

/* Form Styles for Edit Student */
form {
  width: 90%;
  max-width: 500px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

form label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

form input, form select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

form button {
  padding: 10px 15px;
  background-color: #4a90e2;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

form button:hover {
  background-color: #3a7fc0;
}

/* Student Details for View Student */
.student-details {
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.student-details p {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

.student-details a {
  display: inline-block;
  background-color: #4a90e2;
  color: white;
  padding: 10px 15px;
  border-radius: 5px;
  text-align: center;
  margin-top: 20px;
  transition: background-color 0.3s;
}

.student-details a:hover {
  background-color: #3a7fc0;
}

/* Responsive Styles for Small Screens */
@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    align-items: flex-start;
  }

  .navbar .nav-links {
    flex-direction: column;
    width: 100%;
  }

  .nav-links li {
    margin: 5px 0;
  }

  main {
    padding: 10px;
  }

  form {
    width: 100%;
    padding: 15px;
  }

  h1 {
    font-size: 1.5rem;
  }
}

@media (max-width: 480px) {
  .student-details p {
    font-size: 1rem;
  }

  form input, form select, form button {
    padding: 8px;
  }

  .student-details a {
    width: 100%;
    padding: 12px;
  }
}

</style>
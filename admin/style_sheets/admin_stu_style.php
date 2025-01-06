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
.navbar .logo img {
  height: 60px;
  margin-right: 10px;
}
/* Navbar Styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background: linear-gradient(45deg, #4a90e2, #6dd5ed);
  color: white;
}

.navbar .logo {
  display: flex;
  align-items: center;
}

.navbar .logo img {
  height: 60px;
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

/* Admin Student Management Page */
.student-management {
  padding: 20px;
}

.student-management h1 {
  text-align: center;
  font-size: 2rem;
  color: #4a90e2;
  margin-bottom: 30px;
}

/* Student Table Section */
.student-table table {
  width: 100%;
  border-collapse: collapse;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.student-table th, .student-table td {
  padding: 12px 20px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.student-table th {
  background-color: #4a90e2;
  color: white;
}

.student-table tr:nth-child(even) {
  background-color: #f9f9f9;
}

.student-table .view-btn, .edit-btn, .delete-btn {
  background-color: #4a90e2;
  color: white;
  padding: 8px 15px;
  border-radius: 5px;
  margin-right: 10px;
  transition: transform 0.2s;
}

.student-table .view-btn:hover, .edit-btn:hover, .delete-btn:hover {
  transform: translateY(-3px);
}

.student-table .delete-btn {
  background-color: #ff5f6d;
}

.student-table .view-btn {
  background-color: #07eb31;
}


.student-table .view-btn:active, .edit-btn:active, .delete-btn:active {
  transform: translateY(1px);
}

</style>
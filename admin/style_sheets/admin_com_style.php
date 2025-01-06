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
  flex-wrap: wrap;
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

/* Table Styles */
.table-container {
  width: 90%;
  margin: 20px auto;
  overflow-x: auto;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

table {
  width: 100%;
  border-collapse: collapse;
}

thead {
  background: #4a90e2;
  color: white;
}

thead th {
  text-align: left;
  padding: 10px;
}

tbody tr:nth-child(even) {
  background: #f9f9f9;
}

tbody td {
  padding: 10px;
}

tbody tr:hover {
  background: #f1f1f1;
}

.btn {
  padding: 5px 10px;
  border-radius: 5px;
  text-align: center;
  color: white;
  text-decoration: none;
}

.edit-btn {
  background: #4caf50;
  margin-right: 5px;
}
.view-btn {
  background: #0096FF;
  margin-left: 5px;
}

.add-btn {
  background: #113af2;
  margin-left: 5px;
  padding-top: 10px;
  padding-bottom: 10px;
}

.delete-btn {
  background: #f44336;
}

.edit-btn:hover {
  background: #45a049;
}
.view-btn:hover {
  background: #0000FF;
}
.add-btn:hover {
  background: #0000FF;
}
.delete-btn:hover {
  background: #d32f2f;
}

/* Responsive Styles */
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

  .table-container {
    width: 100%;
  }

  table {
    font-size: 0.9rem;
  }
}

@media (max-width: 480px) {
  thead th, tbody td {
    padding: 8px;
  }

  .btn {
    padding: 5px 8px;
  }
}

</style>
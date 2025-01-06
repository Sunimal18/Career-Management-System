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

.nav-links a:hover {
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

/* Dashboard Content */
.dashboard-content {
  padding: 20px;
  text-align: center;
}

.welcome-section h1 {
  font-size: 2.5rem;
  color: #4a90e2;
}

.welcome-section p {
  margin: 10px 0 30px;
  font-size: 1.2rem;
  color: #555;
}

/* Quick Actions */
.quick-actions {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}
.navbar .logo img {
  height: 60px;
  margin-right: 10px;
}
.action-card {
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  width: 250px;
  padding: 20px;
  text-align: center;
}

.action-card h3 {
  color: #4a90e2;
  margin: 10px 0;
}

.action-card p {
  color: #555;
  font-size: 0.9rem;
  margin: 10px 0;
}

.action-btn {
  display: inline-block;
  padding: 10px 20px;
  background: linear-gradient(45deg, #4a90e2, #6dd5ed);
  color: white;
  border-radius: 20px;
  font-size: 0.9rem;
  transition: transform 0.2s;
}

.action-btn:hover {
  transform: translateY(-3px);
}

@media (max-width: 768px) {
  .navbar .nav-links {
    flex-direction: column;
  }

  .quick-actions {
    flex-direction: column;
  }

  .action-card {
    width: 90%;
  }
}



</style>
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

/* Admin Dashboard Page */
.dashboard {
  padding: 20px;
}

.dashboard h1 {
  text-align: center;
  font-size: 2rem;
  color: #4a90e2;
  margin-bottom: 30px;
}

/* Stats Section */
.stats {
  display: flex;
  justify-content: space-around;
  margin-bottom: 30px;
}

.stat-card {
  background: white;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  width: 30%;
  text-align: center;
}

.stat-card h2 {
  color: #333;
  font-size: 1.5rem;
}

.stat-card p {
  font-size: 1.8rem;
  font-weight: bold;
  color: #4a90e2;
}

/* Latest Activity Section */
.latest-activity h2 {
  font-size: 1.5rem;
  color: #333;
  margin-bottom: 15px;
}

.activity-card {
  background: white;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  margin-bottom: 15px;
}

.activity-card h3 {
  color: #4a90e2;
}

.activity-card p {
  color: #555;
}

</style>
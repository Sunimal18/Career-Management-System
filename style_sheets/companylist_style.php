<style>
/* General Styles */
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: #f4faff;
  color: #333;
}
.navbar .logo img {
  height: 60px;
  margin-right: 10px;
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

/* Main Content Styles */
.company-list {
  padding: 20px;
  text-align: center;
}

.company-list h1 {
  font-size: 2rem;
  color: #4a90e2;
  margin-bottom: 20px;
}

/* Company Grid */
.company-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin: 0 auto;
  max-width: 1200px;
}

.company-card {
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: left;
}

.company-card h3 {
  color: #4a90e2;
  margin: 10px 0;
}

.company-card p {
  color: #555;
  margin: 5px 0;
}

.view-btn {
  display: inline-block;
  margin-top: 10px;
  padding: 10px 15px;
  background: linear-gradient(45deg, #4a90e2, #6dd5ed);
  color: white;
  border-radius: 20px;
  font-size: 0.9rem;
  transition: transform 0.2s;
}

.view-btn:hover {
  transform: translateY(-3px);
}


</style>
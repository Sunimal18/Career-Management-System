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
.company-details {
  padding: 20px;
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

.company-details h1 {
  font-size: 2.5rem;
  color: #4a90e2;
  margin-bottom: 10px;
}

.company-info {
  margin-bottom: 30px;
  text-align: left;
}

.company-info p {
  margin: 10px 0;
  font-size: 1.1rem;
  line-height: 1.6;
}

.action-section {
  text-align: left;
}

.action-section h2 {
  font-size: 1.5rem;
  color: #333;
  margin-bottom: 10px;
}

.action-section ul {
  list-style: disc;
  padding-left: 20px;
}

.action-section ul li {
  margin-bottom: 8px;
  font-size: 1.1rem;
  color: #555;
}

.apply-btn {
  display: inline-block;
  margin-top: 20px;
  padding: 12px 20px;
  background: linear-gradient(45deg, #4a90e2, #6dd5ed);
  color: white;
  border-radius: 20px;
  font-size: 1rem;
  text-align: center;
  transition: transform 0.2s;
}

.apply-btn:hover {
  transform: translateY(-3px);
}


</style>
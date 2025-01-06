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

/* Contact Us Page Styles */
.contact-us {
  text-align: center;
  padding: 20px;
}

.contact-us h1 {
  font-size: 2rem;
  color: #4a90e2;
  margin-bottom: 20px;
}

.contact-us p {
  font-size: 1.1rem;
  color: #555;
  margin-bottom: 30px;
}

.contact-form {
  max-width: 600px;
  margin: 0 auto;
  background: white;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.contact-form input, .contact-form textarea {
  width: 100%;
  padding: 12px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 10px;
  font-size: 1rem;
}

.contact-form button {
  background: linear-gradient(45deg, #4a90e2, #6dd5ed);
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 10px;
  font-size: 1rem;
  cursor: pointer;
  transition: transform 0.2s;
}

.contact-form button:hover {
  transform: translateY(-3px);
}

/* Contact Information Section */
.contact-info {
  margin-top: 30px;
}

.contact-info h2 {
  font-size: 1.5rem;
  color: #333;
  margin-bottom: 10px;
}

.contact-info p {
  font-size: 1.1rem;
  color: #555;
  margin: 5px 0;
}

</style>
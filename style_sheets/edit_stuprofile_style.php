<style>
/* General Styles */
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: #f9f9f9;
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
/* Auth Page */
.auth-page {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #e6f7ff;
}

.auth-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  width: 90%;
  max-width: 400px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.auth-card h2 {
  font-size: 1.8rem;
  color: #4a90e2;
}

.auth-card p {
  margin: 10px 0 20px;
  color: #555;
}

.auth-card form input {
  display: block;
  width: 100%;
  padding: 12px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 10px;
}

.auth-card form .file-label {
  display: block;
  margin: 10px 0 5px;
  text-align: left;
  font-size: 0.9rem;
  color: #666;
}

.auth-card form input[type="file"] {
  display: block;
  padding: 10px;
  width: 100%;
  border: 1px dashed #ccc;
  border-radius: 10px;
  background: #f9f9f9;
  cursor: pointer;
}

.auth-card form input[type="file"]:hover {
  border-color: #4a90e2;
}

.auth-card button {
  background: linear-gradient(45deg, #4a90e2, #6dd5ed);
  color: white;
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 20px;
  font-size: 1rem;
  cursor: pointer;
  transition: transform 0.2s;
}

.auth-card button:hover {
  transform: translateY(-2px);
}

.auth-card .back-link {
  display: inline-block;
  margin-top: 15px;
  color: #4a90e2;
  font-weight: bold;
  font-size: 0.9rem;
}

.auth-card .back-link:hover {
  text-decoration: underline;
}


</style>
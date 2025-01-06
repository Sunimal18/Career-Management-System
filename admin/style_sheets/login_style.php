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

/* Admin Login Page */
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #f4faff;
}

.login-box {
  background: linear-gradient(45deg, #4a90e2, #6dd5ed);
  padding: 40px 30px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 100%;
  text-align: center;
}

.login-box h1 {
  color: white;
  font-size: 2rem;
  margin-bottom: 20px;
}

.textbox {
  margin: 20px 0;
}

.textbox input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
  font-size: 1rem;
  margin-bottom: 10px;
  box-sizing: border-box;
}

.login-btn {
  width: 100%;
  padding: 12px;
  background: #ff5f6d;
  border: none;
  border-radius: 10px;
  font-size: 1rem;
  color: white;
  cursor: pointer;
  transition: transform 0.2s;
}

.login-btn:hover {
  transform: translateY(-3px);
}

.login-btn:active {
  transform: translateY(1px);
}


</style>
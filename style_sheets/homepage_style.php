<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: #f4faff;
  color: #333;
  height: 100vh;
}

.home-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
  text-align: center;
  padding: 20px;
}

.home-header h1 {
  font-size: 2.5rem;
  color: #4a90e2;
  margin: 0;
}

.home-header p {
  margin: 10px 0 20px;
  font-size: 1.2rem;
  color: #555;
}

.cta-button {
  background: linear-gradient(45deg, #ff5f6d, #ffc371);
  color: white;
  padding: 12px 30px;
  border: none;
  border-radius: 30px;
  font-size: 1.2rem;
  text-decoration: none;
  box-shadow: 0 5px 15px rgba(255, 95, 109, 0.3);
  transition: transform 0.2s, box-shadow 0.2s;
}

.cta-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(255, 95, 109, 0.5);
}

.home-illustration img {
  max-width: 80%;
  margin-top: 30px;
}
.navbar .logo img {
  height: 60px;
  margin-right: 10px;
}
@media (max-width: 768px) {
  .home-header h1 {
    font-size: 2rem;
  }

  .home-header p {
    font-size: 1rem;
  }
}

</style>
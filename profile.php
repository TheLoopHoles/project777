<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #F4F4F4;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .profile-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    text-align: center;
  }
  .profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
  }
  .social-links a {
    margin: 0 5px;
    color: #007bff;
    text-decoration: none;
  }
</style>
<title>Profile</title>
</head>
<body>
  <div class="profile-card">
    <img src="profile-image.jpg" alt="Profile Image" class="profile-image">
    <h1>Name</h1>
    <p>Age: </p>
    <p>Address: </p>
    <p>Contact: </p>
    <p>Email: </p>
    <p>Father's Name: </p>
    <p>Mother's Name: </p>
    <div class="social-links">
      <a href="#" target="_blank">Facebook</a>
      <a href="#" target="_blank">Twitter</a>
      <a href="#" target="_blank">LinkedIn</a>
    </div>
    <p>Hobby: </p>
    <p>Profession: </p>
  </div>
</body>
</html>

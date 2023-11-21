<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Contactez-Nous</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #3c4b7b;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom right, #0072ff, #00c6ff);
      /* Adjust the gradient colors and direction as needed */
      color: white;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group textarea {
      width: 100%;
      padding: 8px;
      border-radius: 3px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .form-group textarea {
      resize: vertical;
      height: 100px;
    }

    .form-group input[type="submit"] {
      padding: 10px 20px;
      background-color: #3c4b7b;
      color: #fff;
      border: none;
      border-radius: 5px;
      background-color: #00aaff;
      color: white;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #3c4b7b;
    }
  </style>
</head>

<body>
  <section class="contact-section">
    <h1>Contact Us</h1>
    <form class="contact-form" action="#" method="post">
      <input type="text" name="name" placeholder="nom" required>
      <input type="email" name="email" placeholder="email" required>
      <textarea name="suject" placeholder=" subject" required></textarea>
      <textarea name="message" placeholder=" message" required></textarea>
      <input type="submit" value="envoyer">
    </form>
  </div>
</body>

</html>
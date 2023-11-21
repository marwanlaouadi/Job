<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: #3c4b7b ;
      /* Adjust the gradient colors and direction as needed */
      color: white;
    }

    .contact-section {
      padding: 50px 20px;
      text-align: center;
    }

    .contact-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      background-color: rgba(255, 255, 255, 0.1);
      /* Adjust opacity as needed */
    }

    .contact-form input[type="text"],
    .contact-form input[type="email"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
      background-color: rgba(255, 255, 255, 0.8);
      /* Adjust input background opacity as needed */
    }

    .contact-form textarea {
      height: 100px;
    }

    .contact-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #1138b2;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-form input[type="submit"]:hover {
      background-color: #0077cc;
    }
  </style>
</head>
<body>
  <section class="contact-section">
    <h1>Contact Us</h1>
    <form class="contact-form" action="#" method="post">
      <input type="text" name="name" placeholder="nom" required>
      <input type="email" name="email" placeholder="email" required>
      <input type="email" name="telephone" placeholder="telephone" required>
      <input type="email" name="email" placeholder="sujet" required>
      <textarea name="message" placeholder=" message" required></textarea>      <input type="submit" value="envoyer">
    </form>
  </section>
</body>
</html>

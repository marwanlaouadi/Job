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
      border-radius: 3px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #3c4b7b;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>Contactez-Nous</h2>
    <form id="contact-form" action="#" method="post">
      <div class="form-group">
        <label for="fullname">Nom et prénom:</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>
      <div class="form-group">
        <label for="Télephone">Télephone:</label>
        <input type="text" id="Télephone" name="Télephone">
      </div>
      <div class="form-group">
        <label for="fax">Fax:</label>
        <input type="text" id="fax" name="fax">
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="address">Adresse:</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="wilaya">Wilaya:</label>
        <input type="text" id="wilaya" name="wilaya" required>
      </div>
      <div class="form-group">
        <label for="zipcode">Code postal:</label>
        <input type="text" id="zipcode" name="zipcode" required>
      </div>
      <div class="form-group">
        <label for="city">Ville:</label>
        <input type="text" id="city" name="city" required>
      </div>
      <div class="form-group">
        <label for="country">Pays:</label>
        <input type="text" id="country" name="country" required>
      </div>
      <div class="form-group">
        <label for="subject">Objet:</label>
        <input type="text" id="subject" name="subject" required>
      </div>
      <div class="form-group">
        <label for="service">Service concerné:</label>
        <input type="text" id="service" name="service" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Envoyer">
      </div>
    <div class="contact-emails">
      <p>Contactez-nous via e-mail :</p>
      <ul>
      <li><a href="mailto:info@condor.dz">Direction générale : info@condor.dz</a></li>
        <li><a href="mailto:commercial@condor.dz">Commercial : commercial@condor.dz</a></li>
        <li><a href="mailto:marketing@condor.dz">Marketing : marketing@condor.dz</a></li>
        <li><a href="mailto:secretariat.sav@condor.dz">Service après vente : secretariat.sav@condor.dz</a></li>
        <li><a href="mailto:comm.cm@condor.dz">Condor Informatique (commercial BBA) : comm.cm@condor.dz</a></li>
        <li><a href="mailto:commercial.mma@condor.dz">Condor Informatique (commercial alger) : commercial.mma@condor.dz</a></li>
        <li><a href="mailto:sav.cm@condor.dz">Condor Informatique (sav) : sav.cm@condor.dz</a></li>
        <li><a href="mailto:clim.centralisee@condor.dz">Climatisation Centralisée : clim.centralisee@condor.dz</a></li>
        <li><a href="mailto:achats.locaux@condor.dz">Achats Locaux : achats.locaux@condor.dz</a></li>
        <li><a href="mailto:recrute@condor.dz">Ressources humaines (recrutement) : recrute@condor.dz</a></li>
        <li><a href="mailto:drh@condor.dz">Ressources humaines (autres) : drh@condor.dz</a></li>
      </ul>
    </div>
  </div>
    </form>
  </div>
</body>

</html>
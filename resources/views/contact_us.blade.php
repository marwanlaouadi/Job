<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        main {
            margin: 20px;
        }

        section {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1, h2 {
            font-size: 24px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contactez-nous</h1>
    </header>

    <main>
        <section>
            <h2>Nous Contacter</h2>
            <p>Vous pouvez nous contacter en utilisant le formulaire ci-dessous :</p>
            <form action="traiter_formulaire.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="email">Adresse Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <input type="submit" value="Envoyer">
            </form>
        </section>
    </main>

    <footer>
        <p>Contactez-nous à l'adresse email : <a href="mailto:contact@exemple.com">contact@exemple.com</a></p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"><!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<h1>
    Formulaire d'inscription
</h1>

</html>

<form class="container" action="verification.php" method="POST">
    <p></p> <label for="firstname" class="form-label">Prénom :</label>
    <input type="text" name="firstname" class="form-label" required placeholder="Jean">
    </p>
    <p><label for="name" class="form-label">Nom :</label>
        <input type="text" name="name" class="form-label" required placeholder="Bon">
    </p>
    <p><label for="courriel" class="form-label">📨 E-mail :</label>
        <input type="email" name="courriel" class="form-label" required placeholder="mail@mail.com">
    </p>
    </p>
    <p><label for="telephone" class="form-label">📱 Telephone :</label>
        <input type="text" name="phone" class="form-label" required placeholder="xx.xx.xx.xx.xx">
    </p>
    <p><label for="subject" class="form-label">Sujets :</label>
        <select name="subject" id="subject" form="subjectForm">
            <option value="sujets">Sujets</option>
            <option value="Reclamations">Reclamations</option>
            <option value="SAV">SAV</option>
            <option value="Livraison">Livraison</option>
            <option value="Retour">Retour</option>
        </select>
    <p><label for="message" class="form-label">📝 Votre message :</label>
    <p></p>
    <textarea name="message" class="form-label">Votre message ici </textarea>
    </p>


    <input type="submit" class="btn btn-primary" value="Envoyer 🚀">
    </p>
</form>
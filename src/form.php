<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <h1>Ajouter un Stage:</h1>
    <form action="create.php" method="post">
        <label id="statut">Statut de la recherche:</label>
        <br>
        <select name="statut" id="statut" value="<?= $user["statut"] ?>" required>
            <option>A postulé</option>
            <option>Ne correspond pas</option>
            <option>Entretien</option>
            <option>Offre</option>
            <option>Refus</option>
            <option>Embauche</option>
            <option>Pas de réponse</option>
            <option>Relancé</option>
        </select>
        <br>
        <label for="nom">Nom de l'entreprise:</label>
        <br>
        <input type="text" name="nom" required>
        <br>
        <label for="datation">Date de postulation:</label>
        <br>
        <input type="date" name="datation" required>
        <br>

        <label id="postulation">Type de postulation:</label>
        <br>
        <select name="postulation" id="postulation" value="<?= $user["postulation"] ?>" required>
            <option>Spontanée</option>
            <option>Réponse à une offre</option>
            <option>Recommandation</option>
            <option>Sollicitation directe</option>
        </select>
        <br>
        <label id="methode">Méthode de postulation:</label>
        <br>
        <select name="methode" id="methode" value="<?= $user["postulation"] ?>" required>
            <option>En personne</option>
            <option>e-mail</option>
            <option>LinkedIn</option>
            <option>Job board</option>
            <option>Website</option>
            <option>Recommandation</option>
            <option>Sollicitation directe</option>
        </select>
        <br>
        <label for="poste">Intitulé du poste:</label>
        <br>
        <input type="text" name="poste" required>
        <br>
        <label id="contrat">Type contrat:</label>
        <br>
        <select name="contrat" id="contrat" value="<?= $user["postulation"] ?>" required>
            <option>Stage</option>
            <option>CDD</option>
            <option>CDI</option>
            <option>Apprentissage</option>
            <option>Freelance</option>
        </select>
        <br>
        <label for="email">e-mail:</label>
        <br>
        <input type="email" name="email" required>
        <br>
        <label for="commentaires">Commentaires:</label>
        <br>
        <textarea name="commentaires" id="commentaires" cols="50" rows="10" placeholder="Votre commentaire"></textarea>
        <br>
        <button>Ajouter</button>
    </form>
    <br>
    <a href="user_dashboard.php">Retour</a>
    <?php
    // print_r($_POST);
    ?>
</body>

</html>
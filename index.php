<!DOCTYPE html>
<html>
<head>
    <title>Affichage et Insertion de la Date</title>
</head>
<body>
    <?php
    // Configuration de la base de données
    $host = 'db';
    $username = 'root';
    $password = 'Nizou@@84';
    $database = 'date_docker';

    // Établir la connexion à la base de données
    $mysqli = new mysqli($host, $username, $password, $database);

    // Vérifier la connexion
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base de données : " . $mysqli->connect_error);
    }

    // Obtenir la date système
    $dateSysteme = date('Y-m-d H:i:s');

    // Insérer la date dans la table date_maint
    $query = "INSERT INTO date_maint (date) VALUES (?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $dateSysteme);

    if ($stmt->execute()) {
        echo "Date insérée avec succès : $dateSysteme<br>";
    } else {
        echo "Erreur lors de l'insertion de la date : " . $stmt->error . "<br>";
    }

    // Afficher la date système
    echo "Date système : $dateSysteme";

    // Fermer la connexion à la base de données
    $stmt->close();
    $mysqli->close();
    ?>
</body>
</html>

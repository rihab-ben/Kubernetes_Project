<?php
$table = 'candidats'; // Nom de la table MySQL

// Connexion à la base de données MySQL
$conn = new mysqli('database_MySQL', 'root', 'password', 'database_candidats');
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Requête SQL pour récupérer toutes les données de la table
$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Note de concours </th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nom"] . "</td><td>" . $row["prenom"] . "</td><td>" . $row["note"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucune donnée trouvée dans la table.";
}

// Fermer la connexion à la base de données
$conn->close();
?>


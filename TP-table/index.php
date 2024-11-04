<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h2>Liste des étudiants</h2>

<?php
$query = $db->prepare("SELECT * FROM etudiant");
$query->execute();
$etudiants = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($etudiants) > 0) {
    echo '<table  class="table table-hover m-3 border="1">';
    echo '<tr><th>ID</th><th>Nom</th><th>Email</th><th>Actions</th></tr>';
    foreach ($etudiants as $etudiant) {
        echo '<tr>';
        echo '<td>'.$etudiant['id'].'</td>';
        echo '<td>'.$etudiant['nom'].'</td>';
        echo '<td>'.$etudiant['email'].'</td>';
        echo '<td><a href="edit.php?id='.$etudiant['id'].'">Modifier</a> | <a href="delete.php?id='.$etudiant['id'].'">Supprimer</a></td>';
        echo '</tr>';
    }
    
    echo '</table>';
} else {
    echo 'Aucun étudiant trouvé.';
}
?>

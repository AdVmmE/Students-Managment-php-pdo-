<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<?php
// Vérifier si l'identifiant de l'étudiant est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les données de l'étudiant à modifier
    $query = $db->prepare("SELECT * FROM etudiant WHERE id = ?");
    $query->execute([$id]);
    //$etudiant = $query->fetch(PDO::FETCH_ASSOC);

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];

        // Mettre à jour les données de l'étudiant dans la base de données
        $query = $db->prepare("UPDATE etudiant SET nom = ?, email = ? WHERE id = ?");
        $query->execute([$nom, $email, $id]);

        echo "Étudiant mis à jour avec succès.";
    }
}
?>
bach na5d oid
1)-
<a  href="index.php?id='etudian['id']'">Retour</a
2)
$id = $_get["id"];


$var = $db->prepare("SELECT * FROM etudians WHERE id=?");
$var->execute([$id]);
<h2>Modifier un étudiant</h2>
<form method="post">
    <label>Nom:</label><br>
    <input type="text" name="nom"  required><br>
    <label>Email:</label><br>
    <input type="email" name="email"  required><br>
    <input type="submit" value="Modifier">
</form>

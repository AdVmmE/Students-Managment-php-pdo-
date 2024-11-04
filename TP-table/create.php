<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];

    $query = $db->prepare("INSERT INTO etudiant (nom, email) VALUES (?, ?)");
    $query->execute([$nom, $email]);

    echo "Étudiant ajouté avec succès.";
}
?>

<h2>Créer un étudiant</h2>
<form method="post" class="m-5">
    
    <label >Nom:</label><br>
    <input class="form-control rounded-0 " style="width:255px;" type="text" placeholder="Enter Votre Nom" name="nom" required><br>
    <label>Email:</label><br>
    <input type="email" class="form-control rounded-0 " placeholder="Enter Votre Email" style="width:255px;" name="email" required><br>
    <input class="btn btn-outline-success" type="submit" value="Ajouter">
</form>

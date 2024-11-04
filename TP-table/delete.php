<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = $db->prepare("DELETE FROM etudiant WHERE id = ?");
    $query->execute([$id]);
    echo "<h1>L'étudiant a été supprimé.</h1>";
    header("inde.php");
}
?>

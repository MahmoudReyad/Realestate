<?php
include 'includes/templates/header.signed.inc.php';
session_start();
echo $_SESSION['id'];

?>

<?php
include 'includes/templates/footer.inc.php';
?>
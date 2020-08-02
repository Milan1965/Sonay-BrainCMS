<?php include "includes/header_scripts.php" ?>
<?php


$getArticles = $dbh->prepare("TRUNCATE `verzoek`");
$getArticles->execute();
?>
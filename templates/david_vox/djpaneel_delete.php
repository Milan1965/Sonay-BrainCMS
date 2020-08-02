<?php
$query = "TRUNCATE 'verzoek'";
$queryResult = $db->prepare($query);
$queryResult->execute(array(':id' => $id));
?>
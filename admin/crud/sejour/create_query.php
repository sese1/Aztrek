<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$categorie_id = $_POST['detination_id'];
$description = $_POST['description'];
$description_courte = $_POST['description'];


// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertRecette($titre, $categorie_id, $filename, $description,  $user["id"]);

header('Location: index.php');
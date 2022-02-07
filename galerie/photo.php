<?php
    include "lib.php";

    $galleryFolder = filter_input(INPUT_GET,'galleryName', FILTER_SANITIZE_STRING);
    $imgIndex = filter_input(INPUT_GET,'num', FILTER_SANITIZE_NUMBER_INT);

    $images = getImages("img/$galleryFolder");

    $imageName = $images[$imgIndex];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Galerie</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body id="page">

<h1><?php echo $galleryFolder ?></h1>

<div class="photo">
    <img src="img/<?php echo $galleryFolder.'/'.$imageName ?>">
</div>
</body>
</html>

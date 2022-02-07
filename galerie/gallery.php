<?php
    include "lib.php";

    $galleryFolder = filter_input(INPUT_GET,'galleryName', FILTER_SANITIZE_STRING);

    $images = getImages("img/$galleryFolder");

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

<div class="gallery">
<?php echo getTumbs($images, $galleryFolder); ?>
</div>
</body>
</html>

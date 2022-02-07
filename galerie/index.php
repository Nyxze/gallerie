<?php
    include 'lib.php';
$galleries = getImageFolders('img');
$nbGalleries = count($galleries);

$galleryLinks = '<ul>';

foreach($galleries as $gallery){
    $galleryLinks .= "<li><a href='gallery.php?galleryName=$gallery'>$gallery</a></li>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Galerie</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body id="page">

<h1>Liste des galeries (<?php echo $nbGalleries ?>)</h1>

<?php echo $galleryLinks; ?>

</body>
</html>

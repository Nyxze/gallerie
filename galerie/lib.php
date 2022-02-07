<?php

function getImages($folder){
    $folderContent = scandir($folder);
    $files = array_filter($folderContent, function($element) use ($folder){
        $extension = pathinfo($folder.'/'.$element, PATHINFO_EXTENSION);
        return is_file($folder.'/'.$element) and $extension== 'jpg';
    });

    return array_values($files);
}

function getImageFolders($rootFolder){
    $folderContent = scandir($rootFolder);
    $folders = array_filter($folderContent, function($element) use ($rootFolder){
        return is_dir($rootFolder.'/'.$element) and !($element =='.' or $element=='..');
    });

    return array_values($folders);
}

function getTumbs(array $source, $folder){
    $html = "";
    $nbImages = count($source);
    for($i=0; $i< $nbImages; $i++){
        $html .= "<a href='photo.php?galleryName=$folder&num=$i'>";
        $html .= "<img src='img/$folder/".$source[$i]."' class='thumbs'>";
        $html .= "</a>";
    }

    return $html;
}
<?php
function OutputImage ($src){
    global $fileType;

    switch ($fileType) {

        case IMAGETYPE_JPEG :
            header("Content-type: image/jpg");
            imagejpeg($src);
            break;
        case IMAGETYPE_PNG :
            header("Content-type: image/png");
            imagepng($src);
            break;
        default :
            header("Content-type: image/jpg");
            imagejpeg($src);
    }
}

$filetype = IMAGETYPE_JPEG;

$filename = $_GET['imagename'];

$src = imagecreatefromjpeg($filename);

OutputImage($src);
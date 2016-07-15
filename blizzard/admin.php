<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 09.07.2016
 * Time: 13:40
 */
function ShowImages ($path) {
    $fimages = glob($path . '/*.{jpeg,png,jpg}', GLOB_BRACE);
//    $fimages = glob($path . '/*.jpg');
    foreach ($fimages as $filename) {
//        echo "<img src='$filename'>";
        ?>
        <img src="<?=$filename?>" />
        <form action="delete_image.php">
            <input type="hidden" name="filename" value="<?=$filename?>" />
            <input type="submit" value="delete picture" /><br>
        </form>
<?php
    }
//    $fimages = glob($path . '/*.png');
//    foreach ($fimages as $filename) {
//        echo "<img src='$filename' />";
//    }
}

include_once ('headers_02.php');

switch ($_SERVER['PHP_AUTH_USER']) {
    case 'admin':
        echo 'Admin<br>';
        foreach ($_SERVER as $key => $value) {
            echo "$key = $value <br>";
        }
        break;
    case 'moderator':
        echo 'Moderator<br>';
        foreach ($_COOKIE as $key => $value) {
            echo "$key = $value <br>";
        }
        ShowImages('images');
        break;
    case 'user':
        echo 'Hello user';
        include_once ('user_form.html');
        break;
    default:
        echo 'No accesses';
}
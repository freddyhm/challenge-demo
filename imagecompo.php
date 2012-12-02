<?php


if (isset($_POST['playerpic']) || isset($_POST['friendpic']) )
{
    $player = $_POST['playerpic'];
    $friend = $_POST['friendpic'];

    // Create image instances
    $fbBckg = imagecreatefrompng('images/views/playercard/bg_facebookpost.png');


    // Get new dimensions
    list($playerWidth, $playerHeight) = getimagesize($player);
    list($friendWidth, $friendHeight) = getimagesize($friend);

    $new_width = 155;
    $new_height = 150;

    // Resample
    $playerImgFinal = imagecreatetruecolor($new_width, $new_height);
    $playerImg = imagecreatefromjpeg($player);

    imagecopyresampled($playerImgFinal, $playerImg, 0, 0, 0, 0, $new_width, $new_height, $playerWidth, $playerHeight);

    // Resample
    $friendImgFinal = imagecreatetruecolor($new_width, $new_height);
    $friendImg = imagecreatefromjpeg($friend);

    imagecopyresampled($friendImgFinal, $friendImg, 0, 0, 0, 0, $new_width, $new_height, $friendWidth, $friendHeight);


    // Copy and merge
    $player = imagecopymerge($fbBckg, $playerImgFinal, 204, 123, 0, 0, 153, 145, 100);
    $friend = imagecopymerge($fbBckg, $friendImgFinal, 203, 453, 0, 0, 153, 145, 100);

    imagepng($fbBckg, 'fbPostPic.png');
  
     echo "http://www.growple.com/demo/fbPostPic.png";

     imagedestroy($fbBckg);
     imagedestroy($playerImg);
     imagedestroy($friendImg);
}

?>
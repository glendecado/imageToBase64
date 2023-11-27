<?php
include("index.php");
if (isset($_POST['submit']) && isset($_FILES['images'])) {

    $type = $_FILES['images']['type'];
    $tempName = $_FILES['images']['tmp_name'];


    //////////////////////////////////////////////////////////

    echo "<pre>";
    print_r($_FILES['images']);
    echo "</pre>";

    /////////////////////////////////////////////////////////

    $image = file_get_contents($tempName);
    $imageData = base64_encode($image);
    $base64outPut = 'data:' . $type  . ';base64,' . $imageData;

    ///////////////////////////////////////////////////////

    echo "<center>";

    echo '<textarea style="width:1000px; height: 500px;" >';
    echo $base64outPut;
    echo '</textarea>';

    echo "</center>";
} else {
    echo 'error';
}

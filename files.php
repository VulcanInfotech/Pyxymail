<?php
$files = glob("uploads/Navjyot/*.*");

for ($i=0; $i<count($files); $i++)
{

$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
    //print $image ."<br />";
    echo '<img src="'.$image.'" alt="Random image" height="200px" width="250px"/><a href="delimg.php?delimg='.$image.'">del</a>';
} else {
    continue;
 }

}
?>
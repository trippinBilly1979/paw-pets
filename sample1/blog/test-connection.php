<?php
$link = mysqli_connect('localhost', 'pawpet', 'password');
if (!$link) {
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>

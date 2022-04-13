<?php
$DB_HOSTNAME = getenv("DB_HOSTNAME");
$DB_USERNAME = getenv("DB_USERNAME");
$DB_PASSWORD = getenv("DB_PASSWORD");

$link = mysqli_connect($DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD);
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
echo gethostname();
mysqli_close($link);
?>

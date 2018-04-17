<? php

DEFINE('DB_USER', 'cs332s43');
DEFINE('DB_PASSWORD', 'cootieng');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'cs332s43');

$dbConnect = @msqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connec to MySQL Database' .
    mysqli_connect_error());

?>


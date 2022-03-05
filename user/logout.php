<?php 
session_start();
include "../config/database.php" ;
global $db;

unset($_COOKIE['co_v']);
setcookie('co_v','',time(),'/');
session_unset();
session_destroy();

header("location:../");


?>
<script></script>
<!-- Mettre FIN DES COOKIES JS -->
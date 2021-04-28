<?php

setcookie('loggedIn',' ',Time()-3600);

setcookie('user_id',' ',Time()-3600);

setcookie('name',' ',Time()-3600);

header('Location: homepage.php?logout=yes');
exit();

?>
<?php
$feedback = $_POST['feedback'];
$name = $_POST['name'];
mail("sm6149155@gmail.com","Feedback",$feedback);

header("Location: homepage.php?msgSent=yes");

exit();

?>
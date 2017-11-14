<?php

require_once __DIR__.'/../inc/config.php';


if (!empty($_POST)) {
 $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
 $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
 $email = isset($_POST['mail']) ? $_POST['mail'] : '';
 $subject= isset($_POST['subject']) ? $_POST['subject'] : '';

 $lname = strtoupper(trim(strip_tags($lname)));
 $fname = ucfirst(trim(strip_tags($fname)));
 $email = trim(strip_tags($mail));
 $subject = trim($date);

 $formOk = true;
	if (empty($lname)) {
		echo 'Nom vide<br>';
		$formOk = false;
	}
	else if (strlen($lname) < 2) {
		echo 'Nom invalide<br>';
	$formOk = false;
  }
  if (empty($fname)) {
		echo 'Prénom vide<br>';
 	$formOk = false;
  }
  else if (strlen($fname) < 2) {
  	echo 'Prénom invalide<br>';
	$formOk = false;
  }
  if (empty($email)) {
		echo 'Email vide<br>';
		$formOk = false;
	}
  else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'Email invalide<br>';
    $formOk = false;
  }
  if (empty($subject)) {
		echo 'Date vide<br>';
 	$formOk = false;
  }
  else if (strlen($subject) < 10) {
  	echo 'Date invalide<br>';
	$formOk = false;
 }
}
 if ($formOk) {


		$displayForm = false;
      $to ="francois.laureen@gmail.com";
      $subject="Message envoyé";
      $htmlContent="0.........................";
      sendEmail($to, $subject, $htmlContent, $textContent='')
}





require_once __DIR__.'/../view/add.php';
?>

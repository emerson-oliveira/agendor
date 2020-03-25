<?php


if (isset($_REQUEST['BTEnvia'])) {

 $nome = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $phone = $_REQUEST['phone']; 

require_once('IntegrationAgendor.php');


$integration = new IntegrationAgendor();
$integration->createPerson($nome, $email, $phone);
var_dump($integration->callback());
}

//header('Location: /?msg=sucess');
exit;
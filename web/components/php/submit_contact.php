<?php
require_once '../../includes/PHP-Multi-SQL/classes/MySQL.class.php';
$db = new MySQL('192.185.35.74', 'pmphotog_Startup', 'CWUStartup2015', 'pmphotog_cwuStartup');
if(isset($_POST['contact']['name'])){
   $Name = $_POST['contact']['name'];
  $Email = $_POST['contact']['email'];
  $Message = $_POST['contact']['message'];
  $contact = array(
      'ContactName' => $Name,
      'ContactEmail' => $Email,
      'ContactPhone' => $_POST['contact']['phone'],
      'ContactMessage' => $Message
  );
  $success = $db->insert('`pmphotog_cwuStartup`.`Website_Contact`', $contact);
  print_r($success);
}
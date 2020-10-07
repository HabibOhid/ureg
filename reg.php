<?php include_once 'config/init.php'; ?>

<?php
 $reg = new Reg;

 if(isset($_POST['del_id'])){
   $del_id = $_POST['del_id'];
   if($reg->delete($del_id)){
     redirect('index.php', 'Registration Deleted', 'success');
   } else {
     redirect('index.php', 'Registration Not  Deleted', 'error');
   }
 }

$template = new Template('templates/reg-single.php');

$reg_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->reg = $reg->getReg($reg_id );

echo $template;

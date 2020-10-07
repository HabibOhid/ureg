<?php include_once 'config/init.php'; ?>

<?php
 $reg = new Reg;

 $reg_id = isset($_GET['id']) ? $_GET['id'] : null;

 if(isset($_POST['submit'])){
   //Create Array
   $data = array();
   $data['job_title'] = $_POST['job_title'];
   $data['previous_company'] = $_POST['previous_company'];
   $data['category_id'] = $_POST['category'];
   $data['about'] = $_POST['about'];
   $data['location'] = $_POST['location'];
   $data['contact_user'] = $_POST['contact_user'];
   $data['contact_email'] = $_POST['contact_email'];

   if($reg->update($reg_id, $data)){
     redirect('index.php', 'Your job has been updated', 'sucess');
   } else{
     redirect('index.php', 'Something went wrong ', 'error');
   }
 }

$template = new Template('templates/reg-edit.php');

$template->reg = $reg->getReg($reg_id );
$template->categories = $reg->getCategories();

echo $template;

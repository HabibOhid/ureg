 <?php include_once 'config/init.php'; ?>

<?php
  $reg = new Reg;

 $template = new Template('templates/frontpage.php');

 $category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
  $template->regs = $reg->getByCategory($category);
  $template->title = 'Registration In '. $reg->getCategory($category)->name; 
}else{
  $template->title = 'Recent Application';
  $template->regs = $reg->getAllRegs();
}


 $template->categories = $reg->getCategories();

echo $template;

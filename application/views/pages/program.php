<?php
  if($this->session->userdata('admin_logged_in') == '') {
    redirect('admin/login');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/custom.css">
</head>
<body>
	<div class="w3-bar w3-border adminNav">
	  <a href="notice" class="w3-bar-item w3-button ">Add Notice</a>
	  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-light-green">Add Programs</a>
	  <a href="logout" class="w3-bar-item w3-button w3-right">Logout</a>	
	</div>
</body>
</html>
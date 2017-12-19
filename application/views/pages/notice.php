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

	<link rel="stylesheet" href="<?php echo base_url()?>texteditor/dist/css/jquery.wysiwygEditor.css">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/custom.css">
</head>
<body>
	<div class="w3-bar w3-border adminNav" >
	  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-light-green">Add Notice</a>
	  <a href="program" class="w3-bar-item w3-button">Add Programs</a>
	  <a href="logout" class="w3-bar-item w3-button w3-right">Logout</a>
	</div>

	<div class="w3-container" style="margin-top: 50px">
		<h4 class="w3-center w3-animate-top w3-myfont adfirsthdrstyle">ADD NOTICE</h4>
		<div class="w3-container w3-padding-32 w3-card-2">
			<div class="w3-row-padding">
				<div class="w3-col m6 w3-container">
					<div class="w3-padding w3-card-2">
						<header class="w3-light-green w3-padding-5 w3-center adheaderca"><h4 class="w3-padding-5"><i class="fa fa-pencil-square-o"></i> Write A notice</h4></header>
				     	<form class="w3-container" action="addnotice" method="post">
				  			<p><label><b>Notice Header</b></label>
				  			<input class="w3-input w3-border w3-round w3-border-light-green" name="noticename" type="text" placeholder="Enter notice header ..."></p>

					  		<div>
						      <textarea class="wysiwyg-editor" name="noticebody"></textarea>
						    </div>

				  			<p><button class="w3-btn w3-light-green">Submit</button></p>
						</form>		
					</div>
				</div>

				<div class="w3-col m6 w3-container">
					<div class="w3-padding w3-card-2">
					<header class="w3-light-green w3-padding-5 w3-center adheaderca"><h4 class="w3-padding-5"><i class="fa fa-upload" aria-hidden="true"></i> Upload A notice</h4></header>
			     	<form class="w3-container" action="uploadnotice" method="post">
			  			<p><label><b>Notice Header</b></label>
			  			<input class="w3-input w3-border w3-round w3-border-light-green" name="noticename" type="text" placeholder="Enter notice header ..."></p>
			  			<p><label><b>Upload A File</b></label>
			  			<input class="w3-input w3-border w3-round w3-border-light-green"  type="file" placeholder="enter a notice header"></p>
			  			<p><button class="w3-btn w3-light-green">Submit</button></p>
					</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.js"></script>
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="<?php echo base_url()?>texteditor/dist/js/jquery.wysiwygEditor.js"></script>
 	<script type="text/javascript">
  	  $('.wysiwyg-editor').wysiwygEditor();
  	</script>
</body>
</html>
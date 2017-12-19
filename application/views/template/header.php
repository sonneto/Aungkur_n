<!DOCTYPE html>
<html>
<title><?php echo $title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/custom.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>engine1/style.css" />
<script type="text/javascript" src="<?php echo base_url()?>engine1/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="engine2/style.css" />
<script type="text/javascript" src="engine2/jquery.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>js/custom.js"></script>

<script src></script>
<style type="text/css">
	@font-face {
		font-family: "font_1";
		src: url("<?php echo base_url()?>fonts/english-111-vivace-bt.ttf");		
	}
</style>

<body>

	<div class="w3-bar w3-text-white w3-large" style="background: #37010e;margin-top: -2px;margin-bottom: -0px">
	  <a href="#" class="w3-bar-item w3-button" style="padding-bottom: 0px">CONTACT</a>
	  <a href="https://www.facebook.com/AungkurPalliUnnayanKendra/?ref=br_rs" class="w3-bar-item w3-button w3-right" style="padding-bottom: 0px"><i class="fa fa-facebook w3-xlarge"></i></a>
	  <a href="address" class="w3-bar-item w3-button w3-right" style="padding-bottom: 0px"><i class="fa fa-envelope w3-xlarge"></i></a>
	  <a href="address" class="w3-bar-item w3-button w3-right" style="padding-bottom: 0px"><i class="fa fa-phone w3-xlarge"></i></a>
	  <a href="address" class="w3-bar-item w3-button w3-right" style="padding-bottom: 0px"><i class="fa fa-map-marker w3-xlarge"></i></a>
	  <a href="address" class="w3-bar-item w3-button w3-right" style="padding-bottom: 0px"><i class="fa fa-home w3-xlarge"></i></a>
	</div>

	<!-- banner img -->
	<div class="w3-container w3-text-white" id="banner" style="padding: 0px">
		<h2 class="w3-center w3-xxxlarge w3-myfont" style="margin-top: -5px">Aungkur Palli Unnayan Kendra</h2>
		<p class="w3-center" style="font-family: 'font_1', Arial, sans-serif; font-size: 36px;margin-top: -20px; height: 20px">A Center For Rural Develeopment</p>
	</div>
	<!-- banner img ends -->


	<!-- scrolling notice -->
	<div class="w3-light-grey"">
		<div class="TickerNews" id="T1" style="height: 30px">
		    <div class="ti_wrapper">
		        <div class="ti_slide">
		            <div class="ti_content">
		                <?php foreach ($allnotices as $not) {?>	
		               		<div class="ti_news " style="margin-top: -10px"><a href="<?php echo base_url()?>notice/<?php echo $not['id']?>" class="w3-text-teal"><i><?php echo $not['name']?></i> <span class="w3-text-black"> | </span> </a></div>	
		               	<?php }?>
		            </div>
		        </div>
		    </div>
	    </div>
	</div>
	<!-- scrolling notice ends-->


	<!-- logo and featured img -->
	<div class="w3-row w3-sand">
		<div class="w3-col l2 m2 w3-padding w3-center">
			<img src="<?php echo base_url()?>img/logo.png" alt="logo" width="82%">
		</div>
		
		<div class="w3-col l10 m10">
			<div id="wowslider-container1">
				<div class="ws_images">
					<ul>
						<li><img src="data1/images/1.jpg" alt="e2c22687ad888f747a3bdcd083f352db" title="e2c22687ad888f747a3bdcd083f352db" id="wows1_0"/></li>
						<li><img src="data1/images/2.jpg" alt="wowslider.com" title="gecko-2299365_960_720" id="wows1_1"/></li>
						<li><img src="data1/images/3.jpg" alt="pexels-photo-248797" title="pexels-photo-248797" id="wows1_2"/></li>
						<li><img src="data1/images/4.jpg" alt="pexels-photo-248797" title="pexels-photo-248797" id="wows1_3"/></li>
						<li><img src="data1/images/5.jpg" alt="pexels-photo-248797" title="pexels-photo-248797" id="wows1_4"/></li>
					</ul>
				</div>		
			</div>	
			<script type="text/javascript" src="<?php echo base_url()?>engine1/wowslider.js"></script>
			<script type="text/javascript" src="<?php echo base_url()?>engine1/script.js"></script>
		</div>
	</div>
	<!-- logo and featured img ends-->


	<!-- menu bar -->
	<div class="w3-row">
		<div class="w3-bar w3-text-white" style="padding-left: 30px;background: #03015e">
			<a href="<?php echo base_url()?>" class="w3-bar-item w3-button"><i class="fa fa-home w3-large"></i> HOME</a>
			<div class="w3-dropdown-hover">
	      		<button class="w3-button w3-hide-small"><i class="fa fa-address-card w3-large"></i> ABOUT AUNGKUR</button>
	      		<div class="w3-dropdown-content w3-bar-block w3-card-2  w3-light-grey" style="width: 186.5px">
			        <a href="mission" class="w3-bar-item w3-button">Mission & Vision</a>
			        <a href="goal" class="w3-bar-item w3-button">Goal & Objectives</a>
			        <a href="legal" class="w3-bar-item w3-button">Legal Status</a>
			    <!--     <a href="ec" class="w3-bar-item w3-button">EC Members</a>
			        <a href="staffs" class="w3-bar-item w3-button">Staffs</a> -->
	      		</div>
	    	</div>
	    	<div class="w3-dropdown-hover">
	      		<button class="w3-button w3-hide-small"> <i class="fa fa-briefcase w3-large"></i> AUNGKUR'S PROGRAM</button>
	      		<div class="w3-dropdown-content w3-bar-block w3-card-2 w3-light-grey" style="z-index: 100;width: 217.73px;height: 500px;overflow: auto;">
			        <a href="village_based" class="w3-bar-item w3-button">Village Based Micro-institution Building</a>
			        <a href="human_resource" class="w3-bar-item w3-button">Human Resource Development Program</a>
			        <a href="water_sanitation" class="w3-bar-item w3-button">Water Sanitation & Arsenic Mitigation Program</a>
			        <a href="income_generation" class="w3-bar-item w3-button">Income Generation and Employment Creation Program</a>
			        <a href="micro_credit" class="w3-bar-item w3-button">Micro Credit </a>
			        <a href="primary_education" class="w3-bar-item w3-button">Primary Education (PE)</a>
			        <a href="primary_health" class="w3-bar-item w3-button">Primary Healthcare and Support Service Development Program</a>
			        <a href="human_right" class="w3-bar-item w3-button">Human Rights, Democracy and Good Governance Development Program</a>
			        <a href="sustainable_natural" class="w3-bar-item w3-button">Sustainable Natural Resource Development and Management Program</a>
			        <a href="gender_dev" class="w3-bar-item w3-button">Gender Development Program</a>
			        <a href="folk_culture" class="w3-bar-item w3-button">Folk Culture</a>
			        <a href="relief_rehab" class="w3-bar-item w3-button">Relief and Rehabilitation Program</a>
	      		</div>
	    	</div>

			<a href="current_activities" class="w3-bar-item w3-button w3-hide-small" ><i class="fa fa-superpowers w3-large"></i> CURRENT ACTIVITIES</a>

			<div class="w3-dropdown-hover">
	      		<button class="w3-button w3-hide-small"> <i class="fa fa-briefcase w3-large"></i>
	      		 PUBLICATIONS</button>
	      		<div class="w3-dropdown-content w3-bar-block w3-card-2 w3-light-grey" style="width: 160px">
			        <a href="publica" class="w3-bar-item w3-button">Annual Report</a>
			        <a href="publica" class="w3-bar-item w3-button">Audit Report</a>
			        <a href="publica" class="w3-bar-item w3-button">Case Studies</a>
	      		</div>
	    	</div>
			<a href="gallery" class="w3-bar-item w3-button w3-hide-small" ><i class="fa fa-image w3-large"></i> GALLERY</a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small" ><i class="fa fa-group w3-large"></i> CAREER</a>	
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
		</div>

		<div id="demo" class="w3-bar-block w3-light-grey w3-hide w3-hide-large w3-hide-medium">
		 <div class="w3-dropdown-hover">
	      		<button class="w3-button">ABOUT AUNGKUR</button>
	      		<div class="w3-dropdown-content w3-bar-block w3-card-2">
			        <a href="mission" class="w3-bar-item w3-button">Mission & vission</a>
			        <a href="goal" class="w3-bar-item w3-button">Goal & Objectives</a>
			        <a href="legal" class="w3-bar-item w3-button">Legal Status</a>
			        <a href="ec" class="w3-bar-item w3-button">EC Members</a>
			        <a href="staffs" class="w3-bar-item w3-button">Staffs</a>
	      		</div>
	    	</div>
	    	<div class="w3-dropdown-hover">
	      		<button class="w3-button">AUNGKUR'S PROGRAM</button>
	      		<div class="w3-dropdown-content w3-bar-block w3-card-2  w3-light-grey">
			        <a href="micro_credit" class="w3-bar-item w3-button">Micro Credit</a>
			        <a href="water_sanitaion" class="w3-bar-item w3-button">Water & Sanitation</a>
			        <a href="health_nutririon" class="w3-bar-item w3-button">Health & Nutrition</a>
			        <a href="education" class="w3-bar-item w3-button">Education</a>
			        <a href="climate" class="w3-bar-item w3-button">Climate</a>
			        <a href="environment_development" class="w3-bar-item w3-button">Environment Development</a>
			        <a href="sustainable_agriculture" class="w3-bar-item w3-button">Sustainable Agriculter</a>
			        <a href="trainning_education" class="w3-bar-item w3-button">Training & Education Center</a>
			        <a href="view_relif" class="w3-bar-item w3-button">Relief & Rehabitation Program</a>
			        <a href="good_governance" class="w3-bar-item w3-button">Good Governance & Civil Awarness</a>
	      		</div>
	    	</div>
			<a href="current_activities" class="w3-bar-item w3-button" >CURRENT ACTIVITIES</a>
			<div class="w3-dropdown-hover">
	      		<button class="w3-button">PUBLICATIONS</button>
	      		<div class="w3-dropdown-content w3-bar-block w3-card-2  w3-light-grey">
			        <a href="publications" class="w3-bar-item w3-button">Annual Report</a>
			        <a href="publications" class="w3-bar-item w3-button">Audit Report</a>
			        <a href="publications" class="w3-bar-item w3-button">Case Studies</a>
	      		</div>
	    	</div>
			<a href="#" class="w3-bar-item w3-button" >GALLERY</a>
			<a href="#" class="w3-bar-item w3-button" >CAREER</a>	
		</div>
	</div>
	<!-- menu bar ends -->
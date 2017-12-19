	<!-- main body container -->
	<div>
		
		<div class="w3-row w3-padding w3-light-grey">
			<br>
			<!-- left col -->
			<div class="w3-col l3 w3-center w3-padding">
				<!-- notice board -->
				<div class="w3-row w3-card-2">
					<header class="w3-light-green header w3-padding-5" ><h4><i class="fa fa-list-ul"></i> NOTICE BOARD </h4></header>
					<div class="w3-text-left">
						<ul class="w3-ul ">
							<?php foreach ($allnotices as $not) {?>							
						 	   <li><a href="notice/<?php echo $not['id']?>" class="nounderline"><i class="fa fa-angle-double-right "></i> <?php echo $not['name']?></a> <img src="<?php echo base_url()?>/img/new.gif"> </li>						 			  
						 	<?php }?>
						</ul>
					</div>
					<footer class="w3-light-green w3-padding"><a href="#"> View All Notices</a></footer>
				</div>
				<!-- notice borad ends -->

				<hr>

				<!-- citizen charter -->
				<div class="w3-row w3-card-2">
					<header class="w3-light-green header w3-padding-5" ><h4><i class="fa fa-id-card-o"></i> CITIZEN CHARTER</h4></header>
					<div class="w3-text-left">
						<ul class="w3-ul">
						    <li><a href="javascript:void(0)" class="nounderline"><i class="fa fa-download"></i> Citizen Charter</a></li>
						</ul>
					</div>					
				</div>
				<!-- citizen charter ends-->


				<hr>

				<!-- useful links -->
				<div class="w3-row w3-card-2">
					<header class="w3-light-green header w3-padding-5" ><h4><i class="fa fa-anchor"></i> Report Submission Tools</h4></header>
					<div class="w3-text-left">
						<ul class="w3-ul">
						    <li><a href="#" class="nounderline"><i class="fa fa-hand-o-right "></i> Link 1 name</a></li>
						    <li><a href="#" class="nounderline"><i class="fa fa-hand-o-right "></i> Link 2 name</a></li>   			 
						</ul>
					</div>		
					<footer class="w3-light-green w3-padding"><a href="#"> View All Links</a></footer>			
				</div>
				<!-- useful links ends-->

				<hr>

				<!-- publications -->
				<div class="w3-row w3-card-2">
					<header class="w3-light-green header w3-padding-5" ><h4><i class="fa fa-anchor"></i> Publications </h4></header>
					<div class="w3-text-left">
						<ul class="w3-ul">						    
						    <li><a href="<?php echo base_url()?>/publication/annualreport/2016.pdf" class="nounderline"><i class="fa fa-file-pdf-o" download></i> Annual Report 2016</a></li>
						    <li><a href="<?php echo base_url()?>/publication/annualreport/2017.pdf"" class="nounderline"><i class="fa fa-file-pdf-o" download></i> Annual Report 2017</a></li>				
						</ul>
					</div>		
					<footer class="w3-light-green w3-padding"><a href="#"> View All Links</a></footer>			
				</div>
				<!-- publications ends-->

				<hr>

				<!-- visitors -->
				<div class="w3-row w3-card-2">
					<header class="w3-light-green header w3-padding-5" ><h4><i class="fa fa-eye"></i> CURRENT VISITORS</h4></header>
					<div class="w3-text-left">
						<ul class="w3-ul">
						    <li><a href="#" class="nounderline"><i class="fa fa-user-circle"></i> Visitors online: 4567</a></li>
						    <li><a href="#" class="nounderline"><i class="fa fa-group"></i> Total Visitors Today: 345837</a></li>
						</ul>
					</div>					
				</div>
				<!-- visitors ends-->

			</div>
			<!-- left col ends-->

			<!-- middle col -->
			<div class="w3-col l6 w3-padding w3-center">

				<div class="w3-row ">
					<header class="w3-light-green header w3-padding-5" ><h4><i class="fa fa-pencil-square-o"></i> HISTORY </h4></header>
					<div class="w3-text-left">
							<p style="text-align: justify; opacity: 0.7" class="w3-padding"> 						
								<span class="w3-xlarge "><b>Aungkur</b></span> Palli Unnayan Kendra, a centre for Rural Development, is a Bangladeshi, local, non-political, women focused non-profit organization. It was established in 1989. It has been operating her development activities since 1991 under Madaripur District in Bangladesh and dedicated to the socio-economic development of the poor specially the oppressed & exploited women group in Bangladesh. It aims to mobilize the poor to form grassroots level organizations that could become involved in the development process and eventually challenge the unequal rural social order. APUK believes that the personal and institutional capacity building can explore and invent human potentialities to mobilize and manage resources for improving their quality of life so that they can establish sustainable and justifiable society.
								<br>
								<br>
								The organization is committed to improve the quality of lives of disadvantaged people through providing need based development services to the disadvantaged community people in education, human development,  health and hygiene (WatSan), micro-finance, agriculture, legal and human rights and gender equity adaptation to climatic change etc. The ultimate aim of the organizations is to mobilize the poor to form grass-root level organizations that could become involved in the development process and eventually challenge the unequal rural social order. 
							</p>
					</div>					
				</div>
			
				<!-- slide show -->
				<div class="w3-row">
					<div id="wowslider-container2" class="w3-padding">
						<div class="ws_images">
							<ul>
								<li><img src="data2/images/1.jpg" alt="e2c22687ad888f747a3bdcd083f352db" title="Caption will appear here" id="wows2_0"/></li>
								<li><img src="data2/images/2.jpg" alt="gecko-2299365_960_720" title="Caption will appear here" id="wows2_1"/></li>
								<li><img src="data2/images/3.jpg" alt="moubbmra (1)" title="Caption will appear here" id="wows2_2"/></li>
								<li><img src="data2/images/10.jpg" alt="jquery slider" title="Caption will appear here" id="wows2_3"/></li>
								<li><img src="data2/images/9.jpg" alt="rally251117" title="Caption will appear here" id="wows2_4"/></li>
								<li><img src="data2/images/11.jpg" alt="rally251117" title="Caption will appear here" id="wows2_5"/></li>
							</ul>
						</div>
						<!-- <div class="ws_bullets">
							<div>
								<a href="#" title="e2c22687ad888f747a3bdcd083f352db"><span><img src="data2/tooltips/e2c22687ad888f747a3bdcd083f352db.jpg" alt="e2c22687ad888f747a3bdcd083f352db"/>1</span></a>
								<a href="#" title="gecko-2299365_960_720"><span><img src="data2/tooltips/gecko2299365_960_720.jpg" alt="gecko-2299365_960_720"/>2</span></a>
								<a href="#" title="moubbmra (1)"><span><img src="data2/tooltips/moubbmra_1.jpg" alt="moubbmra (1)"/>3</span></a>
								<a href="#" title="pexels-photo-248797"><span><img src="data2/tooltips/pexelsphoto248797.jpg" alt="pexels-photo-248797"/>4</span></a>
								<a href="#" title="rally251117"><span><img src="data2/tooltips/rally251117.jpg" alt="rally251117"/>5</span></a>
							</div>
						</div> -->
						<div class="ws_shadow"></div>
					</div>	
					<script type="text/javascript" src="engine2/wowslider.js"></script>
					<script type="text/javascript" src="engine2/script.js"></script>
				</div>
				<!-- slide show ends -->		

				<br>
				<br>
				<br>
			
				<!-- contact us -->
				<div class="w3-row w3-border w3-center">
					<header class="w3-light-green header w3-padding-5" ><h4 onclick="showHideContact()"><i class="fa fa-pencil-square-o"></i> WE APPRECIATE YOUR FEEDBACK </h4></header>
					<div class="w3-center w3-padding" style="width: 500px; margin: 0px auto" id='contactform'>
						<form class="w3-padding-16">
							<div class="w3-col l2" style="margin-top: 5px">
								<label>I have a</label>
							</div>						
							<div class="w3-col l10">
								<select class="w3-select w3-border">
									<option>Suggestion</option>
									<option>Question</option>
									<option>Complaint</option>
								</select>	
							</div>

							<br>
							<br>

							<div class="w3-col l2" style="margin-top: 5px">
								<label>Subject</label>
							</div>							
							<div class="w3-col l10">
								<input type="text" name="subject" class="w3-input w3-border" placeholder="Enter Subject ...">
							</div>

							<br>
							<br>

							<div class="w3-col l2" style="margin-top: 5px">
								<label>Message</label>
							</div>							
							<div class="w3-col l10 w3-text-left">
								<textarea rows="4" cols="45" placeholder="Type your Message here ..."></textarea>
							</div>

							<br>
							<br>

							<div class="w3-col l2" style="margin-top: 5px">
								<label>Email</label>
							</div>							
							<div class="w3-col l10">
								<input type="email" name="email" class="w3-input w3-border" placeholder="Enter your email ...">
							</div>
							
							<br>
							<br>

							<div class="w3-col l2 w3-margin-top" style="margin-top: 5px">
								<label>Phone</label>
							</div>							
							<div class="w3-col l10 w3-margin-top">
								<input type="number" name="number" class="w3-input w3-border" placeholder="Enter your contact ...">
							</div>
								

							<button class="w3-button w3-light-green w3-margin-top"><i class="fa fa-send"></i> SEND</button>

						</form>
					</div>					
				</div>
				<!-- contact us ends-->

			</div>
			<!-- middle col ends-->

			<!-- right col -->
			<div class="w3-col l3 w3-padding w3-center">
				<div class="w3-row w3-card-2">
					<header class="w3-light-green w3-padding header"><h4><i class="fa fa-comments w3-xlarge"></i> MESSAGE FROM EXECUTIVE DIRECTOR</h4></header>
					<div class="w3-padding">
						<img src="<?php echo base_url()?>/img/ed.jpg" class="w3-circle" style='max-width: 150px'>
						<p>Md. Ayub Ali Talukder</p>
						 <div class="w3-panel w3-white w3-justify">
						    <p class="w3-small w3-serif">
						    <i class="fa fa-quote-right w3-large"></i>
							 	<i>
								    Aungkur Palli Unnayan Kendra is functional and has completed a 26 years mark. Although Aungkur Palli Unnayan Kendra began its journey in 1989,  	
								</i> <a href="executive_director" class="w3-text-blue w3-tiny nounderline">Full speech</a></p>
						  </div>
					</div>
				</div>
				<hr>
				<div class="w3-row w3-card-2">
					<header class="w3-light-green w3-padding header"><h4><i class="fa fa-address-book w3-xlarge"></i> BIOGRAPHY OF EXECUTIVE DIRECTOR</h4></header>
					<div class="w3-padding">
						<img src="<?php echo base_url()?>/img/ed.jpg" class="w3-circle" style='max-width: 150px'>
						<p>Md. Ayub Ali Talukder</p>
						 <div class="w3-panel w3-white w3-justify">
						    <p class="w3-serif">						   
							   	Md. Ayub Ali Talukder was born in 1956 in the village Sreenathdi under Kendua union of Sadar Upazila of Madaripur District of Bangladesh. His father late Hazi Babaon Talukder was a famous  jute trader and socially respected person in the locality. He graduated in 1976 from Nazimuddin College, Madaripur under Dhaka University. During his student life in Nazimuddin College he was involved in development activities 
 								<a href="ed_biography" class="w3-text-blue w3-tiny nounderline">Full Biography</a>
							</p>
						  </div>
					</div>
				</div>
			</div>
			<!-- right col ends-->
		</div>

	</div>
	<!-- main body container ends-->

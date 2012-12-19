<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

    <div id="wrapper">

	    <div id="headerWrapperMember">
	        <div id="headerMember">
	            <h1>eCommunity </h1>
	            Member Page                
	            
	            <div class="searchWrapper">
	                <input type="text" name="txtsearch" value="" class="searchbox" />
	            </div>
	            <div class="clearfix"></div>
	        </div><!-- #header-->
	        
	    </div>
	    
	    <div class="locationStrip">
	    	Philippines > Region VII > Cebu > Cebu City > Labangon
	    </div>
	    
	    
		<div id="containerRegion">
	
	            <div id="leftRegion">
	            	<h3>Welcome MikeG!</h3>
	            	<br/>
	            	<fieldset>
	            		<legend>Menu</legend>
		            	<div id="menu">
			            	<div>Community Tax Certificate</div>
			            	<div>Barangay Clearance</div>
			            	<div>Barangay Permit</div>
			            	<div>Events and Activities</div>
			            	<div>Livelihood Projects</div>
		            	</div>
	            	</fieldset>
	            	
	            	<fieldset id="requests">
	            		<legend>Requests</legend>
	            		<div>CTC (1)</div>
	            		<div>Clearance (1)</div>
	            		
	            	</fieldset>
	            	
	            	<fieldset id="favorites">
	            		<legend>Favorites</legend>
	            		<div>Family</div>
	            		<div>Friends</div>
	            		<div>Messages</div>
	            		<div>Update Profile</div>
	            	</fieldset>	 
	           	</div>
	            
	            
	            <div id="middleRegionExtended">
	                	<?php echo $this->Session->flash(); ?>
						<?php echo $this->fetch('content'); ?>
	            </div>
	            
	            <!--
	            <div id="rightRegion">           	
	            	<fieldset id="marketplace">
	            		<legend>Market Place</legend>
	            		<div class="content">
							<div class="contentTitle">Title</div>
							<div class="contentDetail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry..</div>
							<div class="more">More...</div>
						</div>
						<div class="content">
							<div class="contentTitle">Title</div>
							<div class="contentDetail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry..</div>
							<div class="more">More...</div>
						</div>
						<div class="content">
							<div class="contentTitle">Title</div>
							<div class="contentDetail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry..</div>
							<div class="more">More...</div>
						</div>
						
	            	</fieldset>
	            </div>
			    -->		    
		</div>
		
		<div class="clearfix"></div>
    </div>
    
    <div id="footerWrapper">
	    <div id="footer">eCommunity is a online repository of barangay records in the Philippines. Copyright 2012. <br/>All right reserved.</div>
    </div>
    
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>

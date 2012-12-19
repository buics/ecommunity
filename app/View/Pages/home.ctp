<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>eCommunity</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen, projection" />
</head>


<body>

<div id="wrapper">

    <div id="headerWrapper">
        <div id="header">
            <h1>eCommunity </h1>
            Philippines                
            <form method="post" action="Members">
            <div id="signin">
                <span class="label">Sign in as a Member!</span>
                <div class="form">
                Email : <input type="text" name="txtusername" >
                Password : <input type="password" name="txtpassword" >
                <input type="submit" name="txtsubmit" value="Submit">
                </div>
            </div>
            </form>
            <div class="clearfix"></div>
	</div><!-- #header-->
        
    </div>
	
        
        
        
        
    <div id="middleContainer">
		<div id="middle">
	
			<div id="container">
				<div id="contentLogin">                            
					
	                            <div id="FindCommunityContainer">
	                                <div class="label">Find your community : </div>
	                                <div><input type="text" name="SearchInput" id="SearchInput" /><input type="submit" name="Go" value="Go" id="GoSearch" /></div>
	                                <div><input type="submit" name="RegisterCommunity" value="Register your Community" id="RegisterCommunity"/></div>
	                                <div><input type="submit" name="ManageCommunity" value="Manage your Community" id="RegisterCommunity" onclick="window.location = 'Members'"/></div>
	                            </div>
	                            
				</div><!-- #content-->
			</div><!-- #container-->
	
			<div class="sidebar" id="sideRightLogin">			                        
	            <div style="padding: 10px 10px 10px 10px;" >
	                <h2>Sign up it’s free for all tax payers!</h2>                             
	                <fieldset>
	                    <!-- <legend>Sign up now!</legend>  -->
		                <div class="form">
<?php
echo $this->Form->create(null, array(’url’ => ’/Registrations/add’));
?>
		                    <div class="label">Email Address : </div> <div>
<?php
echo $this->Form->input(’email’);
?> </div>
		                    <div class="label">Firstname : </div> <div class="control">
<?php
echo $this->Form->input(’fname’);
?></div>
		                    <div class="label">Lastname : </div>  <div>
<?php
echo $this->Form->input(’lname’);
?>
</div>
		                    
		                    <div class="label">Re-enter email : </div> <div>
<?php
echo $this->Form->input(’reemail’);
?>
</div>
		                    <div class="label">Password : </div> <div>
<?php
echo $this->Form->input(’password’);
?>
</div>
		                    
		                    <div style="padding: 5px 0 5px 0;">
		                    <div class="option">
<?php
$options = array(’M’ => ’Male’, ’F’ => ’Female’); 
$attributes = array(’legend’ => false);
echo $this->Form->radio(’gender’, $options, $attributes);
?>
		                    </div>
		                    
<?php
echo $this->Form->end(’Sign Up’);
?>
		                </div>
	                </fieldset>
	            </div>                        
			</div><!-- .sidebar#sideRight -->
			
		</div><!-- #middle-->
				
    </div>
    
    <div class="clearfix"></div>
</div><!-- #wrapper -->


<div id="footerWrapper">
    <div id="footer">            
            eCommunity is a online repository of barangay records in the Philippines. Copyright 2012. <br>All right reserved.
    </div><!-- #footer -->
</div>
</body>
</html>
    

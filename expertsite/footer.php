<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
		function validateForm1(){
			var reason = "";
			reason += validateEmail1(theForm1.mail1);
			//reason += validateEmpty1(theForm1.name1);
			reason += validateMsg1(theForm1.comment1);
					   
			if (reason != "") {	return false;}
			return true;
			}
			
			function validateEmpty1(fld) {
				var error = "";
				if (fld.value.length == 0) {  
					$('#err-name1').show(500);
					$('#err-name1').delay(4000);
					$('#err-name1').animate({
                	height: 'toggle'
            		}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-name1').hide(500);   }
				return error;  
			}
			
			function validateMsg1(fld) {
				var error = "";
				if (fld.value.length == 0) {  
					$('#err-msg1').show(500);
					$('#err-msg1').delay(4000);
					$('#err-msg1').animate({
                	height: 'toggle'
            		}, 500, function () {  // Animation complete.
            		});	error = "The required field has not been filled in.\n"
            		  } 
				else { $('#err-msg1').hide(500);   }
				return error;  
			}
			
			function validateEmail1(fld) {
				var error = "";
				var emailCompare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
				if (fld.value == '' || !emailCompare.test(fld.value)) { 
					$('#err-emai1l').show(500);
            		$('#err-email1').delay(4000);
            		$('#err-email1').animate({
                	height: 'toggle'
            		}, 500, function () {    // Animation complete.
            		});
				} else { $('#err-email1').hide(500);
				 }
				return error;  
			}
		</script>
</head>

<body>
<!-- footer section start -->
    <div class="clients">
        <div class="section primary-section2">
            <div class="triangle"></div>
            <div class="container">
                <div class="row">
					<div class="span3">
						<div class="ptitle"><h4>About Expertcage</h4></div>
                          <p>
                            Expertcage is a platform for professional services that involve providing specialist business support to all businesses of all size and in all sectors world wide.
                            </p>
                            <h4>Expert Requirements</h4>
                            <ul>
							<li>A minimum of a bachelor's degree</li>
							<li>A Computer or Smart phone</li>
                            <li>Access to internet</li>
                            <li>English language proficiency</li>
                            </ul> 
                    </div>
                    <div class="span3">
						<div class="ptitle"><h4>Important links</h4></div>
                        <ul class="footer-nav">
							<li><a href="get-started">Get Started</a></li>
						    <li><a href="how-it-works">How It Works</a></li>
							<li><a href="why-expertcage">Why Expertcage</a></li>
						    <li><a href="payments">Payments</a></li>
						    <li><a href="areas">Areas of Expertise</a></li>
							<li><a href="projects">Recent Projects</a></li>
						    <li><a href="benefits">Our Benefits</a></li>
						    <li><a href="faq">FAQs</a></li>
						</ul>
                    </div>
					 <div class="span3">
						<div class="ptitle"><h4>Get in Touch</h4></div>
						<p>Feel free to contact us in case of any inquiry or support for professional services.
							<ul class="fmail">
                    			<li>info@expertcage.com</li>
								<li>support@expertcage.com</li>
							</ul>
						</p>
						<ul class="social">
                            <li><a href=""><span class="icon-facebook-circled"></span></a></li>
                            <li><a href="http://goo.gl/" target="blank"><span class="icon-twitter-circled"></span></a></li>
                            <li><a href=""><span class="icon-linkedin-circled"></span></a></li>
                            <li><a href=""><span class="icon-gplus-circled"></span></a></li>
                        </ul>
                    </div>
					<div class="span3">
						<div class="ptitle"><h4>Contact form</h4></div>
                        <div class="footer1">
						<?php
							if(array_key_exists('send', $_POST)){
							$name=$_POST['name1']; $email=$_POST['mail1']; $com=$_POST['comment1']; $message=""; $mail='ltusabe@gmail.com'; $mail2='jhabere@gmail.com';
								////send email to the user
										$subject = 'Message from expertcage ';
										$message .= "Hi support term \n\n";
										$message .= "$name $email\n\n";
										$message .= "Please work on the client's issues ASAP";
										$message .= "From Expertcage \n\n";
										// limit line length to 70 characters
										$message = wordwrap($message, 70);
										$mailSent = mail($mail, $subject, $message);
										$mailSent2 = mail($mail2, $subject, $message);
										if(!$mailSent){
											echo '<div id="successSend" class="alert alert-success"><strong>Well done!</strong>Your message has been sent.</div>';}
										else{
											echo '<div id="errorSend" class="alert alert-error ">There was an error.</div>';}
														
						}?>
						<div id="successSend" class="alert alert-success invisible"><strong>Well done! </strong>Your message has been sent.</div>
                        <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                        	<form action="" method="post" name="theForm1" id="theForm1" onSubmit="return validateForm1(this)">
                            	<div class="control-group">
                                	<div class="controls">
                                    	<input class="span12" type="text" id="name1" name="name1" placeholder="* Your name..." />
                                        <div class="error left-align" id="err-name1">Please enter name.</div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                	    <input class="span12" type="email" name="mail1" id="mail1" placeholder="* Your email..." />
                                        <div class="error left-align" id="err-email1">Please enter valid email adress.</div>
                                    </div>
                                </div>
                                <div class="control-group">
                                	<div class="controls">
                                    	<textarea class="span12" name="comment1" id="comment1" placeholder="* Comments..."></textarea>
                                        <div class="error left-align" id="err-msg1">Please enter your comment.</div>
                                    </div>
                                </div>
                                <div class="control-group">    
                                	<div class="controls">
									<button type="submit" class="message-btn" name="send">Send message</button>
                                   	</div>
                                </div>
                          	</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        <!-- Footer section start -->
        <div class="footer"><p>&copy; 2016 All Rights Reserved to Expertcage</p></div>
        <!-- Footer section end -->
</body>
</html>

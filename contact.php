

<!DOCTYPE html>


<html>
<head>
	<title>CONTACT</title>
</head>
<body>
	<?php

		include "header.php";

	?>
	<div class="jumbotron text-center">
				<h2><i class="fa fa fa-phone"></i>  CONTACTS</h2>
				<h3>You can send Us your contact so that we can call you back or</br>
				You can use the provided contact to call Us for more query </h3>
	</div>

	<div class="contact-page">

		<div class="row">
			<div class="col-sm-6">
			<div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="modal-header">
                        <h4 style="color:#288;line-height: 30px;text-align: center;font-size: 24px;">SEND US YOUR CONTACT</h4>
                    </div>
                    <div class="modal-body">
                    		
                    	
                      <div class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label">Username<span style="color: red;">*</span></label>
                            <div class="col-sm-10">
                            	
                                <input type="text" class="form-control" name="username" id="contact-email" placeholder="Enter username" autocomplete="off" required="required">
                                  
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label">Email<span style="color: red;">*</span></label>
                            <div class="col-sm-10">
                            	
                                <input type="email" class="form-control" name="email" id="contact-email" placeholder="example@gmail.com" autocomplete="off" required="required">
                                  
                                
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="contact-name" class="col-sm-2 control-label">Password<span style="color: red;">*</span></label>
                            <div class="col-sm-10">
                                <input type="Password" class="form-control" name="password" id="contact-name" placeholder="Enter password" required="required">
                            </div>
                        </div>-->
                     <div class="form-group">
                            <label for="contact-message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="message" required="required" rows="4" placeholder="Any other information"></textarea>
                            </div>
                        </div>
                        
                       <p style="color: #288"><marquee>The reply will be sent to your email</marquee></p> 
                    </div>
                   <div class="modal-footer">
                       
                        <button type="submit" name="login_user" class="btn btn-success">Send <i class="fa fa fa-send-o"></i> </button>

                    </div>
                  <p><blink>Red star means must fill!</blink></p>
                </form>
              </div>
            </div>
        </div>

			<div class="col-sm-6">
				<div class="table-cover">
					<h3 style="color:#288;line-height: 30px;text-align: center;font-size: 24px;">OUR CONTACTS</h3>
					<table class="table">
						<tbody>
							<tr>
								<th>Department</th>
								<th><i class="fa fa fa-phone"></i> Contacts</th>
							</tr>
							<tr>
								<td>Principal's Office</td>
								<td>Email : college@gmail.com,</br>
									P.O. BOX: 123-3323,</br>
									Tel : 0723329991,
								</td>	
							</tr>
							<tr>
								<td>Dean of Students</td>
								<td>Email : collegedean@gmail.com,</br>
									P.O. BOX: 123-3323,</br>
									Tel : 0723329991,
								</td>	
							</tr>
							<tr>
								<td>Staff Management</td>
								<td>Email : collegeschool@gmail.com,</br>
									P.O. BOX: 123-3323,</br>
									Tel : 0723329991,
								</td>	
							</tr>
							<tr>
								<td>Admision office</td>
								<td>Email : college@gmail.com,</br>
									P.O. BOX: 123-3323,</br>
									Tel : 0723329991,
								</td>	
							</tr>
						</tbody>
					</table>
				</div>
				</div>
			
		</div>
	</div>
	<?php

		include "footer.php";


	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
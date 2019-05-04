<!DOCTYPE html>
<html>
<head>
<style>
.jumbotron{
	text-align:center;
}
.jumbotron img{
	border-radius:30px;
}
</style>
	
</head>
<body>
<?php
	include "header.php";
?>
<div class="container">
	<div class="jumbotron">
	<img src="gallery/finallogo.jpg" align="center" width="100" height="100" >
	<h2>STUDENT PORTAL</h2><br>
	</div>
		
	<div class="modal-dialog" >
            <div class="modal-content">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="modal-header">
                        <h4 style="color:#288;line-height: 30px;text-align: center;font-size: 30px;">Login Here</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                            <label for="contact-name" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="contact-email" placeholder="Enter username" autocomplete="off">
                                  
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-name" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="Password" class="form-control" name="password" id="contact-name" placeholder="Enter password">
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <div class="modal-footer">
                       
                        <button type="submit" name="login_user" class="btn btn-primary"><i class="fa fa-unlock"></i> Login</button>
                    </div>
                </form>
              </div>
            </div>
			</div>

</div>

<?php

	include "footer.php";
?>
</body>
</html>
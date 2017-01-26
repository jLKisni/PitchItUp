<header>
        <div class="header-content">
            <div class="header-content-inner">
				<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
						<div class="panel panel-success">
							<div class="panel-heading">
									<h3 class="panel-title">Account Settings</h3>
							</div>
							<div class = "panel-body">

								<?php if(isset($error_msg)){echo $error_msg;}?>
								<?php if(isset($exist_msg)){echo $exist_msg;}?>
								<form role="form" Account_management/updateAccount" method="post">
									<div class = "row">
											<div id = "col-sm-6 pull-right">
											<div class="col-xs-8 col-sm-8 col-md-12">
												<div class = "form-group">
													<input type = "text" name = "firstname"  class = "form-control input-sm" value="<?php echo $userdetails->FirstName;?>" placeholder = "Firstname" required>
												</div>
											</div>
											<div class="col-xs-8 col-sm-8 col-md-12">
												<div class = "form-group">
										
													<input type = "text" name = "lastname" class = "form-control input-sm" value="<?php echo $userdetails->LastName;?>" placeholder="Lastname" required>
												</div>
											</div>
											<div class="col-xs-8 col-sm-8 col-md-12">
												<div class = "form-group">
													
													<input type = "text" name = "username" class = "form-control input-sm" value="<?php echo $userdetails->username;?>" placeholder = "Username" required>
												</div>
											</div>
											<div class="col-xs-8 col-sm-8 col-md-12">
												<div class = "form-group">
													
													<input type = "password" name = "password" class = "form-control input-sm" placeholder='Password' required>
												</div>
											</div>
											<div class="col-xs-8 col-sm-8 col-md-12">
												<div class = "form-group">
													
													<input type = "password" name = "repassword" class = "form-control input-sm" placeholder = "Re-enter Password" required>
												</div>
											</div>
											<div class="col-xs-8 col-sm-8 col-md-12">
													<button type='submit' class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Update Account &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
											</div>
											
											</div>
									</div>
								</form>
							</div>
								
						</div>
					</div>
            </div>
        </div>
    </header>
	
<header>
        <div class="header-content">
            <div class="header-content-inner">
            	<div class="col-xs-3"></div>
				<div class="col-xs-6">
						<div class="panel panel-success">
							<div class="panel-heading">
									<h3 class="panel-title">Account Settings</h3>
							</div>
							<div class = "panel-body">

								<?php if(isset($error_msg)){echo $error_msg;}?>
								<?php if(isset($exist_msg)){echo $exist_msg;}?>
								<form role="form" action="<?php echo base_url();?>Web/Account_management/updateAccount" method="post">
									<div class = "row">
											<div id = "col-sm-12 pull-right">
											
												<div class="form-group">
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1" style="color:#333">Team Name</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="teamname" placeholder='Ex. Teambangan' value="<?php echo $userdetails->team_name;?>">
                                                </div>
                                                
                                              </div>
                                              <br><br>
                                              <br>
                                              <div class="form-group">
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1" style="color:#333">Firstname</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type = "text" name = "firstname"  class = "form-control input-sm" value="<?php echo $userdetails->FirstName;?>" placeholder = "Firstname" required>

                                                </div>
                                                
                                              </div>
                                              <br><br>
                                              <div class="form-group">
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1" style="color:#333">Lastname</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type = "text" name = "lastname" class = "form-control input-sm" value="<?php echo $userdetails->LastName;?>" placeholder="Lastname" required>
                                                </div>
                                                
                                              </div>
                                              <br><br>
                                              <div class="form-group">
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1" style="color:#333">Username</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type = "text" name = "username" class = "form-control input-sm" value="<?php echo $userdetails->username;?>" placeholder = "Username" required>
                                                </div>
                                                
                                              </div>
                                              <br><br>
                                              <div class="form-group">
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1" style="color:#333">Password</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                	<input type = "password" name = "password" class = "form-control input-sm" placeholder="Password" required>
                                                </div>
                                                
                                              </div>
                                              <br><br>
                                              <div class="form-group">
                                                <div class="col-md-3" >
                                                    <label for="exampleInputEmail1" style="color:#333">Re-type Password</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type = "password" name = "repassword" class = "form-control input-sm" placeholder = "Re-enter Password" required>
                                                </div>
                                                
                                              </div>
                                              <br><br>
                                              <div class="form-group" hidden>
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Team Size</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" id="teamsize" value="3">
                                                </div>
                                                
                                              </div>
											
											<div class="col-xs-8 col-sm-8 col-md-12">
													<button type='submit' class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Update Account &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
											</div>
											
											
									</div>
								</form>
							</div>
								
						</div>
					</div>
            </div>
        </div>
    </header>
	
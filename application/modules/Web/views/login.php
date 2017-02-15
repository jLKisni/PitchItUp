 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
			    		<h3 class="panel-title">Log in</h3>
			 	</div>
				<div class = "panel-body">

					<?php if(isset($error_msg)){ echo $error_msg; }?>
					<form role="form" action="<?php echo base_url();?>Auth/login" method="post">
						<div class = "row">
								<div id = "col-sm-6 pull-right">
								
								<div class="col-xs-8 col-sm-8 col-md-12">
									<div class = "form-group">
										
										<input type = "text" name = "username" class = "form-control input-sm" placeholder = "Username" required>
									</div>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-12">
									<div class = "form-group">
										
										<input type = "password" name = "password" class = "form-control input-sm" placeholder = "Password" required>
									</div>
								</div>
								
								<div class="col-xs-8 col-sm-8 col-md-12">
										
										<button type='submit' class="btn btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
								</div>
								
								<div class="col-xs-8 col-sm-8 col-md-12">
									<br>                                                                                            
										<a href = "<?php echo base_url();?>">Back to main page</a>
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
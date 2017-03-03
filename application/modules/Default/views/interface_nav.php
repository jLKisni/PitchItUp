<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url();?>">PitchITup</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
	
					
					<li class = "dropdown">
						<a href="thumbnail.html" class="dropdown-toggle" data-toggle="dropdown" data-toggle="tooltip" data-placement="bottom" title = "menu"><span class="glyphicon glyphicon-th" style = "font-size: 1.2em;"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url();?>Web/myPresentation">My Presentation <!-- <span class="glyphicon glyphicon-duplicate pull-right"> --></span></a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo base_url();?>Web/history">My History <!-- <span class="glyphicon glyphicon-time pull-right"> --></span></a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo base_url();?>Web/documents">My Documents <!-- <span class="glyphicon glyphicon-folder-open pull-right"> --></span></a>
								</li>
							</ul>
					
					</li>
					<li class = "dropdown">
						<a href="thumbnail.html" class="dropdown-toggle" data-toggle="dropdown" data-toggle="tooltip" data-placement="bottom" title = "user"><span class="glyphicon glyphicon-user " style = "font-size: 1.2em;"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo base_url();?>Web/AccountSettings">Account Settings<span class="glyphicon glyphicon-cog pull-right"></span></a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo base_url();?>Auth/logout">Logout<span class="glyphicon glyphicon-off pull-right"></span></a>
							</li>
						</ul>
					
					</li>
                </ul>
				<form class="navbar-form navbar-left">
					
				</form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

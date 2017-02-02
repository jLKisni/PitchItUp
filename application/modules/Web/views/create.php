
	<header>
        <div class="header-content">
            <div class="header-content-inner">
		<form>
			<input type="hidden" id="ideagen_id" value="<?php if(isset($ideagen)){ echo $ideagen->idea_id;}else{echo 0;}?>"/>
			<div class = "row">
				<h2><b> Idea Generation </b></h2>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
					  <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "this is where you put the problem of your idea">Problem</label>
					  <textarea class="form-control" rows="9" id="problem" style = "resize: none;"><?php if(isset($ideagen)){echo $ideagen->problem;}?></textarea>
					</div>
					
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
					  <label for="People" data-toggle="tooltip" data-placement="bottom" title = "this is your customer or the target of your idea">People</label>
					  <textarea class="form-control" rows="9" id="people" style = "resize: none;"><?php if(isset($ideagen)){echo $ideagen->people;}else{}?></textarea>
					</div>
					
				</div>
			
			
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
					  <label for="Behavior" data-toggle="tooltip" data-placement="bottom" title = "this is how people behave in experiencing the problem">Behavior</label>
					  <textarea class="form-control" rows="9" id="behavior" style = "resize: none;"><?php if(isset($ideagen)){echo $ideagen->behavior;}?></textarea>
					</div>
					
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
					  <label for="Solution" data-toggle="tooltip" data-placement="bottom" title = "this is where you state your idea which solves the customer's problem ">Solution</label>
					  <textarea class="form-control" rows="9" id="solution" style = "resize: none;"><?php if(isset($ideagen)){echo $ideagen->solution;}?></textarea>
					</div>
					
				</div>
			
			</div>
			
			
			
		</form>
		
		<ul class = "pager">
				<li class = "next"><a href = "#" id="ideagen">Next</a></li>
		</ul>
		
	</div>
		</div>
			</header>
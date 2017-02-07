<header>
     <div class="header-content">
            <div class="header-content-inner">
			
		<form>
			<input type="hidden" id="bmc_id" value="<?php if(isset($bmc)){ echo $bmc->bmc_id;}else{echo 0;}?>"/>
			<div class = "row center">
				<h2><b>Business Model Canvas</b></h2></br></br>
			
				<div class="col-md-3 col-md-offset-2">
					<div class="form-group">
					  <label for="Key Partners">Key Partners</label>
					  <textarea class="form-control" rows="4" id="partners" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->key_partners;}?></textarea>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
					  <label for="Key Activities">Key Activities</label>
					  <textarea class="form-control" rows="4" id="activities" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->key_activities;}?></textarea>
					</div>
				</div>
				
				
				<div class="col-md-3">
					<div class="form-group">
					  <label for="Value Proposition">Value Proposition</label>
					  <textarea class="form-control" rows="4" id="proposition" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->value_proposition;}?></textarea>
					</div>
				</div>
				
				<div class="col-md-3 col-md-offset-2">
					<div class="form-group">
					  <label for="Customer-Relationship">Customer-Relationship</label>
					  <textarea class="form-control" rows="4" id="relationship" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->cust_relationship;}?></textarea>
					</div>
				</div>
			
				<div class="col-md-3">
					<div class="form-group">
					  <label for="Customer-Segment">Customer-Segment</label>
					  <textarea class="form-control" rows="4" id="segment" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->cust_segment;}?></textarea>
					</div>
				</div>

			 <!--<div class="col-md-2 col-md-offset-1">
				</div>-->
					<div class="col-md-3">
						<div class="form-group">
						  <label for="Key Resources">Key Resources</label>
						  <textarea class="form-control" rows="4" id="resources" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->key_sources;}?></textarea>
						</div>
					</div>
					
					<div class="col-md-3 col-md-offset-2">
						<div class="form-group">
						  <label for="Channels">Channels</label>
						  <textarea class="form-control" rows="4" id="channels" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->channels;}?></textarea>
						</div>
					</div>

						<div class="col-md-3">
							<div class = "form-group">
								<label for ="Cost Structure">Cost Structures</label>
								<textarea class = "form-control" rows= "4" id = "structure" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->cost_structures;}?></textarea>
							</div>
						</div>
						<div class = "col-md-3">
							<div class = "form-group">
								<label for ="Cost Structure">Revenue Streams</label>
								<textarea class = "form-control" rows= "4" id = "streams" style = "resize: none;"><?php if(isset($bmc)){echo $bmc->key_partners;}?></textarea>
							</div>
						</div>
				</div>
				<ul class = "pager">
				<li class = "previous"><a href = "<?php echo base_url();?>Web/create">Previous</li></a>
				<li class = "next"><a href = "#" id="validationboard">Next</li></a>
			</ul>
		</div>
	</div>

		</form>
		
		
	</div>
			</header>
	
<header>
     <div class="header-content">
          <div class="header-content-inner">
          	<form>
			<input type="hidden" id="bmc_id" value="<?php if(isset($bmc)){ echo $bmc->bmc_id;}else{echo 0;}?>"/>
			
           <div class="col-sm-4 text-center">
                   
                        <img src = "<?php echo base_url();?>assets/img/BMC.png" style = "width: 1000px; height: 550px;">


					<div class="col-md-2" style="position:absolute; left: 797px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Customer Segments" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Customer Segments</font></label>
					  <textarea class="form-control" rows="13" id="segment" style = "resize: none;"  ></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 602px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Customer Relationship" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Customer Relationship</font></label>
					  <textarea class="form-control" rows="5" id="relationship" style = "resize: none;"  ></textarea>
					</div>
				</div>

			    <div class="col-md-2" style="position:absolute; left: 410px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Value Proposition" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Value Proposition</font></label>
					  <textarea class="form-control" rows="13" id="proposition" style = "resize: none;"  ></textarea>
					</div>
				</div>

				 <div class="col-md-2" style="position:absolute; left: 217px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Key Activities" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Activities</font></label>
					  <textarea class="form-control" rows="5" id="activities" style = "resize: none;"  ></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 25px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Key Partners" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Partners</font></label>
					  <textarea class="form-control" rows="13" id="partners" style = "resize: none;"  ></textarea>
					</div>
				</div>

			  <div class="col-md-2" style="position:absolute; left: 217px;
   top: 231px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Key Resources" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Resources</font></label>
					  <textarea class="form-control" rows="5" id="resources" style = "resize: none;"  ></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 602px;
   top: 231px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Channels" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Channels</font></label>
					  <textarea class="form-control" rows="5" id="channels" style = "resize: none;"  ></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 510px;
   top: 390px; width: 490px; height: 100px;" >
					<div class="form-group">
					  <label for="Revenue Streams" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Revenue Streams</font></label>
					  <textarea class="form-control" rows="4" id="streams" style = "resize: none;"  ></textarea>
					</div>
				</div>
			
				<div class="col-md-2" style="position:absolute; left: 25px;
   top: 390px; width: 490px; height: 100px;" >
					<div class="form-group">
					  <label for="Cost Structure" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Cost Structure</font></label>
					  <textarea class="form-control" rows="4" id="structure" style = "resize: none;"  ></textarea>
					</div>
				</div>


				<div class="col-md-2" style="position:absolute; left: 355px;
   top: 14px; width: 250px;" >
					<div class="form-group">
					<!--   <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Partners</font></label> -->
					  <textarea class="form-control" rows="1" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>

			<div class="col-md-2" style="position:absolute; left: 615px;
   top: 14px; width: 200px;" >
					<div class="form-group">
					<!--   <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Partners</font></label> -->
					  <textarea class="form-control" rows="1" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>

			<div class="col-md-2" style="position:absolute; left: 810px;
   top: 14px; width: 200px;" >
					<div class="form-group">
					<!--   <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Partners</font></label> -->
					  <textarea class="form-control" rows="1" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>
<div style="position:absolute; left: 1000px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; "><a href = "#" id="validationboard">Next</button>
			</div>

			<div style="position:absolute; right: 330px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; "><a href = "<?php echo base_url();?>Web/create">Previous</button>
			</div>
	</div>

</form>
</div>
</div>
</div>

			</header> 
	
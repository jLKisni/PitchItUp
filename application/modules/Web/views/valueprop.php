<header>
        <div class="header-content">
            <div class="header-content-inner">
            <input type="hidden" id="valueprop_id" value="<?php if(isset($valueprop)){ echo $valueprop->valueprop_id;}else{echo 0;}?>"/>
				
            <div class="col-sm-4 text-center">
                   
                        <img src = "<?php echo base_url();?>assets/img/Valueprop.png" style = "width: 1000px; height: 550px;">

                        <div class="col-md-2" style="position:absolute; left: 820px;
   top: 180px; width: 170px; height: 100px;" >
					<div class="form-group">
					   <label for="fears" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Fears</font></label>
					  <textarea class="form-control" rows="4" id="fears" style = "resize: none;"  ><?php if(isset($valueprop)){echo $valueprop->fears;}?></textarea>
					</div>
				</div>

				   <div class="col-md-2" style="position:absolute; left: 650px;
   top: 100px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="Wants" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Wants</font></label>
					  <textarea class="form-control" rows="4" id="wants" style = "resize: none;"  ><?php if(isset($valueprop)){echo $valueprop->wants;}?></textarea>
					</div>
				</div>

			 <div class="col-md-2" style="position:absolute; left: 605px;
   top: 264px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="Needs" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Needs</font></label>
					  <textarea class="form-control" rows="4" id="needs" style = "resize: none;"  ><?php if(isset($valueprop)){echo $valueprop->needs;}?></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 300px;
   top: 105px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="Experience" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Experience</font></label>
					  <textarea class="form-control" rows="13" id="experience" style = "resize: none;"  ><?php if(isset($valueprop)){echo $valueprop->experience;}?></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 47px;
   top: 105px; width: 210px; height: 100px;" >
					<div class="form-group">
					  <label for="Benefits" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Benefits</font></label>
					  <textarea class="form-control" rows="4" id="benefits" style = "resize: none;"  ><?php if(isset($valueprop)){echo $valueprop->benefits;}?></textarea>
					</div>
				</div>

			<div class="col-md-2" style="position:absolute; left: 47px;
   top: 280px; width: 210px; height: 100px;" >
					<div class="form-group">
					  <label for="Features" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Features</font></label>
					  <textarea class="form-control" rows="4" id="features" style = "resize: none;"  ><?php if(isset($valueprop)){echo $valueprop->features;}?></textarea>
					</div>
				</div>

				 <div class="col-md-2" style="position:absolute; left: 528px;
   top: 430px; width: 470px; height: 100px;" >
					<div class="form-group">
					  <label for="Substitutes" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Substitutes</font></label>
					  <textarea class="form-control" rows="2" id="substitutes" style = "resize: none;"  ><?php if(isset($valueprop)){echo $valueprop->substitutes;}?></textarea>
					</div>
				</div>

			<div class="col-md-2" style="position:absolute; left: 35px;
   top: 430px; width: 160px; height: 100px;" >
					<div class="form-group">
					  <label for="Company" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Company</font></label>
					  <textarea class="form-control" rows="1" id="company" style = "resize: none;text-align:center;"  disabled><?php echo ucfirst($team->team_name);?></textarea>
					</div>
				</div>


			<div class="col-md-2" style="position:absolute; left: 315px;
   top: 430px; width: 160px; height: 100px;" >
					<div class="form-group">
					  <label for="Product" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Product</font></label>
					  <textarea class="form-control" rows="1" id="product" style = "resize: none; text-align:center;"  disabled><?php echo ucfirst($ideagen->solution);?></textarea>
					</div>
				</div>
						<div class="col-md-2" style="position:absolute; left: 174px;
   top: 455px; width: 160px; height: 100px;" >
					<div class="form-group">
					  <label for="Ideal Custome" data-toggle="tooltip" data-placement="bottom" title = "Example"><font color="Black">Ideal Customer</font></label>
					  <textarea class="form-control" rows="1" id="customer" style = "resize: none; text-align:center;"  disabled><?php echo ucfirst($ideagen->people);?></textarea>
					</div>
				</div>

	<div style="position:absolute; left: 1000px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; "><a href = "#"id="template">Next</button>
			</div>

			<div style="position:absolute; right: 330px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; "><a href = "<?php echo base_url();?>Web/validationboard">Previous</button>
			</div>


</div>
             </div>
             </div>
         </div>
               

  		
				
				
	
			</header>
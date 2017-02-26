<header>
        <div class="header-content">
            <div class="header-content-inner">
            <input type="hidden" id="valueprop_id" value="<?php if(isset($valueprop)){ echo $valueprop->valueprop_id;}else{echo 0;}?>"/>
			<input type="hidden" id="pitchdeckid" value="<?php if(isset($pitchdeckid)){ echo $pitchdeckid;}else{echo 0;}?>"/>
				
            <div class="col-sm-4 text-center">
                   
                        <img src = "<?php echo base_url();?>assets/img/Value.png" style = "width: 1000px; height: 550px;">


		                <div class="col-md-2" style="position:absolute; left: 5px;
    top: 1px; width: 350px; height: 100px;" >
						<div class="form-group">
							  <label for="Value Proposition" data-toggle="tooltip" data-placement="bottom" title = "This is where your company’s product offer intersects with your customer’s desires. It’s the magic fit between what you make and why people buy it.">
							  <font color="Black"><h3><b>Value Proposition</b></h3></font></label>
							</div>
						</div>

                        <div class="col-md-2" style="position:absolute; left: 820px;
   top: 180px; width: 170px; height: 100px;" >
					<div class="form-group">
					   <label for="fears" data-toggle="tooltip" data-placement="bottom" title = "The dark side of making a decision, fear of making a mistake, fear of missing out, fear of loss and dozens of other related fears.">
					   <font color="Black">Fears</font></label>
					  <textarea class="form-control" rows="4" id="fears" style = "resize: none;" placeholder="example" ><?php if(isset($valueprop)){echo $valueprop->fears;}else{}?></textarea>
					</div>
				</div>

					<div class="col-md-2" style="position:absolute; left: 300px;
   top: 105px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="experience" data-toggle="tooltip" data-placement="bottom" title = "The way that owning your product makes the customer feel.">
					  <font color="Black">Experience</font></label>
					  <textarea class="form-control" rows="13" id="experience" style = "resize: none;"  placeholder="example" disabled><?php if(isset($valueprop)){echo $valueprop->experience;}?></textarea>
					</div>
				</div>

				   <div class="col-md-2" style="position:absolute; left: 650px;
   top: 100px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="wants" data-toggle="tooltip" data-placement="bottom" title = "The emotional drivers of decision making are things that we want to be, do or have.">
					  <font color="Black">Wants</font></label>
					  <textarea class="form-control" rows="4" id="wants" style = "resize: none;" placeholder="example" disabled><?php if(isset($valueprop)){echo $valueprop->wants;}?></textarea>
					</div>
				</div>

					<div class="col-md-2" style="position:absolute; left: 47px;
   top: 105px; width: 210px; height: 100px;" >
					<div class="form-group">
					  <label for="benefits" data-toggle="tooltip" data-placement="bottom" title = "What your product does for the customer.">
					  <font color="Black">Benefits</font></label>
					  <textarea class="form-control" rows="4" id="benefits" style = "resize: none;" placeholder="example" disabled><?php if(isset($valueprop)){echo $valueprop->benefits;}?></textarea>
					</div>
				</div>
			 <div class="col-md-2" style="position:absolute; left: 605px;
   top: 264px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="needs" data-toggle="tooltip" data-placement="bottom" title = "The rational things that the customer needs to get done.">
					  <font color="Black">Needs</font></label>
					  <textarea class="form-control" rows="4" id="needs" style = "resize: none;"  placeholder="example" disabled><?php if(isset($valueprop)){echo $valueprop->needs;}?></textarea>

					</div>
				</div>


			<div class="col-md-2" style="position:absolute; left: 47px;
   top: 280px; width: 210px; height: 100px;" >
					<div class="form-group">
					  <label for="features" data-toggle="tooltip" data-placement="bottom" title = "A factual description of how your product works.">
					  <font color="Black">Features</font></label>
					  <textarea class="form-control" rows="4" id="features" style = "resize: none;" placeholder="example" disabled><?php if(isset($valueprop)){echo $valueprop->features;}?></textarea>
					</div>
				</div>

				 <div class="col-md-2" style="position:absolute; left: 528px;
   top: 430px; width: 470px; height: 100px;" >
					<div class="form-group">
					  <label for="substitutes" data-toggle="tooltip" data-placement="bottom" title = "These aren’t the obvious competitors, instead look for the existing coping behaviours.">
					  <font color="Black">Substitutes</font></label>
					  <textarea class="form-control" rows="2" id="substitutes" style = "resize: none;" placeholder="example" disabled><?php if(isset($valueprop)){echo $valueprop->substitutes;}?></textarea>
					</div>
				</div>

			<div class="col-md-2" style="position:absolute; left: 35px;
   top: 430px; width: 160px; height: 100px;" >
					<div class="form-group">
					  <font color="Black">Company</font></label>
					  <textarea class="form-control" rows="1" id="company" style = "resize: none;text-align:center;"  disabled><?php echo ucfirst($team->team_name);?></textarea>
					</div>																			
				</div>


			<div class="col-md-2" style="position:absolute; left: 315px;
   top: 430px; width: 160px; height: 100px;" >
					<div class="form-group">
					 <font color="Black">Product</font></label>
					  <input class="form-control" id="product" style = "resize: none; text-align:center; height:40px" value="<?php $word = $ideagen->solution;$arr = explode(' ',trim($word));echo ucfirst($arr[0]); ?>" disabled>
					</div>
				</div>
						<div class="col-md-2" style="position:absolute; left: 174px;
   top: 455px; width: 160px; height: 100px;" >
					<div class="form-group">
					 <font color="Black">Ideal Customer</font></label>
					 <input class="form-control" id="customer" style = "resize: none; text-align:center; height:40px" value="<?php $word = $ideagen->people;$arr = explode(',',trim($word));echo ucfirst($arr[0]); ?>" disabled>
					</div>
				</div>

	<div style="position:absolute; left: 1000px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; display:none;" id="valueprop">Next</button>
			</div>

			<div style="position:absolute; right: 330px;
   top: 250px; width: 200px;"> 
				<button  type="button" onclick="window.location.href='<?php echo base_url();?>Presentation/validationboard/<?php echo $pitchdeckid;?>'" style="color:black; width: 100px; height:50px; ">Previous</button>
			</div>


</div>
             </div>
             </div>
         </div>
			</header>

			

<script type="text/javascript">
window.onload = function (){


				var fears = $('#fears').val();
				var experience = $('#experience').val();
				var wants = $('#wants').val();
				var benefits = $('#benefits').val();
				var needs = $('#needs').val();
				var features = $('#features').val();
				var substitutes = $('#substitutes').val();

				if(fears != '' || experience != '' || wants!='' || benefits != '' || needs!='' || features!='' || substitutes!=''){
					$('#experience').prop("disabled",false);
					$('#wants').prop("disabled",false);
					$('#benefits').prop("disabled",false);
					$('#needs').prop("disabled",false);
					$('#features').prop("disabled",false);
					$('#substitutes').prop("disabled",false);
					$('#valueprop').show();
				}
			};

			$('#fears').focus();
			
			$('#fears').on('change',function(){
				
				$('#experience').prop("disabled",false);
				$('#experience').focus();
			});

			$('#experience').on('change',function(){

				$('#wants').prop("disabled",false);
				$('#wants').focus();
			});

			$('#wants').on('change',function(){
				
				$('#benefits').prop("disabled",false);
				$('#benefits').focus();
			 });

			$('#benefits').on('change',function(){

					$('#needs').prop("disabled",false);
				$('#needs').focus();
			});

			$('#needs').on('change',function(){

				$('#features').prop("disabled",false);
				$('#features').focus();
			});

			$('#features').on('change',function(){

				$('#substitutes').prop("disabled",false);
				$('#substitutes').focus();
			});

			$('#substitutes').on('focus',function(){
				
				$('#valueprop').show();
			});

</script>

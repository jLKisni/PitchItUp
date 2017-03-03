<header>
        <div class="header-content">
            <div class="header-content-inner">
				
            <div class="col-sm-4 text-center">
                   		<input type="hidden" id="valueprop_id" value="<?php if(isset($valueprop)){ echo $valueprop->valueprop_id;}else{echo 0;}?>"/>
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
					  <textarea class="form-control" rows="4" id="fears" style = "resize: none;" placeholder="Wrong choice of pitch deck, Too much time thinking of contents for slide" ><?php if(isset($valueprop)){echo $valueprop->fears;}else{}?></textarea>
					</div>
				</div>

					<div class="col-md-2" style="position:absolute; left: 300px;
   top: 105px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="experience" data-toggle="tooltip" data-placement="bottom" title = "The way that owning your product makes the customer feel.">
					  <font color="Black">Experience</font></label>
					  <textarea class="form-control" rows="13" id="experience" style = "resize: none;"  placeholder="Free to choose pitch deck template, Automatically generate pitch deck
" disabled><?php if(isset($valueprop)){echo $valueprop->experience;}?></textarea>
					</div>
				</div>

				   <div class="col-md-2" style="position:absolute; left: 650px;
   top: 100px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="wants" data-toggle="tooltip" data-placement="bottom" title = "The emotional drivers of decision making are things that we want to be, do or have.">
					  <font color="Black">Wants</font></label>
					  <textarea class="form-control" rows="4" id="wants" style = "resize: none;" placeholder="Manage pitch deck, Download to PowerPoint or pdf file, Shareable
" disabled><?php if(isset($valueprop)){echo $valueprop->wants;}?></textarea>
					</div>
				</div>

					<div class="col-md-2" style="position:absolute; left: 47px;
   top: 105px; width: 210px; height: 100px;" >
					<div class="form-group">
					  <label for="benefits" data-toggle="tooltip" data-placement="bottom" title = "What your product does for the customer.">
					  <font color="Black">Benefits</font></label>
					  <textarea class="form-control" rows="4" id="benefits" style = "resize: none;" placeholder="Simple, Automatic
" disabled><?php if(isset($valueprop)){echo $valueprop->benefits;}?></textarea>
					</div>
				</div>
			 <div class="col-md-2" style="position:absolute; left: 605px;
   top: 264px; width: 170px; height: 100px;" >
					<div class="form-group">
					  <label for="needs" data-toggle="tooltip" data-placement="bottom" title = "The rational things that the customer needs to get done.">
					  <font color="Black">Needs</font></label>
					  <textarea class="form-control" rows="4" id="needs" style = "resize: none;"  placeholder="Import to separate file, Save documents used, Save pitch deck presentation
" disabled><?php if(isset($valueprop)){echo $valueprop->needs;}?></textarea>

					</div>
				</div>


			<div class="col-md-2" style="position:absolute; left: 47px;
   top: 280px; width: 210px; height: 100px;" >
					<div class="form-group">
					  <label for="features" data-toggle="tooltip" data-placement="bottom" title = "A factual description of how your product works.">
					  <font color="Black">Features</font></label>
					  <textarea class="form-control" rows="4" id="features" style = "resize: none;" placeholder="Download to PowerPoint or pdf file, Auto save, Has separate file for documents
" disabled><?php if(isset($valueprop)){echo $valueprop->features;}?></textarea>
					</div>
				</div>

				 <div class="col-md-2" style="position:absolute; left: 528px;
   top: 430px; width: 470px; height: 100px;" >
					<div class="form-group">
					  <label for="substitutes" data-toggle="tooltip" data-placement="bottom" title = "These aren’t the obvious competitors, instead look for the existing coping behaviours.">
					  <font color="Black">Substitutes</font></label>
					  <textarea class="form-control" rows="2" id="substitutes" style = "resize: none;" placeholder="Microsoft PowerPoint, SlideBean, Prezi
" disabled></textarea>
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
					  <input class="form-control" id="product" style = "resize: none; text-align:center; height:40px" value="<?php if($ideagen){$word = $ideagen->solution;$arr = explode(' ',trim($word));echo ucfirst($arr[0]); }else{echo '';}?>" disabled>
					</div>
				</div>
						<div class="col-md-2" style="position:absolute; left: 174px;
   top: 455px; width: 160px; height: 100px;" >
					<div class="form-group">
					 <font color="Black">Ideal Customer</font></label>
					 <input class="form-control" id="customer" style = "resize: none; text-align:center; height:40px" value="<?php if($ideagen){$word = $ideagen->people;$arr = explode(',',trim($word));echo ucfirst($arr[0]); }else{ echo ''; }?>" disabled>
					</div>
				</div>

	<div style="position:absolute; left: 1000px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; display:none;" id="valueprop">Next</button>
			</div>

			<div style="position:absolute; right: 330px;
   top: 250px; width: 200px;"> 
				<button  type="button" onclick="history.go(-1); return false;" style="color:black; width: 100px; height:50px; ">Previous</button>
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

				 if($('#valueprop_id').val() != 0){

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop_id = $('#valueprop_id').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes,
                    'valueprop_id':valueprop_id
                };

                //console.log(valueprop);
                var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValueProp"; 

                $.post(url,{data:valueprop},function(result){
                      console.log(result);
                });

                  // window.location.href = "<?php echo base_url()?>Web/valueprop";
                 $('#experience').prop("disabled",false);
				$('#experience').focus();

            }else{

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes
                };

                console.log(valueprop);
                var url = "<?php echo base_url();?>Web/PitchDeck/addValueProp"; 

                $.post(url,{data:valueprop},function(result){
                    console.log(result);
                });

                 window.location.href = "<?php echo base_url()?>Web/valueprop";

                 $('#experience').prop("disabled",false);
				$('#experience').focus();


            }
				
				
			});

			$('#experience').on('change',function(){

				if($('#valueprop_id').val() != 0){

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop_id = $('#valueprop_id').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes,
                    'valueprop_id':valueprop_id
                };

                //console.log(valueprop);
                var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValueProp"; 

                $.post(url,{data:valueprop},function(result){
                      console.log(result);
                });

                  // window.location.href = "<?php echo base_url()?>Web/valueprop";
                
				$('#wants').prop("disabled",false);
				$('#wants').focus();

            }else{

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes
                };

                console.log(valueprop);
                var url = "<?php echo base_url();?>Web/PitchDeck/addValueProp"; 

                $.post(url,{data:valueprop},function(result){
                    console.log(result);
                });

                 window.location.href = "<?php echo base_url()?>Web/valueprop";

                 
				$('#wants').prop("disabled",false);
				$('#wants').focus();


            }

			});

			$('#wants').on('change',function(){
				

				if($('#valueprop_id').val() != 0){

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop_id = $('#valueprop_id').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes,
                    'valueprop_id':valueprop_id
                };

                //console.log(valueprop);
                var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValueProp"; 

                $.post(url,{data:valueprop},function(result){
                      console.log(result);
                });

                  // window.location.href = "<?php echo base_url()?>Web/valueprop";
                
				$('#benefits').prop("disabled",false);
				$('#benefits').focus();

            }else{

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes
                };

                console.log(valueprop);
                var url = "<?php echo base_url();?>Web/PitchDeck/addValueProp"; 

                $.post(url,{data:valueprop},function(result){
                    console.log(result);
                });

                 window.location.href = "<?php echo base_url()?>Web/valueprop";

                 
				$('#benefits').prop("disabled",false);
				$('#benefits').focus();


            }
				
			 });

			$('#benefits').on('change',function(){
				if($('#valueprop_id').val() != 0){

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop_id = $('#valueprop_id').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes,
                    'valueprop_id':valueprop_id
                };

                //console.log(valueprop);
                var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValueProp"; 

                $.post(url,{data:valueprop},function(result){
                      console.log(result);
                });

                  // window.location.href = "<?php echo base_url()?>Web/valueprop";
                
					$('#needs').prop("disabled",false);
				$('#needs').focus();

            }else{

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes
                };

                console.log(valueprop);
                var url = "<?php echo base_url();?>Web/PitchDeck/addValueProp"; 

                $.post(url,{data:valueprop},function(result){
                    console.log(result);
                });

                 window.location.href = "<?php echo base_url()?>Web/valueprop";

                 
					$('#needs').prop("disabled",false);
				$('#needs').focus();


            }
				
			});

			$('#needs').on('change',function(){
				if($('#valueprop_id').val() != 0){

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop_id = $('#valueprop_id').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes,
                    'valueprop_id':valueprop_id
                };

                //console.log(valueprop);
                var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValueProp"; 

                $.post(url,{data:valueprop},function(result){
                      console.log(result);
                });

                  // window.location.href = "<?php echo base_url()?>Web/valueprop";
                
					$('#features').prop("disabled",false);
				$('#features').focus();

            }else{

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes
                };

                console.log(valueprop);
                var url = "<?php echo base_url();?>Web/PitchDeck/addValueProp"; 

                $.post(url,{data:valueprop},function(result){
                    console.log(result);
                });

                 window.location.href = "<?php echo base_url()?>Web/valueprop";

                 
					$('#features').prop("disabled",false);
				$('#features').focus();


            }
				
			});

			$('#features').on('change',function(){
				if($('#valueprop_id').val() != 0){

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop_id = $('#valueprop_id').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes,
                    'valueprop_id':valueprop_id
                };

                //console.log(valueprop);
                var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValueProp"; 

                $.post(url,{data:valueprop},function(result){
                      console.log(result);
                });

                  // window.location.href = "<?php echo base_url()?>Web/valueprop";
                
				$('#substitutes').prop("disabled",false);
				$('#substitutes').focus();

            }else{

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes
                };

                console.log(valueprop);
                var url = "<?php echo base_url();?>Web/PitchDeck/addValueProp"; 

                $.post(url,{data:valueprop},function(result){
                    console.log(result);
                });

                 window.location.href = "<?php echo base_url()?>Web/valueprop";

                 
				$('#substitutes').prop("disabled",false);
				$('#substitutes').focus();


            }
				
			});

			$('#substitutes').on('focus',function(){
				if($('#valueprop_id').val() != 0){

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop_id = $('#valueprop_id').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes,
                    'valueprop_id':valueprop_id
                };

                //console.log(valueprop);
                var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValueProp"; 

                $.post(url,{data:valueprop},function(result){
                      console.log(result);
                });

                  // window.location.href = "<?php echo base_url()?>Web/valueprop";
                
				$('#valueprop').show();

            }else{

                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes
                };

                console.log(valueprop);
                var url = "<?php echo base_url();?>Web/PitchDeck/addValueProp"; 

                $.post(url,{data:valueprop},function(result){
                    console.log(result);
                });

                 window.location.href = "<?php echo base_url()?>Web/valueprop";

                 
				$('#valueprop').show();


            }
				
			});

</script>

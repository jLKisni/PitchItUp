

 <header>
        <div class="header-content">
            <div class="header-content-inner">
			<form>
				<input type="hidden" id="ideagen_id" value="<?php if(isset($ideagen)){ echo $ideagen->idea_id;}else{echo 0;}?>"/>
			
  			<div class="col-sm-4 text-center">
                   
                        <img src = "<?php echo base_url();?>assets/img/idea.png" style = " width: 1000px; height: 550px;  ">

				
				
					<div class="col-md-5" style="position:absolute; left: 504px;
   top: 68px; width: 500px; " >
					<div class="form-group">
					  <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "this is where you put the problem of your idea"><font color="Black">Problem</font></label>
					  <textarea class="form-control" rows="9" id="problem" style = "resize: none;"  ><?php if(isset($ideagen)){echo $ideagen->people;}else{}?></textarea>
					</div>
				</div>

					<div class=" col-md-5" style="position:absolute; left: 21px;
   top: 68px; width: 500px;" >
					<div class="form-group">
					 <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "this is where you put the problem of your idea"><font color="Black">People</font></label>
					  <textarea class="form-control" rows="9" id="people" style = "resize: none;" placeholder ="Ex. Startup founder" disabled><?php if(isset($ideagen)){echo $ideagen->problem;}?></textarea>
					</div>
				</div>

				    <div class=" col-md-5" style="position:absolute; left: 21px;
   top: 305px; width: 500px; " >
					<div class="form-group">
					<label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "this is where you put the problem of your idea"><font color="Black">Behavior</font></label>
					  <textarea class="form-control" rows="9" id="behavior" style = "resize: none;"  disabled><?php if(isset($ideagen)){echo $ideagen->behavior;}?></textarea>
					</div>
				</div>

				<div class="col-md-5" style="position:absolute; left: 504px;
   top: 305px; width: 500px; " >
					<div class="form-group">
					<label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "this is where you put the problem of your idea"><font color="Black">Solution</font></label>
					  <textarea class="form-control" rows="9" id="solution" style = "resize: none;"  disabled><?php if(isset($ideagen)){echo $ideagen->solution;}?></textarea>
					</div>
				</div>

			   </div>

		<div style="position:absolute; left: 85%;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; display:none;" id="ideagen">Next</button>
			</div>

		</div>

	</form>
			</div>
		</div>
							
	
			</header>

			<script type="text/javascript">

			window.onload = function (){

				var people = $('#people').val();
				var problem = $('#problem').val();
				var behavior = $('#behavior').val();
				var solution = $('#solution').val();

				if(problem != '' || people != '' || behavior!='' || solution != ''){
					$('#people').prop("disabled",false);
					$('#behavior').prop("disabled",false);
					$('#solution').prop("disabled",false);
					$('#ideagen').show();
				}
			};

			$('#problem').focus();
			
			$('#problem').on('change',function(){
				
				$('#people').prop("disabled",false);
				$('#people').focus();
			});

			$('#people').on('change',function(){
				
				$('#behavior').prop("disabled",false);
				$('#behavior').focus();
			});

			$('#behavior').on('change',function(){
				
				$('#solution').prop("disabled",false);
				$('#solution').focus();
			});

			$('#solution').on('focus',function(){
				
				$('#ideagen').show();
			});



			</script>



	
	
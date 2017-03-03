

 <header>
        <div class="header-content">
            <div class="header-content-inner">
			<form>
				<input type="hidden" id="idea_id" value="<?php if(isset($ideagen)){ echo $ideagen->idea_id;}else{echo 0;}?>"/>
			
  			<div class="col-sm-4 text-center">
                   
                        <img src = "<?php echo base_url();?>assets/img/ideagen.png" style = " width: 1000px; height: 550px;  ">

                        	<div class="col-md-2" style="position:absolute; right: 20px;
   top: 1px; width: 350px; height: 100px;" >
					<div class="form-group">
					  <label for="Idea Generation" data-toggle="tooltip" data-placement="bottom" title = "The process of constructing through the idea, innovating the concept, developing the process, and bringing the concept to reality."><font color="Black">
					  	<h3><b>Idea Generation</b></h3></font></label>
					</div>
				</div>

				
				
					<div class="col-md-5" style="position:absolute; left: 504px;
   top: 68px; width: 500px; " >
					<div class="form-group">
					  <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "What problem you have recognized needs solving?">
					  <font color="Black">Problem</font></label>
					  <textarea class="form-control" rows="9" id="problem" style = "resize: none;" placeholder="example"><?php if(isset($ideagen)){echo $ideagen->problem;}else{}?></textarea>
					</div>
				</div>

					<div class=" col-md-5" style="position:absolute; left: 21px;
   top: 68px; width: 500px;" >
					<div class="form-group">
					 <label for="people" data-toggle="tooltip" data-placement="bottom" title = "Who are the people involved in the problem?">
					 <font color="Black">People</font></label>
					  <textarea class="form-control" rows="9" id="people" style = "resize: none;" placeholder ="Ex. Startup founder" disabled><?php if(isset($ideagen)){echo $ideagen->people;}?></textarea>
					</div>
				</div>

				    <div class=" col-md-5" style="position:absolute; left: 21px;
   top: 305px; width: 500px; " >
					<div class="form-group">
					<label for="behavior" data-toggle="tooltip" data-placement="bottom" title = "What are the behavior of the people who encounter the problem?">
					<font color="Black">Behavior</font></label>
					  <textarea class="form-control" rows="9" id="behavior" style = "resize: none;"  placeholder="example" disabled><?php if(isset($ideagen)){echo $ideagen->behavior;}?></textarea>
					</div>
				</div>

				<div class="col-md-5" style="position:absolute; left: 504px;
   top: 305px; width: 500px; " >
					<div class="form-group">
					<label for="solution" data-toggle="tooltip" data-placement="bottom" title = "What belief must you have that can solve the problem?">
					<font color="Black">Solution</font></label>
					  <textarea class="form-control" rows="9" id="solution" style = "resize: none;"  placeholder="example" disabled><?php if(isset($ideagen)){echo $ideagen->solution;}?></textarea>
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

				
                if(people != ''){
                    $('#people').prop("disabled",false);
                }
                else if(behavior != ''){
                    $('#behavior').prop("disabled",false);
                }
                else if(solution != ''){
                    $('#solution').prop("disabled",false);
                    
                }
                else if(people !='' && behavior != '' && solution != '' && problem !=''){
                    $('#ideagen').show();
                }

			};

			$('#problem').focus();
			
			$('#problem').on('change',function(){

				if($('#idea_id').val() !=0 ){
                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                var idea_id = $('#idea_id').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution,
                    'idea_id' : idea_id
                };

                    var url = "<?php echo base_url();?>Web/updatePitchDeck/updateIdeaGen/";
                    $.post(url,{data:ideagen},function(result){
                        // console.log(result);
                    });

                   // window.location.href = "<?php echo base_url()?>Web/Web/create";
                     
				$('#people').prop("disabled",false);
				$('#people').focus();
             }   
            else{
                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                // var idea_id = $('#ideagen_id').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution
                };

                var url = "<?php echo base_url();?>Web/PitchDeck/addIdeaGen";
                $.post(url,{data:ideagen},function(result){
                    console.log(result);
                });

                 window.location.href = "<?php echo base_url()?>Web/Web/create";	
                 
				$('#people').prop("disabled",false);
				$('#people').focus();
            }
    

			});

			$('#people').on('change',function(){
				
				if($('#idea_id').val() !=0 ){
                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                var idea_id = $('#idea_id').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution,
                    'idea_id' : idea_id
                };

                    var url = "<?php echo base_url();?>Web/updatePitchDeck/updateIdeaGen/";
                    $.post(url,{data:ideagen},function(result){
                        // console.log(result);
                    });

                    // window.location.href = "<?php echo base_url()?>Web/validationboard";
                     
				$('#behavior').prop("disabled",false);
				$('#behavior').focus();
             }   
            else{
                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                // var idea_id = $('#ideagen_id').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution
                };

                var url = "<?php echo base_url();?>Web/PitchDeck/addIdeaGen";
                $.post(url,{data:ideagen},function(result){
                    console.log(result);
                });

                 //window.location.href = "<?php echo base_url()?>Web/validationboard";
                 
				$('#behavior').prop("disabled",false);
				$('#behavior').focus();
            }
    
			});

			$('#behavior').on('change',function(){
				if($('#idea_id').val() !=0 ){
                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                var idea_id = $('#idea_id').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution,
                    'idea_id' : idea_id
                };

                    var url = "<?php echo base_url();?>Web/updatePitchDeck/updateIdeaGen/";
                    $.post(url,{data:ideagen},function(result){
                        // console.log(result);
                    });

                    // window.location.href = "<?php echo base_url()?>Web/validationboard";
                     
				$('#solution').prop("disabled",false);
				$('#solution').focus();
             }   
            else{
                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                // var idea_id = $('#ideagen_id').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution
                };

                var url = "<?php echo base_url();?>Web/PitchDeck/addIdeaGen";
                $.post(url,{data:ideagen},function(result){
                    console.log(result);
                });

                 //window.location.href = "<?php echo base_url()?>Web/validationboard";
                 
				$('#solution').prop("disabled",false);
				$('#solution').focus();
            }
    
			});

			$('#solution').on('change',function(){
				if($('#idea_id').val() !=0 ){
                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                var idea_id = $('#idea_id').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution,
                    'idea_id' : idea_id
                };

                    var url = "<?php echo base_url();?>Web/updatePitchDeck/updateIdeaGen/";
                    $.post(url,{data:ideagen},function(result){
                        // console.log(result);
                    });

                    // window.location.href = "<?php echo base_url()?>Web/create";
                $('#ideagen').show();
                
             }   
            else{
                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                // var idea_id = $('#ideagen_id').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution
                };

                var url = "<?php echo base_url();?>Web/PitchDeck/addIdeaGen";
                $.post(url,{data:ideagen},function(result){
                    console.log(result);
                });

                 //window.location.href = "<?php echo base_url()?>Web/validationboard";
                 $('#ideagen').show();
                 $('#ideagen').focus();
				
            }
				
			});



			</script>



	
	
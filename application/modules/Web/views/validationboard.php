<header>
        <div class="header-content">
            <div class="header-content-inner">
<div class="header-content-inner">
		<!--butangig code dre para sa validation board-->
			 <input type="hidden" id="valid_id" value="<?php if(isset($validation)){echo $validation->valid_id;}?>">
            <div class="col-sm-4 text-center">
                   
                    <img src = "<?php echo base_url();?>assets/img/Valid.png" style = "width: 1000px; height: 550px;">


 				<div class="col-md-2" style="position:absolute; right: 20px;
   top: 5%; width: 350px;" >
					<div class="form-group">
					  <label for="Validation Board" data-toggle="tooltip" data-placement="bottom" title = "A great tool to help entrepreneurs stay focused on taking action while implementing the Lean Startup process.">
					  <font color="Black"><h3><b>Validation Board</b></h3></font></label>
					</div>
				</div>

                    <div class="col-md-5" style="position:absolute; left: 190px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
					  <input class="form-control" id="cust1" style = "resize: none; text-align:center; height:54px" value="<?php if(isset($ideagen)){$word = $ideagen->people;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=0){echo ucfirst($arr[0]);}  }else{echo '';}?>" disabled/>
					  																						
					</div>
				</div>

				   <div class="col-md-5" style="position:absolute; left: 190px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					 <textarea class="form-control" id="prob1" style = "resize: none; text-align:center; height:54px" disabled><?php if(isset($ideagen)){$word = $ideagen->problem;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=0){echo ucfirst($arr[0]);}  }else{echo '';}?></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 190px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" id="solution1" style = "resize: none; text-align:center; height:54px" disabled><?php if(isset($ideagen)){$word = $ideagen->solution;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=0){echo ucfirst($arr[0]);}  }else{echo '';}?> </textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 190px; 
   top: 302px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="assump1" style = "resize:none; text-align:center; height:54px" placeholder="Problem Exist"  ><?php if(isset($validation)){ echo $validation->risk_assumpt;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 190px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					  <input type="number" class="form-control" min="1" max="10" rows="2" id="criterion1" style = "resize:none; text-align:center; height:54px"  placeholder="10/10" value="<?php if(isset($validation)){ echo $validation->solution_criteria;}?>"/>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 190px; 
   top: 417px; width: 175px; " >
					<div class="form-group">
					  <input type="number" class="form-control" min="1" max="10" rows="2" id="discussion1" style = "resize:none; text-align:center; height:54px" placeholder="8/10"  value="<?php if(isset($validation)){ echo $validation->results;}?>"/>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 190px; 
   top: 475px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="learning1" style = "resize: none;" placeholder="I learn that startup founders want to make their work easier" ><?php if(isset($validation)){ echo $validation->learnings;}?></textarea>
					</div>
				</div>

<!-- Next 2-->
  <div class="col-md-5" style="position:absolute; left: 347px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
					  <input class="form-control" id="cust2" style = "resize: none; text-align:center; height:54px" value="<?php if(isset($ideagen)){$word = $ideagen->people;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=1){echo ucfirst($arr[1]);} }else{echo '';}?>" disabled>
					</div>
				</div>

				   <div class="col-md-5" style="position:absolute; left: 347px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					   <textarea class="form-control" id="prob2" style = "resize: none; text-align:center; height:54px" disabled><?php if(isset($ideagen)){$word = $ideagen->problem;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=1){echo ucfirst($arr[1]);}  }else{echo '';}?></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 347px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" id="solution2" style = "resize: none; text-align:center; height:54px"  disabled><?php if(isset($ideagen)){$word = $ideagen->solution;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=1){echo ucfirst($arr[1]);}  }else{echo '';}?></textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 347px; 
   top: 302px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="assump2" style = "resize: none;"  placeholder="" disabled><?php if(isset($validation)){ echo $validation->risk_assumpt2;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 347px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					 <input type="number" class="form-control" min="1" max="10" rows="2" id="criterion1" style = "resize:none; text-align:center; height:54px"  placeholder=""  value="<?php if(isset($validation)){ echo $validation->solution_criteria2;}?>"/>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 347px; 
   top: 417px; width: 175px; " >
					<div class="form-group">
					 <input type="number" class="form-control" min="1" max="10" rows="2" id="discussion2"style = "resize:none; text-align:center; height:54px" placeholder=""  value="<?php if(isset($validation)){ echo $validation->results2;}?>"/>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 347px; 
   top: 475px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="learning2" style = "resize: none;" placeholder=""  ><?php if(isset($validation)){ echo $validation->learnings2;}?></textarea>
					</div>
				</div>

<!-- Next 3-->

  <div class="col-md-5" style="position:absolute; left: 506px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
					  <input class="form-control" id="cust3" style = "resize: none; text-align:center; height:54px" value="<?php if(isset($ideagen)){$word = $ideagen->people;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=2){echo ucfirst($arr[2]);} }else{echo '';}?>" disabled>
					</div>
				</div>

				   <div class="col-md-5" style="position:absolute; left: 506px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					   <textarea class="form-control" id="prob3" style = "resize: none; text-align:center; height:54px"  disabled><?php if(isset($ideagen)){$word = $ideagen->problem;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=2){echo ucfirst($arr[2]);} }else{echo '';}?></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 506px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" id="solution3" style = "resize: none; text-align:center; height:54px"  disabled><?php if(isset($ideagen)){$word = $ideagen->solution;$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=2){echo ucfirst($arr[2]);}  }else{echo '';}?></textarea></div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 506px; 
   top: 302px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="assump3" style = "resize: none;" placeholder="" disabled ><?php if(isset($validation)){ echo $validation->risk_assumpt3;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 506px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					 <input type="number" class="form-control" min="1" max="10" rows="2" id="criterion3" style = "resize:none; text-align:center; height:54px"  placeholder="" value="<?php if(isset($validation)){ echo $validation->solution_criteria3;}?>"  />
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 506px; 
   top: 417px; width: 175px; " >
					<div class="form-group">
					  <input type="number" class="form-control" min="1" max="10" rows="2" id="discussion3"style = "resize:none; text-align:center; height:54px" placeholder="" value="<?php if(isset($validation)){ echo $validation->results3;}?>" />
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 506px; 
   top: 475px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="learning3" style = "resize: none;"  placeholder=""  ><?php if(isset($validation)){ echo $validation->learnings2;}?></textarea>
					</div>
				</div>

<!-- Next 4-->
			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
						<textarea class="form-control" rows="2" id="comment" style = "resize: none;" disabled ></textarea>
					</div>
				</div>

				<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					 
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;" disabled ></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					 
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"disabled ></textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 665px; 
   top: 302px; width: 175px; " >
					<div class="form-group">
					 
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;" disabled ></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  disabled></textarea>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 417px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;" disabled ></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 475px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  disabled></textarea>
					</div>
				</div>

<!-- Next 4-->
			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  disabled></textarea>
					</div>
				</div>

								<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  disabled></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  disabled></textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 823px; 
   top: 302px; width: 175px; " >
					<div class="form-group">

					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;" disabled ></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  disabled></textarea>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 417px; width: 175px; " >
					<div class="form-group">

					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;" disabled ></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 475px; width: 175px; " >
					<div class="form-group">

					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;" disabled ></textarea>
					</div>
				</div>
<!--next-->


				<div class="col-md-5" style="position:absolute; left: 290px; 
   top: 15px; width: 220px; " >
					<div class="form-group">
					   <font color="Black">Startup Idea </font>
					  	 <input class="form-control" rows="1" id="comment" style = "resize: none; text-align:center;" value="<?php if(isset($ideagen)){ $word = $ideagen->solution;$arr = explode(' ',trim($word));echo ucfirst($arr[0]); }else{ echo '';}?>" disabled>
					</div>
				</div>

						<div class="col-md-5" style="position:absolute; left: 500px; 
   top: 15px; width: 100px; " >
					<div class="form-group">
					<font color="Black">Stage#</font>
					<input type="number"  min="1" max="5"class="form-control" rows="1" id="stage" style = "resize: none;" placeholder="1" value="<?php if(isset($validation)){ echo $validation->stage;}else{echo 0;}?>">
					  <!-- <textarea class="form-control" rows="1" id="comment" style = "resize: none;"  ></textarea> -->
					</div>
				</div>


<!-- <div style="position:absolute; left: 85%;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; display:none;" id="ideagen">Next</button>
			</div> -->

	<div style="position:absolute; left: 1000px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; " id="validationboard">Next</button>
			</div>

	<div style="position:absolute; right: 330px;
   top: 250px; width: 200px;"> 
				<button  type="button"  onclick="history.go(-1); return false;" style="color:black; width: 100px; height:50px;">Previous</button>
			</div>

	</div>

             </div>
         </div
         </div>
         
		</header>

<script type="text/javascript">
window.onload = function (){


				var stage = $('#stage').val();
				var cust1 = $('#cust1').val();
				var prob1 = $('#prob1').val();
				var solution1 = $('#solution1').val();
				var assump1 = $('#assump1').val();
				var criterion1 = $('#criterion1').val();
				var discussion1 = $('#discussion1').val();
				var learning1 = $('#learning1').val();

				//next
				var assump2 = $('#assump2').val();
				var criterion2 = $('#criterion2').val();
				var discussion2 = $('#discussion2').val();
				var learning2 = $('#learning2').val();
				//next
				var assump3 = $('#assump2').val();
				var criterion3 = $('#criterion2').val();
				var discussion3 = $('#discussion2').val();
				var learning3 = $('#learning2').val();


				if(stage != '' || assump1 != '' || criterion1!='' || discussion1!='' || learning1!='' 
							   || assump2 != '' || criterion2!='' || discussion2!='' || learning2!=''
							   || assump3 != '' || criterion3!='' || discussion3!='' || learning3!=''){

					$('#assump1').prop("disabled",false);
					$('#criterion1').prop("disabled",false);
					$('#discussion1').prop("disabled",false);
					$('#learning1').prop("disabled",false);
					//next
					$('#assump2').prop("disabled",false);
					$('#criterion2').prop("disabled",false);
					$('#discussion2').prop("disabled",false);
					$('#learning2').prop("disabled",false);
					//next
					$('#assump3').prop("disabled",false);
					$('#criterion3').prop("disabled",false);
					$('#discussion3').prop("disabled",false);
					$('#learning3').prop("disabled",false);
					$('#validation').show();
				}
			};

			$('#stage').focus();
			
			$('#stage').on('change',function(){
			
			if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var stage = $('#stage').val();
            var valid_id = $('#valid_id').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
                $('#assump1').prop("disabled",false);
				$('#assump1').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
              $('#assump1').prop("disabled",false);
				$('#assump1').focus();
            }
				
			});

			$('#assump1').on('change',function(){


				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
                $('#criterion1').prop("disabled",false);
				$('#criterion1').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
             $('#criterion1').prop("disabled",false);
				$('#criterion1').focus();
            }

				
			});

			$('#criterion1').on('change',function(){


					if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
                $('#discussion1').prop("disabled",false);
				$('#discussion1').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#discussion1').prop("disabled",false);
				$('#discussion1').focus();
            }

				
				
			 });

			$('#discussion1').on('change',function(){

	//-------------------------------------------------------------//
				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
                $('#learning1').prop("disabled",false);
				$('#learning1').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#learning1').prop("disabled",false);
				$('#learning1').focus();
            }

				
			});

			$('#learning1').on('change',function(){

				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
               $('#cust2').prop("disabled",false);
          		$('#prob2').prop("disabled",false);
          		$('#criterion2').prop("disabled",false);
          		$('#solution2').prop("disabled",false);
				$('#cust2').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#cust2').prop("disabled",false);
          		$('#prob2').prop("disabled",false);
          		$('#criterion2').prop("disabled",false);
          		$('#solution2').prop("disabled",false);
				$('#cust2').focus();
            }


				
				
				
			});

			$('#assump2').on('change',function(){

				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
               $('#criterion2').prop("disabled",false);
				$('#criterion2').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#criterion2').prop("disabled",false);
				$('#criterion2').focus();
            }



				
			});

			$('#criterion2').on('change',function(){

				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
               $('#discussion2').prop("disabled",false);
				$('#discussion2').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#discussion2').prop("disabled",false);
				$('#discussion2').focus();
            }



				
			});

			$('#discussion2').on('change',function(){

				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
               $('#learning2').prop("disabled",false);
				$('#learning2').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#learning2').prop("disabled",false);
				$('#learning2').focus();
            }


				
			});
///-----------------------------------------------------------------------------------///

			$('#learning2').on('change',function(){

				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
               $('#cust3').prop("disabled",false);
          		$('#prob3').prop("disabled",false);
          		$('#criterion3').prop("disabled",false);
          		$('#solution3').prop("disabled",false);
				$('#cust3').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#cust3').prop("disabled",false);
          		$('#prob3').prop("disabled",false);
          		$('#criterion3').prop("disabled",false);
          		$('#solution3').prop("disabled",false);
				$('#cust3').focus();
            }

			});

			$('#assump3').on('change',function(){

				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
               $('#criterion3').prop("disabled",false);
				$('#criterion3').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#criterion3').prop("disabled",false);
				$('#criterion3').focus();
            }

				
			});

			$('#criterion3').on('change',function(){
				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
               $('#discussion3').prop("disabled",false);
				$('#discussion3').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#discussion3').prop("disabled",false);
				$('#discussion3').focus();
            }

				
			 });

			$('#discussion3').on('change',function(){

				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
               $('#learning3').prop("disabled",false);
				$('#learning3').focus();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#learning3').prop("disabled",false);
				$('#learning3').focus();
            }


				
			});

//--------------------------------------------------------------------------------//////

			$('#learning3').on('focus',function(){
				if($('#valid_id').val()!=0){

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
            var valid_id = $('#valid_id').val();
            var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'valid_id': valid_id,
                'stage':stage

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   // console.log(result);
            });
                 // window.location.href = "<?php echo base_url()?>Web/validationboard" 
              $('#validation').show();
            }else{

            var cust_pivot1 = $('#cust1').val();
            var cust_pivot2 = $('#cust2').val();
            var cust_pivot3 = $('#cust3').val();
            var cust_prob1 = $('#prob1').val();
            var cust_prob2 = $('#prob2').val();
            var cust_prob3 = $('#prob3').val();
            var cust_solution1 = $('#solution1').val();
            var cust_solution2 = $('#solution2').val();
            var cust_solution3 = $('#solution3').val();
            var risk_assump1 = $('#assump1').val();
            var risk_assump2 = $('#assump2').val();
            var risk_assump3 = $('#assump3').val();
            var criterion1 = $('#criterion1').val();
            var criterion2 = $('#criterion2').val();
            var criterion3 = $('#criterion3').val();
            var discussion1 = $('#discussion1').val();
            var discussion2 = $('#discussion2').val();
            var discussion3 = $('#discussion3').val();
            var learning1 = $('#learning1').val();
            var learning2 = $('#learning2').val();
            var learning3 = $('#learning3').val();
             var stage = $('#stage').val();

            var validationboard = {
                'cust_pivot1' : cust_pivot1,
                'cust_pivot2' : cust_pivot2,
                'cust_pivot3' : cust_pivot3,
                'cust_prob1' : cust_prob1,
                'cust_prob2' : cust_prob2,
                'cust_prob3' : cust_prob3,
                'cust_solution1' : cust_solution1,
                'cust_solution2' : cust_solution2,
                'cust_solution3' : cust_solution3,
                'risk_assump1' : risk_assump1,
                'risk_assump2' : risk_assump2,
                'risk_assump3' : risk_assump3,
                'criterion1' : criterion1,
                'criterion2' : criterion2,
                'criterion3' : criterion3,
                'discussion1' : discussion1,
                'discussion2' : discussion2,
                'discussion3' : discussion3,
                'learning1' : learning1,
                'learning2' : learning2,
                'learning3' : learning3,
                'stage':stage
            };

            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/PitchDeck/addValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                
            	// console.log(result);
                // window.location.href = "<?php echo base_url()?>Web/validationboard"
                
            });
          		$('#validation').show();
            }

				
			});

//--------------------------------------------------------//

		$('#discussion1').on('change',function(){
			
			var criteria = $('#criterion1').val();
			var discussion = $('#discussion1').val();
			var average1 = criteria / 2;


			//alert(ParseInt(criteria));
			if(parseInt(discussion)>=average1){
			 $('#cust2').prop("disabled",false);
			 $('#prob2').prop("disabled",false);
			$('#solution2').prop("disabled",false);
			$('#assump2').prop("disabled",false);
			$('#criterion2').prop("disabled",false);
			$('#discussion2').prop("disabled",false);
			$('#learning2').prop("disabled",false);
			}
			else{
					alert('Need to pivot ');
					$('#criterion1').val('');
					$('#discussion1').val('');
					$('#criterion1').focus();
				}
			 });

		$('#cust2').on('change',function(){
			$('#prob2').focus();
			$('#prob2').prop("disabled",false);
			$('#solution2').prop("disabled",false);
			$('#assump2').prop("disabled",false);
			$('#criterion2').prop("disabled",false);
			$('#discussion2').prop("disabled",false);
			$('#learning2').prop("disabled",false);

		});

		$('#discussion2').on('change',function(){
			
			var criteria = $('#criterion2').val();
			var discussion = $('#discussion2').val();
			var average2 = criteria / 2;

			//alert(ParseInt(criteria));
			if(parseInt(discussion)>=average2){
			 $('#cust3').prop("disabled",false);
			$('#prob3').prop("disabled",false);
			$('#solution3').prop("disabled",false);
			$('#assump3').prop("disabled",false);
			$('#criterion3').prop("disabled",false);
			$('#discussion3').prop("disabled",false);
			$('#learning3').prop("disabled",false);

			}
			else{

				alert('Need to pivot ');
					$('#criterion2').val('');
					$('#discussion2').val('');
					$('#criterion2').focus();
			}
			 });

		$('#cust3').on('change',function(){
			$('#prob3').focus();
			$('#prob3').prop("disabled",false);
			$('#solution3').prop("disabled",false);
			$('#assump3').prop("disabled",false);
			$('#criterion3').prop("disabled",false);
			$('#discussion3').prop("disabled",false);
			$('#learning3').prop("disabled",false);

		});


		$('#discussion3').on('change',function(){
			
			var criteria = $('#criterion3').val();
			var discussion = $('#discussion3').val();
			var average3 = criteria / 2;
			//alert(ParseInt(criteria));
			if(parseInt(discussion)>=average3){
			
			}
			else{
				alert('Need to pivot ');
					$('#criterion3').val('');
					$('#discussion3').val('');
					$('#criterion3').focus();
			}

			 });

		$('#cust4').on('change',function(){
			$('#prob4').focus();
			$('#prob4').prop("disabled",false);
			$('#solution4').prop("disabled",false);
			$('#assump4').prop("disabled",false);
			$('#criterion4').prop("disabled",false);
			$('#discussion4').prop("disabled",false);
			$('#learning4').prop("disabled",false);



		});



		// $('#discussion4').on('change',function(){
			
		// 	var criteria = $('#criterion4').val();
		// 	var discussion = $('#discussion4').val();

		// 	//alert(ParseInt(criteria));
		// 	if(parseInt(criteria)>parseInt(discussion)){
		// 	 $('#cus55').prop("disabled",false);
		// 		}
		// 	 });

		// $('#cust4').on('change',function(){
		// 	$('#prob4').focus();
		// 	$('#prob4').prop("disabled",false);
		// 	$('#solution4').prop("disabled",false);
		// 	$('#assump4').prop("disabled",false);
		// 	$('#criterion4').prop("disabled",false);
		// 	$('#discussion4').prop("disabled",false);
		// 	$('#learning4').prop("disabled",false);
</script>



		

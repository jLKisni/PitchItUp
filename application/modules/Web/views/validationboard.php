<header>
        <div class="header-content">
            <div class="header-content-inner">
<div class="header-content-inner">
            <input type="hidden" id="valid_id" value="<?php if(isset($validation)){echo $validation->valid_id;}else{echo 0;}?>">   
		<!--butangig code dre para sa validation board-->
		
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
					  <textarea class="form-control" rows="2" id="cust_pivot1" style = "resize: none;" ><?php if(isset($validation)){ echo $validation->customer;}?></textarea>
					</div>
				</div>

				   <div class="col-md-5" style="position:absolute; left: 190px; 
   top: 186px; width: 175px; " >
					<div class="form-group">

					  <textarea class="form-control" rows="2" id="cust_prob1" style = "resize: none;" ><?php if(isset($validation)){ echo $validation->problem;}?></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 190px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="cust_solution1" style = "resize: none;" ><?php if(isset($validation)){ echo $validation->solution;}?></textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 190px; 
   top: 302px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="risk_assump1" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->risk_assumpt;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 190px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="criterion1" style = "resize: none;" ><?php if(isset($validation)){ echo $validation->solution_criteria;}?></textarea>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 190px; 
   top: 417px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="discussion1" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->results;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 190px; 
   top: 475px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="learning1" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->learnings;}?></textarea>
					</div>
				</div>

<!-- Next 2-->
  <div class="col-md-5" style="position:absolute; left: 347px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="cust_pivot2" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->customer2;}?></textarea>
					</div>disabled
				</div>

				   <div class="col-md-5" style="position:absolute; left: 347px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="cust_prob2" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->problem2;}?></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 347px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="cust_solution2" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->solution2;}?></textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 347px; 
   top: 302px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="risk_assump2" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->risk_assumpt2;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 347px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="criterion2" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->solution_criteria2;}?></textarea>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 347px; 
   top: 417px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="discussion2" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->results2;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 347px; 
   top: 475px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="learning2" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->learnings2;}?></textarea>
					</div>
				</div>

<!-- Next 3-->

  <div class="col-md-5" style="position:absolute; left: 506px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="cust_pivot3" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->customer3;}?></textarea>
					</div>
				</div>

				   <div class="col-md-5" style="position:absolute; left: 506px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="cust_prob3" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->problem3;}?></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 506px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="cust_solution3" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->solution3;}?></textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 506px; 
   top: 302px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="risk_assump3" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->risk_assumpt3;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 506px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="criterion3" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->solution_criteria3;}?></textarea>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 506px; 
   top: 417px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="discussion3" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->results3;}?></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 506px; 
   top: 475px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="learning3" style = "resize: none;"  ><?php if(isset($validation)){ echo $validation->learnings3;}?></textarea>
					</div>
				</div>

<!-- Next 4-->
			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
					 
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>

				<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					 
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					 
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;" ></textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 665px; 
   top: 302px; width: 175px; " >
					<div class="form-group">
					 
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 417px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 665px; 
   top: 475px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>

<!-- Next 4-->
			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 128px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>

								<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 186px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>

			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 244px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>

		     <div class="col-md-5" style="position:absolute; left: 823px; 
   top: 302px; width: 175px; " >
					<div class="form-group">

					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 359px; width: 175px; " >
					<div class="form-group">
					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>
			
			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 417px; width: 175px; " >
					<div class="form-group">

					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>
			<div class="col-md-5" style="position:absolute; left: 823px; 
   top: 475px; width: 175px; " >
					<div class="form-group">

					  <textarea class="form-control" rows="2" id="comment" style = "resize: none;"  ></textarea>
					</div>
				</div>
<!--next-->


				<div class="col-md-5" style="position:absolute; left: 290px; 
   top: 15px; width: 220px; " >
					<div class="form-group">
					   <font color="Black">Startup Idea </font></label>
					  <textarea class="form-control" rows="1" id="comment" style = "resize: none;text-align:center; font-style:bold"  disabled><?php echo " \" ".ucfirst($ideagen->solution)." \" ";?></textarea>
					</div>
				</div>

						<div class="col-md-5" style="position:absolute; left: 500px; 
   top: 15px; width: 100px; " >
					<div class="form-group">
					<font color="Black">Stage#</font></label>
					<input type="number" name="stage" class="form-control" rows="1" id="comment" style = "resize: none;" placeholder="1"><?php if(isset($validation)){ echo $validation->stage;}?>
					  <!-- <textarea class="form-control" rows="1" id="comment" style = "resize: none;"  ></textarea> -->
					</div>
				</div>



	<div style="position:absolute; left: 1000px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; "><a href = "#" id="valueprop">Next</button>
			</div>

			<div style="position:absolute; right: 330px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; "><a href = "<?php echo base_url();?>Web/create">Previous</button>
			</div>

	</div>

             </div>
         </div>
         </div>
         
		</header>
		

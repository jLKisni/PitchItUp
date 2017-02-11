	<header>
        <div class="header-content">
            <div class="header-content-inner">
            <input type="hidden" id="valid_id" value="<?php if(isset($validation)){echo $validation->valid_id;}else{echo 0;}?>">   
		<!--butangig code dre para sa validation board-->
		<div class = "row">
			<h2><b> Validation Board </b></h2></br></br>
			<table class = "table-bordered" align = "center">
				<thead>
					<tr>
						<th>Expirements</th>
						<th>Pivot 1</th>
						<th>Pivot 2</th>
						<th>Pivot 3</th>
					</tr>
					
				</thead>
				<tbody>

					
					<tr>
						<td>Customer</td>
						<td><textarea class = "form-control" rows= "2" id = "cust_pivot1"  style = "resize: none; "><?php if(isset($validation)){ echo $validation->customer;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "cust_pivot2"  style = "resize: none; "><?php if(isset($validation)){ echo $validation->customer2;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "cust_pivot3"  style = "resize: none; "><?php if(isset($validation)){ echo $validation->customer3;}?></textarea></td>
					</tr>
					<tr>
						<td>Problem</td>
						<td><textarea class = "form-control" rows= "2" id = "cust_prob1"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->problem;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "cust_prob2"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->problem2;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "cust_prob3"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->problem3;}?></textarea></td>
					</tr>
					<tr>
						<td>Solution</td>
						<td><textarea class = "form-control" rows= "2" id = "cust_solution1"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->solution;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "cust_solution2"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->solution2;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "cust_solution3"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->solution3;}?></textarea></td>
					</tr>
					<tr>
						<td>Riskiest Assumption</td>
						<td><textarea class = "form-control" rows= "2" id = "risk_assump1"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->risk_assumpt;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "risk_assump2"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->risk_assumpt2;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "risk_assump3"  style = "resize: none;"><?php if(isset($validation)){ echo $validation->risk_assumpt3;}?></textarea></td>
					</tr>
					<tr>
						<td>Success criterion</td>
						<td><textarea class = "form-control" rows= "2" id = "criterion1" style = "resize: none;"><?php if(isset($validation)){ echo $validation->solution_criteria;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "criterion2" style = "resize: none;"><?php if(isset($validation)){ echo $validation->solution_criteria2;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "criterion3" style = "resize: none;"><?php if(isset($validation)){ echo $validation->solution_criteria3;}?></textarea></td>
					</tr>
					<tr>
						<td>Result and Discussion</td>
						<td><textarea class = "form-control" rows= "2" id = "discussion1" style = "resize: none;"><?php if(isset($validation)){ echo $validation->results;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "discussion2" style = "resize: none;"><?php if(isset($validation)){ echo $validation->results2;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "discussion3" style = "resize: none;"><?php if(isset($validation)){ echo $validation->results3;}?></textarea></td>
					</tr>
					<tr>
						<td>Learning</td>
						<td><textarea class = "form-control" rows= "2" id = "learning1" style = "resize: none;"><?php if(isset($validation)){ echo $validation->learnings;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "learning2" style = "resize: none;"><?php if(isset($validation)){ echo $validation->learnings2;}?></textarea></td>
						<td><textarea class = "form-control" rows= "2" id = "learning3" style = "resize: none;"><?php if(isset($validation)){ echo $validation->learnings3;}?></textarea></td>
					</tr>
				</tbody>
			</table>
			
				
	</div>
	<ul class = "pager">
				<li class = "previous"><a href = "<?php echo base_url();?>Web/BMC">Previous</li></a>
				<li class = "next"><a href = "#" id="valueprop">Next</li></a>
			</ul>
	</div>
	</div>
	
	
	
	</header>
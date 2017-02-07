   <header>
        <div class="header-content">
            <div class="header-content-inner">
               <input type="hidden" id="valueprop_id" value="<?php if(isset($valueprop)){ echo $valueprop->valueprop_id;}else{echo 0;}?>"/>
			
					<div class = "row">
						<h2><b> Value Proposition </b></h2></br></br>
						<table class = "table-bordered" align = "center">	
							<thead>
								<tr>
									<th colspan = "2">Product</th>
									<th colspan = "2">Customer</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td align = "center">Benefits</td>
									<td><textarea class = "form-control" rows= "3" id = "benefits" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->benefits;}?></textarea></td>
									<td align = "center">Wants</td>
									<td><textarea class = "form-control" rows= "3" id = "wants" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->wants;}?></textarea></td>
								
								</tr>	
								<tr>
									<td align = "center">Features</td>
									<td><textarea class = "form-control" rows= "3" id = "features" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->features;}?></textarea></td>
									<td align = "center">Needs</td>
									<td><textarea class = "form-control" rows= "3" id = "needs" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->needs;}?></textarea></td>
									
								</tr>
								<tr>
									<td align = "center">Experience</td>
									<td><textarea class = "form-control" rows= "3" id = "experience" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->experience;}?></textarea></td>
									<td align = "center">Fears</td>
									<td><textarea class = "form-control" rows= "3" id = "fears" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->fears;}?></textarea></td>
									
								</tr>
								
							</tbody>
					
						</table>
				
								<table align = "center">
									<tr><td>Company:<textarea class = "form-control" rows= "1" id="company" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->company;}?></textarea></td>
									<td></td>
									<td></td>
									<td>Product:<textarea class = "form-control" rows= "1" id="product" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->product;}?></textarea></td></tr>
								</table>
								<table align = "center">
									<tr><td>Ideal customer:<textarea class = "form-control" id="customer" rows= "1" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->ideal_cust;}?></textarea></td>
									<td></td>
									<td></td>
									<td>Substitutes:<textarea class = "form-control" rows= "1" id="substitutes" style = "resize: none;"><?php if(isset($valueprop)){echo $valueprop->substitutes;}?></textarea></td></tr>
								</table>
					</div>
					
						
		
				<ul class = "pager">
					<li class = "previous"><a href = "<?php echo base_url();?>Web/validationboard">Previous</li></a>
					<li class = "next"><a href = "#" id="template">Next</li></a>
				</ul>
					
			</div>
		</div>
           
    </header>
	
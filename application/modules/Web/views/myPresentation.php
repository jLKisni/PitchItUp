<header>
        <div class="header-content">
            <div class="header-content-inner">
            	<div class="border">



            	
<style type="text/css">
	
.folder:hover{

	opacity:0.5;
}

.border{
    border: 2px solid #a1a1a1;
    padding: 10px 40px; 
    background: #fff;
    width: 1000px;
    height: auto;
    border-radius: 25px;
}

</style>    
                    <div class="row">

                        <div class="col-sm-12" >


					<?php if(!empty($pitchdeck)){?>
                    <font color="#000"><b><h2 id = "text" class = "text-center"><b>My Presentation</b></h2></font></b>
                    <?php foreach($pitchdeck as $row):?>

                    <?php $word = $row['solution'];$arr = explode(' -',trim($word)); if((sizeof($arr)-1)>=1){ $problem = ucfirst($arr[0]);}else{ $problem = $row['solution'];}?>
            		
            				<!-- style="background-color:#fff; height:auto; -->
            				
	            				<div class="col-sm-3">
	            					<a href="<?php echo base_url();?>Web/templatepresentation/<?php echo $row['pitchdeck_id'];?>"><span style="color: #fff; text-decoration:bold; position:absolute; left: 37%;top:50%; "><?php echo ucfirst($problem);?></span>
	            						<img src= "<?php echo base_url();?>assets/img/template1.png" class="folder" style = "width: 200px; height: 200px;" id="pres1" class="presentation_hover" ></a>
	            					
	            				</div>

                               
	            			

            		
            		<?php endforeach; }else{?>
            		<font color="#000"><b><h2 id = "text" class = "text-center"><b>You have no Presentation yet!</b></h2></font></b>
	            	<?php }?>

                        </div>
                    </div>
	               	
                	
                     </div>	
                     <br/>
				<!-- <p id = "text2" class = "text-center"><a href = "<?php echo base_url();?>Web/create" class = "btn btn-primary btn-xl page-scroll" role = "button">Create New</a><p> -->
				

            </div>
        </div>
    </header>
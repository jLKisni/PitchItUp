<header>

        <div class="header-content">

            <div class="header-content-inner">

           <div class="col-sm-4 text-center">
                   
                        <img src = "<?php echo base_url();?>assets/img/template.png" style = " width: 1000px; height: 550px;  ">

            

               	   <div class="col-md-12" style="position:absolute; left: 200px;
   top: 200px;" >
						<img src= "<?php echo base_url();?>assets/img/temp1.png" style = "width: 200px; height: 200px;" id="pres1" class="presentation_hover" >
						<br/>
            <span><a href = "<?php echo base_url();?>pdf/tutorial/pdfgenerator.php?id=<?php echo $this->session->userdata('pitchdeckid');?>"  class="btn btn-danger btn-sm" id="pdf1" style="position:inherit">View As PDF</a></span>
            <br/><br/><button type="button" class="btn btn-danger btn-sm" id="template1" style='display:none;'>Download as PowerPoint</button>
              
       
            		</div>

                    <div class="col-md-12" style="position:absolute; left: 500px;
   top: 200px;">
              <img src= "<?php echo base_url();?>assets/img/Temp2.png" style = "width: 200px; height: 200px;" id="pres2" class="presentation_hover" >
               <br/>
                 <span><a href = "<?php echo base_url();?>pdf/tutorial/pdfgeneratorproduct.php?id=<?php echo $this->session->userdata('pitchdeckid');?>"  class="btn btn-danger btn-sm" id="pdf2" style="position:inherit">View As PDF</a></span>
                <br/><br/><button type="button" class="btn btn-danger btn-sm" id="template2" style='display:none;'>Download as PowerPoint</button>
              
          

                    </div>

            		
      

											
			</div></br></br>
            <div style="position:absolute; left:660px;
   top: 480px;">
            <ul class = "pager">
                <li class = "previous"><a href = "<?php echo base_url();?>Web/bmc">Previous</li></a>
                
            </ul>
            </div>
		</div>
     
    </header>

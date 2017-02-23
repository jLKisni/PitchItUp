<header>
        <div class="header-content">
            <div class="header-content-inner">

            	 <div class="col-sm-4 text-center">
                   
                        <img src = "<?php echo base_url();?>assets/img/process.png" style = " width: 1025px; height: 550px;  "> 

                <!-- <div class = "text-center"> -->
			<!-- <div style="position:absolute; left: 440px; top: 200px;" >
				<h3 style="color:black">Loading Presentation...</h3>
			</div> -->

			<div class="progress" style="position:absolute; left: 27px; top: 259px;">
				  <div class="progress-bar progress-bar-striped active" role="progressbar"
				   style="width:0%">
					
				  </div>
				  
			 </div>
			
		</div>
			</div>
		</div>
            </div>
        </div>
</header>



<script type="text/javascript">

$(function(){

	var progress = setInterval(function() {
    var $bar = $('.progress-bar');
    
    if ($bar.width()==1000) {
        clearInterval(progress);
        $('.progress-bar').removeClass('active');

        window.location.href = "<?php echo base_url();?>Web/Web/pitchdeck"
        
    } else {

        $bar.width($bar.width()+250
        	);

    }
    $bar.text($bar.width()/10+ "%");

}, 2000);


});

	
</script>
	
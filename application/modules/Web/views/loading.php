<header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class = "text-center">
			<p class = "text-center">loading presentation...</p>
			<div class="progress">
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
	
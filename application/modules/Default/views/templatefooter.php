<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/creative.min.js"></script>

    <script type="text/javascript">
    	$(function(){

    		$('#pres1').hover(function(){
    			$('#template2').hide('slow');
    			$('#template1').slideDown();
    		});

    		$('#pres2').hover(function(){
    			$('#template1').hide('slow');
    			$('#template2').slideDown();
    		});


    		// redirecting

    		$('#template1,#template2').click(function(){

    			window.location.href = '<?php echo base_url();?>Web/loading';
    		});


    	});
    </script>


</body>

</html>
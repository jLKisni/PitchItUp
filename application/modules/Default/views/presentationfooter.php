
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
      <!-- Create Idea Generation Board -->
    <script type="text/javascript">
  

    </script>
    <!--End Idea Generation Board-->

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/creative.min.js"></script>
    <!-- Javascript for template animation -->
    <script type="text/javascript">
    	$(function(){

    		$('#pres1').hover(function(){
    			$('#template2').hide('slow');
    			$('#template1').slideDown();
                $('#pdf1').slideDown();
    		});

    		$('#pres2').hover(function(){
    			$('#template1').hide('slow');
    			$('#template2').slideDown();
    		});


    		// redirecting

    		$('#template1').click(function(){

    			window.location.href = '<?php echo base_url();?>Web/Download';
    		});

            $('#template2').click(function(){

                window.location.href = '<?php echo base_url();?>Web/DownloadProduct';
            });


    	});
    </script>
    <!-- End Javascript for template animation -->

    <!-- Open Idea Generation Board -->
    <script type="text/javascript">

    $(document).ready(function(){

        $('#ideagen').click(function(){

                var problem = $('#problem').val();
                var people = $('#people').val();
                var behavior = $('#behavior').val();
                var solution = $('#solution').val();
                var idea_id = $('#ideagen_id').val();
                var pitchdeckid = $('#pitchdeckid').val();

                var ideagen = {
                    'problem': problem,
                    'people' : people,
                    'behavior':behavior,
                    'solution':solution,
                    'idea_id' : idea_id
                };

                    var url = "<?php echo base_url();?>Web/updatePitchDeck/updateIdeaGen/";
                    $.post(url,{data:ideagen},function(result){
                        console.log(result);
                    });

                    window.location.href = "<?php echo base_url()?>Presentation/validationboard/"+pitchdeckid;
                     
           
    
         });

    });


    </script>

    <!-- Close Idea Generation Board -->

    <!-- Open validation board -->

  <script type="text/javascript">

    $(function(){

        $('#validationboard').click(function(){

            var cust_pivot1 = $('#cust_pivot1').val();
            var cust_pivot2 = $('#cust_pivot2').val();
            var cust_pivot3 = $('#cust_pivot3').val();
            var cust_prob1 = $('#cust_prob1').val();
            var cust_prob2 = $('#cust_prob2').val();
            var cust_prob3 = $('#cust_prob3').val();
            var cust_solution1 = $('#cust_solution1').val();
            var cust_solution2 = $('#cust_solution2').val();
            var cust_solution3 = $('#cust_solution3').val();
            var risk_assump1 = $('#risk_assump1').val();
            var risk_assump2 = $('#risk_assump2').val();
            var risk_assump3 = $('#risk_assump3').val();
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
            var pitchdeckid = $('#pitchdeckid').val();

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
                'valid_id': valid_id

            };


            // console.log(validationboard);
            var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValidationBoard"; 

            $.post(url,{data:validationboard},function(result){
                   console.log(result);
            });
                window.location.href = "<?php echo base_url()?>Presentation/valueprop/"+pitchdeckid; 

           


        });

    });

  </script>

  <!-- Close validation board -->


  <!--Open Value proposition -->
<script type="text/javascript">

    $(function(){

        $('#valueprop').click(function(){


                var benefits = $('#benefits').val();
                var wants = $('#wants').val();
                var features = $('#features').val();
                var needs = $('#needs').val();
                var experience = $('#experience').val();
                var fears = $('#fears').val();

                var company = $('#company').val();
                var product = $('#product').val();
                var customer = $('#customer').val();
                var substitutes = $('#substitutes').val();

                var valueprop_id = $('#valueprop_id').val();
                var pitchdeckid = $('#pitchdeckid').val();

                var valueprop = {
                    'benefits':benefits,
                    'wants':wants,
                    'features':features,
                    'needs':needs,
                    'experience':experience,
                    'fears':fears,
                    'company':company,
                    'product':product,
                    'customer':customer,
                    'substitutes':substitutes,
                    'valueprop_id':valueprop_id
                };

                //console.log(valueprop);
                var url = "<?php echo base_url();?>Web/updatePitchDeck/updateValueProp"; 

                $.post(url,{data:valueprop},function(result){
                      console.log(result);
                });

                  window.location.href = "<?php echo base_url()?>Presentation/bmc/"+pitchdeckid;

          


            
        });

    });


</script>

  <!-- close Value proposition -->


  <!-- open bmc board -->
    <script type="text/javascript">

        $('#bmc').click(function(){

                    var resources = $('#resources').val();
                    var channels = $('#channels').val();
                    var structure = $('#structure').val();
                    var streams = $('#streams').val();
                    var partners = $('#partners').val();
                    var activities = $('#activities').val();
                    var proposition = $('#proposition').val();
                    var relationship = $('#relationship').val();
                    var segment = $('#segment').val();
                    var bmc_id = $('#bmc_id').val();
                    var pitchdeckid = $('#pitchdeckid').val();
                    var bmc = {
                        'partners': partners,
                        'activities' : activities,
                        'proposition': proposition,
                        'relationship': relationship,
                        'segment': segment,
                        'resources': resources,
                        'channels' : channels,
                        'structure': structure,
                        'streams': streams,
                        'bmc_id': bmc_id
                    };

                    // console.log(bmc);
                    var url = "<?php echo base_url();?>Web/updatePitchDeck/updateBMC";
                    $.post(url,{data:bmc},function(result){
                    console.log(result);
                    });
                    window.location.href = "<?php echo base_url()?>Presentation/Presentation/loading/"+pitchdeckid;



           
       
    });

    </script>
  
  <!--  close bmc-->


</body>

</html>
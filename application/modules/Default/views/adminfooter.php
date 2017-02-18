</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<!-- Bootstrap -->
 <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

 <script src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
 <script src="<?php echo base_url();?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script>



<script type="text/javascript">

  function deactivate(id){

    if(confirm('Are you sure you want to deactivate this account ? ')){
      
      var url = "<?php echo base_url();?>Web/Administrator/deactivateAccount/"+id;
      $.getJSON(url,function(result){
          alert('Successfully Deactivated');
          location.reload();
      });
    }else{
     
     location.reload();
    }
  }
</script>
</body>
</html>

                
<style type="text/css">
    
.border{
    border: 2px solid #a1a1a1;
    padding: 10px 40px; 
    background: #fff;
    width: 1000px;
    height: auto;
    border-radius: 25px;
   
}

</style>
<header style="color :#333;">
        <div class="header-content">
            <div class="header-content-inner">
            	<div class="border">   

                    <font color="#000"><b><h2 id = "text" class = "text-center"><b>History</b></h2></font></b>
                    <div class="box-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">

                          <thead>
                              <tr>
                                 <th style="text-align:center; color:#333;">Generated Date</th>
                                 <th style="text-align:center; color:#333;">Pitchdeck Name</th>
                                 <th style="text-align:center; color:#333;">Last Modified</th>
                                 <th style="text-align:center; color:#333;">Modified By</th>
                              </tr> 
                          </thead>
                          <tbody >

                               <?php if(!empty($historydetails)){?>
                               <?php foreach($historydetails as $row):?>
                               <tr>
                                    <td class="default" style="text-align:center; color:#333;"><?php echo date('M. d, Y',strtotime($row['timestamp']));?></td>
                                    <td class="default" style="text-align:center; color:#333;"><?php $word = $row['solution'];$arr = explode(' -',trim($word)); if((sizeof($arr)-1)>=0){echo ucfirst($arr[0]);}    ?></td>
                                    <td class="default" style="text-align:center; color:#333;"><?php echo date('M. d, Y',strtotime($row['timestamp']));?> at <?php $am = date('H',strtotime($row['hist_timestamp'])); $min = date('i',strtotime($row['hist_timestamp'])); $hour = $am % 12 ? $am % 12 : 12 ; $time = $am >= 12 ? 'pm':'am'; echo $hour.':'.$min.$time;?></td>
                                    <td class="default" style="text-align:center; color:#333;"><?php echo ucfirst($row['LastName']). ', '.ucfirst($row['FirstName']);?></td>
                                      
                               </tr>
                                <?php endforeach; }?>
                           </tbody>

                      </table>
                    </div>



            	

            	</div>
            		</div>
            		
            		
	            	
	</div>	
                	</div>	
                	<br/>	
				<!-- <p id = "text2" class = "text-center"><a href = "<?php echo base_url();?>Web/create" class = "btn btn-primary btn-xl page-scroll" role = "button">Create New</a><p> -->
				

            </div>
        </div>
    </header>


  <script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable();
} );
  </script>
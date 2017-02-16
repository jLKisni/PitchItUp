 <div style='margin-top:5%;'></div>
        <div class="container" >

            <center>

                <div class="row">

                    <div class="col-md-3"></div>
                    <div class="col-md-6">

                            <div class="panel panel-default">
                              <div class="panel-heading">Registration Form</div>
                              <div class="panel-body">
                                <?php if(isset($error_msg)){ echo $error_msg; }?>
                                <form role="form" action="<?php echo base_url();?>Auth/signupmember" method="post">


                                <div id="teamdetails">
                                    <!-- <center> <h4><b>User Information</b> </h4></center>
                                    <hr> -->
                                            <div class="form-group">
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Team Name</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder='Ex. Teambangan' name="teamname" required>
                                                </div>
                                                
                                              </div>
                                              <br><br><br>
                                              <div class="form-group" >
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Firstname</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="firstname" required>
                                                </div>
                                                
                                              </div>
                                              <br><br>
                                              <div class="form-group" >
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Lastname</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="lastname" required>
                                                </div>
                                                
                                              </div>
                                              <br><br>

                                              <div class="form-group" >
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Role</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <select class="form-control" name="role" required>
                                                      <option>Hustler</option>
                                                      <option>Hipster</option>
                                                      <option>Hacker</option>
                                                    </select>
                                                </div>
                                                
                                              </div>
                                              <br><br>

                                              <div class="form-group" >
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Username</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="username" required>
                                                </div>
                                                
                                              </div>
                                               <br><br>
                                              <div class="form-group" >
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Password</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>
                                                
                                              </div>
                                               <br><br>
                                              <div class="form-group" >
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Re-type password</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="password" class="form-control" name="repassword" required>
                                                </div>
                                                
                                              </div>

                                              <br><br>
                                 </div> <!-- teamdetails -->

                                         <!-- button      -->
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <!--   <button  class="btn btn-primary pull-left" style="padding:5px 15px; display:none;" id='prevbtn'>Previous</button>
                                              <button  class="btn btn-primary pull-right" style="padding:5px 15px" id="teamnext">Next </button> -->
                                              <button type="submit" class="btn btn-primary" style="padding:10px 55px;" id="submit">Submit </button>
                                        </div>
                                        <div class="col-md-3"></div>
                                         <!-- button      -->

                               


                            </form>

                            </div>

                    </div>
                    
                    <div class="col-md-3"></div>

                </div>

            </center>





    </div>
    
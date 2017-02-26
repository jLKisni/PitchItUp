 <div style='margin-top:5%;'></div>
        <div class="container" >

            <center>

                <div class="row">

                    <div class="col-md-3"></div>
                    <div class="col-md-6">

                            <div class="panel panel-default">
                              <div class="panel-heading">Registration Form</div>
                              <div class="panel-body">
                                <div class="alert alert-danger" role="alert" hidden id="message"></div>
                                <div id="teamdetails">
                                    <center> <h4><b>Team Information</b> </h4></center>
                                    <hr>
                                            <div class="form-group">
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Team Name</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control" id="teamname" placeholder='Ex. Teambangan'>
                                                </div>
                                                
                                              </div>
                                              <br><br>
                                              <div class="form-group" hidden>
                                                <div class="col-md-3" style='margin-top:5px;'>
                                                    <label for="exampleInputEmail1">Team Size</label>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" id="teamsize" value="3">
                                                </div>
                                                
                                              </div>

                                              <br><br>
                                 </div> <!-- teamdetails -->

                                        <div id="mem_container" hidden><!-- memberdetails -->


                                            <center> <h4><b>Team Members</b> </h4></center>
                                    

                                            <div id="team_members">

                                                

                                            </div>

                                            

                                        </div><!-- memberdetails -->
                                        
                                        <div id="userdetails" hidden><!-- memberdetails -->


                                            <center> <h4><b>User Information</b> </h4></center>
                                    
                                            <div class="alert alert-danger" role="alert" hidden id="message1">Registered name not on member list. Fuck your self.</div>
                                            <div id="userinfo">

                                                

                                            </div>

                                            

                                        </div><!-- memberdetails -->




                                         <!-- button      -->
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                              <button  class="btn btn-primary pull-left" style="padding:5px 15px; display:none;" id='prevbtn'>Previous</button>
                                              <button  class="btn btn-primary pull-left" style="padding:5px 15px; display:none;" id='prevbtn1'>Previous</button>
                                              <button  class="btn btn-primary pull-right" style="padding:5px 15px" id="teamnext">Next </button>
                                              <button  class="btn btn-primary pull-right" style="padding:5px 15px; display:none;" id="teamnext1">Next </button>
                                              <button type="submit" class="btn btn-primary pull-right" style="padding:5px 15px; display:none;" id="submit">Submit </button>
                                        </div>
                                        <div class="col-md-3"></div>
                                         <!-- button      -->

                               




                            </div>

                    </div>
                    
                    <div class="col-md-3"></div>

                </div>

            </center>




            <script type="text/javascript">

                $(function(){



                    // team name script
                    $('#teamname').on('change',function(){
                       var teamname = $('#teamname').val();

                       var url1 = "<?php echo base_url();?>Auth/getTeam/"+teamname;

                          $.getJSON(url1,function(data){
                            
                            if(data == 1){
                                
                                $('#message').show();
                                $('#message').html('Team "'+teamname+'" already existed. Please create another one!');
                                $('#teamname').val('');
                                $('#teamname').focus();

                            }
                          });

                    });
                    // team name script

                    $('#teamnext').click(function(){
                        $('#message').empty();
                        $('#message').hide();
                        var teamname = $('#teamname').val();
                        var teamsize = $('#teamsize').val();


                        if(teamname == "" && teamsize == ''){

                            alert('Please Fill UP inputs. ')
                            $('#teamname').empty();
                            $('#teamsize').empty();
                            $('#teamname').focus();

                        }
                        else{
                            $('#team_members').empty();
                            $('#mem_container').show();
                            $('#prevbtn').show();
                            $('#teamnext1').show();
                            $('#teamnext').hide();
                            $('#teamdetails').hide();
                            var i = 1;

                            do{

                                $('#team_members').append(
                                    '<hr>'+
                                    '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="exampleInputEmail1">First Name</label>'+
                                                '</div>'+
                                                
                                                '<div class="col-md-8">'+
                                                    '<input type="email" class="form-control" id="firstname'+i+'">'+
                                                '</div>'+
                                                
                                                '</div>'+
                                              '<br><br>'+
                                              '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="exampleInputEmail1">Last Name</label>'+
                                                '</div>'+
                                                
                                                '<div class="col-md-8">'+
                                                    '<input type="email" class="form-control" id="lastname'+i+'">'+
                                                '</div>'+
                                                
                                              '</div>'+

                                              '<br>'+
                                              '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="exampleInputEmail1">Role</label>'+
                                                '</div>'+

                                               '<div class="col-md-8">'+
                                                    '<select class="form-control" id="roles'+i+'">'+
                                                        '<option selected disabled>--Please Select a role--</option>'+
                                                        '<option>Hustler</option>'+
                                                        '<option>Hipster</option>'+
                                                        '<option>Hacker</option>'+
                                                    '</select>'+
                                                '</div>'+
                                                
                                              '</div>'+

                                              '<br><br>'

                                );



                                i++;
                            }while(i<=teamsize);



                            $('#prevbtn').click(function(){

                                    $('#mem_container').hide();
                                    $('#teamdetails').show();
                                    $('#teamnext1').hide();
                                    $('#teamnext').show();
                                    $('#prevbtn').hide();

                            });

                            $('#prevbtn1').click(function(){

                                    $('#mem_container').show();
                                    $('#teamdetails').hide();
                                    $('#userdetails').hide();

                                    $('#prevbtn1').hide();
                                    $('#prevbtn').show();

                                    $('#teamnext1').hide();
                                    $('#teamnext').show();
                                    $('#submit').hide();
                                   
                            });

                            $('#teamnext1').click(function(){

                                    $('#mem_container').hide();
                                    $('#teamdetails').hide();
                                    $('#teamnext1').hide();
                                    $('#teamnext').hide();
                                    $('#prevbtn').hide();
                                    $('#prevbtn1').show();
                                    $('#userdetails').show();
                                    $('#submit').show();
                                    $('#userinfo').empty();


                                    $('#userinfo').append(

                                            '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="firstname">Firstname</label>'+
                                                '</div>'+
                                                
                                               ' <div class="col-md-8">'+
                                                    '<input type="text" class="form-control" id="firstname">'+
                                                '</div>'+
                                                
                                              '</div>'+
                                              '<br><br>'+
                                              '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="lastname">Lastname</label>'+
                                                '</div>'+
                                                
                                                '<div class="col-md-8">'+
                                                    '<input type="text" class="form-control" id="lastname" >'+
                                                '</div>'+
                                                
                                              '</div>'+

                                              '<br><br>'+

                                              '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="role">Role</label>'+
                                                '</div>'+
                                                
                                                '<div class="col-md-8">'+
                                                    '<select class="form-control" id="role">'+
                                                        
                                                    '</select>'+
                                                '</div>'+
                                                
                                              '</div>'+

                                              '<br><br>'+

                                              '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="username">Username</label>'+
                                                '</div>'+
                                                
                                               ' <div class="col-md-8">'+
                                                    '<input type="text" class="form-control" id="username" >'+
                                                '</div>'+
                                                
                                              '</div>'+
                                              '<br><br>'+
                                              '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="password">Password</label>'+
                                                '</div>'+
                                                
                                                '<div class="col-md-8">'+
                                                    '<input type="password" class="form-control" id="password" >'+
                                                '</div>'+
                                                
                                              '</div>'+

                                              '<br><br>'+
                                              '<div class="form-group">'+
                                                '<div class="col-md-3" style="margin-top:5px;">'+
                                                    '<label for="repassword">Re-enter password</label>'+
                                                '</div>'+
                                                
                                                '<div class="col-md-8">'+
                                                    '<input type="password" class="form-control" id="repassword" >'+
                                                '</div>'+
                                                
                                              '</div>'+

                                              '<br><br>'
                                        );

                                 $('#lastname').on('change',function(){
                                    $('#role').empty();
                                    var firstname = $('#firstname').val();
                                    var lastname = $('#lastname').val();
                                        for(var x = 1; x<=$('#teamsize').val(); x++){


                                            if($('#firstname'+x).val() == firstname && $('#lastname').val() == lastname){
                                                $('#role').append(
                                                    '<option>'+$('#roles'+x).val()+'</option>'
                                                    );

                                            }
                                        }


                                    });


                            });

                        }

                    });


                  

                });

            </script>

            <!-- submission -->

            <script type="text/javascript">

                $('#submit').click(function(){


                    var teamname = $('#teamname').val();
                    var teamsize = $('#teamsize').val();
                    // var teamfirstname = new Array();
                    // var teamlastname = new Array();
                    // var teamrole = new Array();


                    // for (var i = 1; i<=teamsize; i++){

                    //    teamfirstname[i] = 'firstname'+i; 
                    //    teamlastname[i] = 'lastname'+i;
                    //    teamrole[i] = 'role'+i;  
                    // }

                    // var teamdata
                    // for(var x = 1; x<=teamsize; i++){


                    // }


                    var tfirstname1 = $('#firstname1').val();
                    var tfirstname2 = $('#firstname2').val();
                    var tfirstname3 = $('#firstname3').val();

                    var tlastname1 = $('#lastname1').val();
                    var tlastname2 = $('#lastname2').val();
                    var tlastname3 = $('#lastname3').val();

                    var trole1 = $('#roles1').val();
                    var trole2 = $('#roles2').val();
                    var trole3 = $('#roles3').val();
                    
               
                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var role = $('#role').val();

                    var password = $('#password').val();
                    var repass = $('#repassword').val();

                    var registration = {
                        'teamname' : teamname,
                        'tfirstname1' : tfirstname1,
                        'tfirstname2' : tfirstname2,
                        'tfirstname3' : tfirstname3,
                        'tlastname1' : tlastname1,
                        'tlastname2' : tlastname2,
                        'tlastname3' : tlastname3,
                        'trole1' : trole1,
                        'trole2' : trole2,
                        'trole3' : trole3,
                        'firstname' : lastname,
                        'lastname' : firstname,
                        'role' : role,
                        'username':$('#username').val(),
                        'password':password

                    };


                    
                    if(password != repass){
                        alert('Password and Confirm Password did not matched');
                        $('#password').val('');
                        $('#password').focus();
                        $('#repassword').val('');
                    }
                    else{

                        var url = '<?php echo base_url();?>Auth/signup';

                        $.post(url,{data:registration},function(result){
                            alert(result);

                            if(result == 'Successfully Registered'){
                                window.location.href = "<?php echo base_url();?>Web/login";    
                            }
                            else{
                                location.reload();
                            }
                        });


                    }


                    

                
                });

            </script>

            <!-- submission -->



    </div>
    
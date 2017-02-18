<!-- Right side column. Contains the navbar and content of the page -->
          <aside class="right-side">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                  <h1>
                    Welcome, Administrator
                     
                  </h1>
                  <ol class="breadcrumb">
                      <li><a href="<?php echo base_url();?>Web/Administrator"><i class="fa fa-home"></i> Home</a></li>
                      <li class="active"><?php echo $title;?></li>
                  </ol>
              </section>

              <!-- Main content -->
              <section class="content">

                <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Registered Users Accounts</h3>

                                </div><!-- /.box-header -->

                                <div class="box-body table-responsive">

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Teamname</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Role</th>
                                                <th>Username</th>
                                                <th>Last Login</th>
                                                <th>Status</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php if(!empty($userdetails)){?>
                                          <?php foreach($userdetails as $row):?>
                                            <tr>
                                                <td><?php echo ucfirst($row->team_name);?></td>
                                                <td><?php echo ucfirst($row->FirstName);?></td>
                                                <td><?php echo ucfirst($row->LastName);?></td>
                                                <td><?php echo ucfirst($row->role);?></td>
                                                <td><?php echo $row->username;?></td>
                                                <td><?php $time = date('H',strtotime($row->timestamp)) >= 12 ? 'pm':'am'; echo date('M. d Y ',strtotime($row->timestamp)).' at  '.date('h:i',strtotime($row->timestamp)). ' ' .$time;?></td>
                                                <td><?php if($row->member_status == 0){echo 'Active';}else{echo 'Deactivated';}?></td>
                                                <td><span style="padding-left:3px;"><a href="#" onclick="deactivate(<?php echo $row->mem_id;?>)" style="color:red"><i class="fa fa-edit"></i> Deactivate</a></span></td>
                                            </tr>
                                          <?php endforeach;}?>
                                        </tbody>

                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

              </section><!-- /.content -->
          </aside><!-- /.right-side -->


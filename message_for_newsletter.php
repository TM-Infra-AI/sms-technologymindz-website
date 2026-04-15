
<?php 
include_once('header.php')
?>    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Pending Message</li>
        <!-- Breadcrumb Menu-->
        <!-- <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="index-2.html"><i class="icon-graph"></i> &nbsp;Pending Numbers</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li> -->
      </ol>

      <div class="container-fluid">

        <div class="animated fadeIn">
          <div class="card">
            <?php
            $query = mysqli_query($con,"select count(*) from tapp_sent_msg") ;
            $i = 1;
      while($row = mysqli_fetch_array($query) )
      {
      $count=$row[0];
      }
            ?>
            <div class="card-header">
             <i class="icon-people"></i> Scheduled Messages
              
            </div>

            <div class="card-body">

               <div class="row">

            <div class="col-lg-12"> 
              <div class="add-btn-group-padding">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form"><i class="fa fa-plus fa-sm"></i> Schedule message</button>
              </div>
            </div>
            </div>
              
              <table class="table table-striped table-bordered datatable" id="dataTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Message</th>
                    <th>Scheduled For</th>
                     <th>Action</th>
                      
                   
                  </tr>
                </thead>
                <tbody>
                    <?php 
        $query = mysqli_query($con,"select * from tapp_message_newsletter") ;
                $i = 1;
        while($row = mysqli_fetch_array($query) ) {?> 

                  <tr id="tr" class="tr<?php echo $row['id'];?>">
                      <td><?php echo $i; ?></td>
                          
                          <td><?php echo $row['message']; ?></td>
                          <td><?php echo $row['message_date']; ?></td>
                          
                    <!-- ss -->
                   <td>
                  
                      <a class="btn btn-info" href="#edit_form<?php echo $row['id']; ?>" data-toggle="modal">
              <i class="fa fa-edit "></i>
            </a>
                      <a class="btn btn-danger" href="#delete<?php echo $row['id']; ?>" data-toggle="modal">
              <i class="fa fa-trash-o "></i>

            </a>
                    </td> 
                  </tr>
<div class="modal fade" id="edit_form<?php echo $row['id']; ?>">
    <div class="modal-dialog">
                  <form class="no-margin"  method="post" onSubmit="return myFunction()"  action="update_shedule_message.php" name="client_record" enctype="multipart/form-data" >

      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title text-center">Edit Message</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>

        <div class="modal-body">
           
            <div class="form-group">
            <label class="control-label">Message</label>
               <textarea class="form-control" rows="3" name="message" data-control="exname-control" maxlength="160" placeholder="Write your Message Here!" required ><?php echo $row['message']; ?></textarea>

                    <div id="cont<?php echo $row['id']; ?>"></div>
            </div>
               <div class="form-group">
            <label class="control-label">Date Time</label>
            
            <div class="controls input-append date form_datetime" data-link-field="dtp_input1" style="margin-bottom: -50px;">
            <input size="16" name="msg_date" type="text" value="<?php echo $row['message_date']; ?>" class="form-control input-sm parsley-validated" readonly><span style="visibility:hidden; margin-top:-5px" class="add-on"><i class="icon-th"></i></span>
            
            </div>
            <input type="hidden" id="dtp_input1" value="" /><br/>            
            </div>
            
            
           </div>
        <div class="modal-footer">
                  <button type="submit" class="btn btn-danger btn-sm check<?php echo $row['id']; ?>">Submit</button> 

          <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
          </div>
      </div>
      <!-- /.modal-content --> 
                </form>

    </div>
    <!-- /.modal-dialog --> 
  </div>
  <!-- /.modal --> 
   <!--Modal-->
  <div class="modal fade" id="delete<?php echo $row['id']; ?>">
    <div class="modal-dialog">
                      <form action="delete_shedule_msg.php?id=<?php echo $row['id']; ?>" method="post">

      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center">Remove this Message?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>

        <div class="modal-body">
            <div class="form-group" style="text-align: center;">
              <label for="folderName">Are you sure you want to remove this Message? This action can't be undone.</label>
            </div>
        </div>

        <div style="text-align:center;" class="modal-footer">
                  <button type="submit" class="btn btn-danger btn-sm">Confirm</button>

          <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
          </div>
      </div>
      <!-- /.modal-content --> 
                        </form>
    </div>
    <!-- /.modal-dialog --> 
  </div>

                  <?php $i++; }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>
  </div>

    <div class="modal fade" id="form">
    <div class="modal-dialog">
                  <form class="no-margin"  method="post" onSubmit="return myFunction()"  action="get_message_newsletter.php" name="client_record" enctype="multipart/form-data" >

      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title text-center">Send Message</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>

        <div class="modal-body">
          <!--  <div class="form-group">
             <label class="control-label">URL</label>
             <input type="url"  name="url" class="form-control input-sm parsley-validated" placeholder="Write Url Here!">
                <span style="color:#FF0000;" id="show"></span> 
                </div>
            -->
            <div class="form-group">
            <label class="control-label">Message</label>
                        <input type="hidden" id="demo1" name="message" required placeholder="Write your Message Here!">
                         <textarea class="form-control" rows="3" name="message" data-control="exname-control" maxlength="160" placeholder="Write your Message Here!" required ><?php echo $row['message']; ?></textarea>

                    <div id="container"></div>

            </div>
           
             <div class="form-group">
            <label class="control-label">Date Time</label>
            
            <div class="controls input-append date form_datetime" data-link-field="dtp_input1" style="margin-bottom: -50px;">
            <input size="16" name="msg_date" type="text" value="<?php echo date('Y-m-d h:m'); ?>" class="form-control input-sm parsley-validated" readonly><span style="visibility:hidden; margin-top:-5px" class="add-on"><i class="icon-th"></i></span>
            
            </div>
            <input type="hidden" id="dtp_input1" value="" /><br/>            
            </div>
            
            </div>
       
        <div class="modal-footer">
        <button style="margin-left: 0px;" id="draft_btn" class="btn btn-success" name="type" type="submit" value="draft"><i class="fa fa-check fa-lg"></i> Save Draft </button>
        <button style="margin-left: 0px; " id="send_btn" class="btn btn-success"   name="type" type="submit" value="send"><i class="fa fa-check fa-lg"></i> Send Now</button>
     <!--   <button style="margin-left: 0px;" id="scheduled_btn" class="btn btn-success" name="type" type="submit" value="scheduled"><i class="fa fa-check fa-lg"></i> Scheduled </button>-->
        
        <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
          </div>
      </div>
      <!-- /.modal-content --> 
                </form>

    </div>
    <!-- /.modal-dialog --> 
  </div>

  <?php 
include_once('footer.php')
?>
<!-- Plugins and scripts required by this views -->
  <script src="vendors/js/jquery.dataTables.min.js"></script>
  <script src="vendors/js/dataTables.bootstrap4.min.js"></script>

  <!-- Custom scripts required by this view -->
  <script src="js/views/tables.js"></script>

<?php 
include_once('header.php')
?>    <!-- Main content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
		  $( document ).ready(function() {


var table = $('#dataTable').DataTable();

// Sort by columns 1 and 2 and redraw
table
    .order( [ 3, 'desc' ] )
    .draw();
 });
</script>
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Pending Emails</li>
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
            $query = mysqli_query($con,"select count(*) from tapp_sent_emails") ;
            $i = 1;
      while($row = mysqli_fetch_array($query) )
      {
      $count=$row[0];
      }
            ?>
            <div class="card-header">
              <i class="icon-people"></i> Pending Mails<span>(<?php echo $count; ?>)</span>
              <div class="card-actions">
              
              </div>
            </div>

            <div class="card-body">
              
              <table class="table table-striped table-bordered datatable table-responsive-sm" id="dataTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date time</th>
                    <th>Delete</th>
                    
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
       /*  $query = mysqli_query($con,"truncate table tapp_sent_msg") ; */
        //$query = mysqli_query($con,"select * from tapp_sent_email") ;
		
if($_SESSION['user_type'] == "user")
{
$query = mysqli_query($con,"select * from tapp_sent_email where email='".$_SESSION['user']."'") ;	 
}
else
{

        $query = mysqli_query($con,"select * from tapp_sent_email") ;

} 
		
		
                $i = 1;
        while($row = mysqli_fetch_array($query) )
        {
        ?>
                  <tr id="tr" class="tr<?php echo $row['id'];?>">
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['message']; ?></td>
                          <td><?php echo $row['date_time']; ?></td>
                           <td nowrap="nowrap">  <a href="delete_pending_mails.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')" class="btn-danger btn-sm" >Delete
               </a></td>
                    <!-- ss -->
                    <!-- <td>
                      <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
                      <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
                      <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>

            </a>
                    </td> -->
                  </tr>
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

  <?php 
include_once('footer.php')
?>
<!-- Plugins and scripts required by this views -->
  <script src="vendors/js/jquery.dataTables.min.js"></script>
  <script src="vendors/js/dataTables.bootstrap4.min.js"></script>

  <!-- Custom scripts required by this view -->
  <script src="js/views/tables.js"></script>

<?php 

include_once('header.php')

?>    <!-- Main content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
		  $( document ).ready(function() {


var table = $('#dataTable').DataTable();

// Sort by columns 1 and 2 and redraw
table
    .order( [ 7, 'desc' ] )
    .draw();
 });
</script>
    <main class="main">



      <!-- Breadcrumb -->

      <ol class="breadcrumb">

        <li class="breadcrumb-item">Home</li>

        <li class="breadcrumb-item"><a href="#">Admin</a></li>

        <li class="breadcrumb-item active"> Contact</li>

      </ol>



      <div class="container-fluid">



        <div class="animated fadeIn">

          <div class="card">

            <div class="card-header">

              <i class="icon-envelope-open"></i> Contact

              <div class="card-actions">

             

              </div>


              <div class="modal fade" id="add_form<?php echo $row['id']; ?>">



    <div class="modal-dialog">



                 <form class="no-margin" id="formValidate2" data-validate="parsley" method="post" action="add_new_client.php" name="client_record" enctype="multipart/form-data" > 

      
      <div class="modal-content">



        <div class="modal-header">



          



          <h4 class="modal-title text-center">Add Contact</h4>

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>



        </div>







        <div class="modal-body">


<div class="form-group">
            <label class="control-label">Name</label>
          <input type="text" placeholder="Name" value="" required class="form-control "  name="first_name">
           </div>
		   
		   
		   <div class="form-group">
            <label class="control-label">Email</label>
          <input type="email" placeholder="Email" value="" required class="form-control  "  name="email">
           </div>
		   
		   
            <div class="form-group">



             <label class="control-label">Mobile Number</label>
           <input type="number" name="mobile" placeholder="Enter Mobile Number" value ="" class="form-control input-sm parsley-validated" required>
            </div>



            



        

           

            

            <div class="form-group">
            <label class="control-label">Address</label>
          <input type="text" placeholder="Address" value="" required class="form-control  "  name="address">
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
  
  
  
  
  
  <div class="modal fade" id="add_bulk">



    <div class="modal-dialog">



                 <form class="no-margin" id="formValidate2" data-validate="parsley" method="post" action="import_clients.php" name="client_record" enctype="multipart/form-data" > 

      
      <div class="modal-content">



        <div class="modal-header">



          



          <h4 class="modal-title text-center">Imports Contact</h4>

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>



        </div>







        <div class="modal-body">



            <div class="form-group">



             <label class="control-label">Select File</label>



            <input type="file" name="file" class="form-control " required>



            </div>



          



           

         

          

             

           





           </div>



        <div class="modal-footer">



                  <button type="submit" class="btn btn-danger btn-sm ">Submit</button>







          <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>



          </div>

      </div>



      <!-- /.modal-content -->



                </form>







    </div>



    <!-- /.modal-dialog -->



  </div>

            </div>



            <div class="card-body">

         <div class="container">

         



<div class="row">

                  

                   

                   <div class="col-md-9">

                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#add_form ">Add New Contact
               </button>
              <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#add_bulk ">Import excel
               </button>
			    <a href="upload/sample_contact.xlsx" download type="button" class="btn btn-primary"  data-toggle="" data-target="">Sample file
               </a>

                  </div>
 <div class="col-md-3" >

                    <a href="export_clients.php?year=<?php echo $year; ?>&month=<?php echo $month; ?>"><button type="button" value="Export Data" class="btn btn-primary btn-md" style="float:right"> Export Data</button>

                    </a>

                  </div>
                  </div>  <br>
 






</div>



<!-- <div class="row">

           

                <div class="col-sm-1 sent-message-form-column">

                    <a href="export_leads.php?year=<?php echo $year; ?>&month=<?php echo $month; ?>"><button type="button" value="Export Data" class="btn btn-primary btn-md"> Export Data</button></a>

                  </div>

                  <br><br>

            

           </div>  --> 

           <?php







?>
<div style="overflow:auto">

              <table class="table table-striped table-bordered datatable table-responsive-sm" id="dataTable">

                <thead>

                  <tr>

                     <th>Mobile Number</th>

                    <th>Name</th>

                    

                    <th>Email</th>
					<th>Address</th> 



<th>Date</th>


                    <!-- <th>Twilio Number</th>

                    <th>Message</th>

                    <th>Date/time</th> -->
                    <th>Action</th>

                  </tr>

                </thead>

                <tbody>

                   <?php



				
				  $qry = mysqli_query($con,"SELECT *   FROM tapp_tbl_clients GROUP BY sender ORDER BY max(date_time) DESC");
			



            while($data1=mysqli_fetch_array($qry))



        {



?>

                  <tr id="tr" class="tr<?php echo $row['id'];?>">

                   <td><?php echo $data1['sender']; ?></td>

                    <td><?php echo $data1['first_name']." ".$row['last_name'];  ?></td>

                    <td><?php echo $data1['email']; ?></td>

                    <td><?php echo $data1['address']; ?></td>

                    
                  
                    <td><?php echo $data1['date_time']; ?></td>
                   



                   <!--  <td><?php echo $data1['twilio_num']; ?></td>

                    <td><?php echo $data1['body']; ?></td>



                    <td><?php echo $data1['date_time']; ?></td> -->
                    <td> <a class="btn btn-info action-btn" href="#edit_form<?php echo $data1['id']; ?>"  data-toggle="modal" >

                <i class="fa fa-edit "></i>

              </a>

                      <a class="btn btn-danger action-btn" href="#delete<?php echo $data1['id']; ?>"  data-toggle="modal" >

                <i class="fa fa-trash-o "></i>

              </a></td>

                  </tr>

                  <div class="modal fade" id="edit_form<?php echo $data1['id']; ?>">



    <div class="modal-dialog">



                 <form class="no-margin" id="formValidate2" data-validate="parsley" method="post" action="update_client.php" name="client_record" enctype="multipart/form-data" > 

                  <input type="hidden" name="" value="<?php echo $data1['id'] ?>">







      <div class="modal-content">



        <div class="modal-header">



          



          <h4 class="modal-title text-center">Edit Contact</h4>

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>



        </div>







       <div class="modal-body">



            <div class="form-group">



             <label class="control-label">Mobile Number</label>



            <input type="text" name="mobile" placeholder="Enter Mobile Number" value ="<?php echo $data1['sender'];?>" class="form-control input-sm parsley-validated" required>



            </div>



            <div class="form-group">
            <label class="control-label"> Name</label>
          <input type="text" placeholder="Name" value="<?php echo $data1['first_name']; ?>" required class="form-control "  name="first_name">
           </div>



           

           <div class="form-group">
            <label class="control-label">Email</label>
          <input type="email" placeholder="Email" value="<?php echo $data1['email']; ?>" required class="form-control  "  name="email">
           </div>

        

        

           

            

            <div class="form-group">
            <label class="control-label">Address</label>
          <input type="text" placeholder="Address"  required class="form-control  " value="<?php echo $data1['address']; ?>" name="address">
           </div> 





		   
		
		   
		   
		  
		   
		   
		 


<input type="hidden" name="id" value="<?php echo $data1['id'];?>">


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

 <!--Modal-->



  <div class="modal fade" id="delete<?php echo $data1['id']; ?>">



    <div class="modal-dialog">



                      <form action="delete_client.php" method="post">


<input type="hidden" name="id" value="<?php echo $data1['id']; ?>">




      <div class="modal-content">



        <div class="modal-header">



          



          <h4 class="modal-title text-center">Remove this Contact?</h4>

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>



        </div>







        <div class="modal-body">



            <div class="form-group" style="text-align: center;">



              <label for="folderName">Are you sure you want to remove this Contact? This action can't be undone.</label>



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

                  <?php



    }



     ?>

                </tbody>

              </table>
</div>
           





            </div>

          </div>

        </div>



      </div>

      <!-- /.conainer-fluid -->

    </main>



    <!--  -->



  </div>



  <?php 

include_once('footer.php')

?>

<!-- Plugins and scripts required by this views -->

  <script src="vendors/js/jquery.dataTables.min.js"></script>

  <script src="vendors/js/dataTables.bootstrap4.min.js"></script>



  <!-- Custom scripts required by this view -->

  <script src="js/views/tables.js"></script>


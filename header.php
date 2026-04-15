<?php session_start();
if(!isset($_SESSION['user']))

{

 header("location:index.php");

}





include("connection.php");



$user_email=$_SESSION['user'];

$query = mysqli_query($con,"select * from tapp_user_login where email='".$user_email."'") ;

while($row = mysqli_fetch_array($query) ) {



$user=$row['user_name'];







$email=$row['email'];



$profile_image=$row['profile_image'];







 }


$per_day_receive = mysqli_query($con,"SELECT * FROM tapp_msg_receive where date_time=date(now())");




  ?>





<!DOCTYPE html>

<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">

  

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="SMS Application">

  <meta name="author" content="Łukasz Holeczek">

  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard,Vue,Vue.js,React,React.js">

  <link rel="shortcut icon" href="img/favicon.png">

  <title> SMS APP</title>



  <!-- Icons -->

  <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/fonts/fontawesome-webfont3e6e.woff" rel="stylesheet">

  <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">



  <!-- Main styles for this application -->

  <link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet">


  <!-- Styles required by this views -->

  <link href="vendors/css/daterangepicker.min.css" rel="stylesheet">

  <link href="vendors/css/gauge.min.css" rel="stylesheet">

  <link href="vendors/css/toastr.min.css" rel="stylesheet">

  <link href="vendors/css/dataTables.bootstrap4.min.css" rel="stylesheet">

 <!-- custom stylesheet for all -->

   <link href="css/custom-style.css" rel="stylesheet">

   <!-- Begin emoji-picker Stylesheets -->



  <link href="lib/css/nanoscroller.css" rel="stylesheet">



  <link href="lib/css/emoji.css" rel="stylesheet">

<style type="text/css">

  .avatar-img-margin {

    margin-right: 80px !important;

}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
		  $( document ).ready(function() {

setTimeout(function() { $("#toast-container").hide(); }, 4000);
 });
</script>
</head>



<!-- BODY options, add following classes to body to change options



// Header options

1. '.header-fixed'					- Fixed Header



// Brand options

1. '.brand-minimized'       - Minimized brand (Only symbol)



// Sidebar options

1. '.sidebar-fixed'					- Fixed Sidebar

2. '.sidebar-hidden'				- Hidden Sidebar

3. '.sidebar-off-canvas'		- Off Canvas Sidebar

4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)

5. '.sidebar-compact'			  - Compact Sidebar



// Aside options

1. '.aside-menu-fixed'			- Fixed Aside Menu

2. '.aside-menu-hidden'			- Hidden Aside Menu

3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu



// Breadcrumb options

1. '.breadcrumb-fixed'			- Fixed Breadcrumb



// Footer options

1. '.footer-fixed'					- Fixed footer



-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

  <header class="app-header navbar">

    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">

      <span class="navbar-toggler-icon"></span>

    </button>

    <a class="navbar-brand" href="#"></a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none h-100 b-r-1 px-3" type="button">

      <span class="navbar-toggler-icon"></span>

    </button>

    <ul class="nav navbar-nav d-md-down-none mr-auto">



      <!--form class="form-inline px-4">

        <i class="fa fa-search"></i>

        <input class="form-control" type="text" placeholder="Search...">

      </form-->

    </ul>

    <ul class="nav navbar-nav ml-auto">

      

      

      <!-- <li class="nav-item dropdown d-md-down-none">

        <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

          <i class="icon-envelope-letter"></i><span class="badge badge-pill badge-info">7</span>

        </a>

       </li> -->

      <li class="nav-item dropdown ">

        <a class="nav-link nav-pill avatar avatar-img-margin" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

          <img src="img/avatars/<?php echo $profile_image ?>" class="img-avatar" alt="">

          <!-- <span class="badge badge-pill badge-danger">9</span> -->

          <span class="profile-name"><strong><?php echo $user; ?></strong></span>

        </a>



        <div class="dropdown-menu dropdown-menu-right">

          <div class="dropdown-header text-center">

            <strong>Account</strong>

          </div>

         

          <a class="dropdown-item" href="user_list.php"><i class="fa fa-user"></i> My Profile</a>
		  
         

          <a class="dropdown-item" href="logout.php"><i class="fa fa-lock"></i> Logout</a>

        </div>

      </li>

      <li class="profile-name"> </li>

      <!-- <button class="navbar-toggler aside-menu-toggler" type="button">

        <span class="navbar-toggler-icon"></span>

      </button> -->



    </ul>

  </header>

  <div id="toast-container" class="toast-top-right">
<?php if(isset($_SESSION['failure_message']))
{ ?>
  <div class="toast toast-error ">
    
<?php echo $_SESSION['failure_message']; unset($_SESSION['failure_message']);
?>
  </div>
<?php } ?>
<?php if(isset($_SESSION['flash_message']))
{ ?>
  <div class="toast toast-success ">
    
<?php echo $_SESSION['flash_message']; unset($_SESSION['flash_message']);
?>
  </div>
<?php } ?>
 
</div>

    <div class="app-body">

    <div class="sidebar">

      <nav class="sidebar-nav">

        <ul class="nav">

          <!-- <li class="nav-title text-center">

            <span>Dashboard</span>

          </li> -->

          <li class="nav-item">

            <a class="nav-link" href="dashboard.php"><i class="icon-speedometer"></i> Dashboard </a>

          </li>

          </li>


		  
		  
 <li class="nav-item">

            <a class="nav-link" href="clients.php"><i class="icon-people"></i> Contacts</a>

          </li>
          <li class="nav-item nav-dropdown">

            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-envelope"></i> Message</a>

            <ul class="nav-dropdown-items">

              <li class="nav-item">

                <a class="nav-link" href="single_message.php"><i class="icon-envelope-open"></i> Single Message</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="bulk_sms.php"><i class="icon-envelope-letter"></i> Bulk Message</a>

              </li>

               <li class="nav-item">

                <a class="nav-link" href="recieve_messages.php"><i class="fa fa-inbox"></i> Inbox</a>

              </li>

             
 <li class="nav-item">

            <a class="nav-link" href="sent_messages.php"><i class="icon-paper-plane"></i> Outbox</a>

          </li>
            

            </ul>

          </li>
		  
	<!-- 	  <li class="nav-item nav-dropdown">

            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-phone"></i>Voice</a>

            <ul class="nav-dropdown-items">

          <li class="nav-item">

            <a class="nav-link" href="new_call.php"><i class="icon-phone"></i>Plivo Call</a>

          </li>
		  <li class="nav-item">

            <a class="nav-link" href="voice_broadcast.php"><i class="icon-call-out"></i> Voice Broadcast</a>

          </li>
          </ul>
        

        </li> -->

  
 <li class="nav-item">

            <a class="nav-link" href="blacklist_numbers.php"><i class="icon-people"></i> BlackList</a>

          </li>
          
 <li class="nav-item">

            <a class="nav-link" href="add_group_numbers.php"><i class="icon-people"></i> Groups</a>

          </li>
     
        
          
		    <li class="nav-item">

            <a class="nav-link" href="templates.php"><i class="icon-people"></i> Template Messages</a>

          </li>
          



              <!--         <li class="nav-item nav-dropdown">

            <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-database fa-lg"></i> Database</a>

            <ul class="nav-dropdown-items">

              <li class="nav-item">

                <a class="nav-link" href="clear_database.php"><i class="fa fa-minus"></i>Clear Database</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="backup_database.php"><i class="fa fa-plus"></i>Backup Database</a>

              </li>



            </ul>

          </li> -->

           <li class="nav-item nav-dropdown">

            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-chart"></i> Reports</a>

            <ul class="nav-dropdown-items">

		  
		  

           
		 

          

              <li class="nav-item">

                <a class="nav-link" href="failed_numbers.php"><i class="fa fa-exclamation-triangle fa-lg"></i> Failed Messages</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="pending_numbers.php"><i class="icon-clock"></i> Pending Messages</a>

              </li>    

		  

            </ul>

          </li>  

           <li class="nav-item nav-dropdown">

            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-settings"></i> Settings</a>

            <ul class="nav-dropdown-items">

               <li class="nav-item">

                  <a class="nav-link" href="add_plivo_account.php"><i class="icon-link"></i> Add  Account</a>

                </li>

                  <li class="nav-item">

                  <a class="nav-link" href="add_plivo_number.php"><i class="icon-call-end"></i> Add  Number</a>

                </li>
                
               

            </ul>

          </li>

     

       </ul>

      </nav>

      <button class="sidebar-minimizer brand-minimizer" type="button"></button>

    </div>
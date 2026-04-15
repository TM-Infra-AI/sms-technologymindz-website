<?php 
include_once('header.php')
?>

<script>

function get_template_message(str) {
	
    if (str.length == 0) { 
        document.getElementById("showtemplate").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showtemplate").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "get_template.php?q=" + str, true);
        xmlhttp.send();
    }
}
function change_message_type(elem)
{
	
	if(elem == 'custom')
	{
		
		document.getElementById('custome_messgae').style.display='block';
		document.getElementById('template_message').style.display='none';
	}
	if(elem == 'template')
	{
		
		document.getElementById('custome_messgae').style.display='none';
		document.getElementById('template_message').style.display='block';
	}
}
</script>

    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Email Center</a></li>
        <li class="breadcrumb-item active">Single Mail</li>
        <!-- Breadcrumb Menu-->
        
      </ol>
       <div class="container-fluid">
        <div class="animated fadeIn"> 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-edit"></i>Compose Mail
                  
                </div>
                <div class="card-body col-lg-7">
                  <form class="form-horizontal" id="formValidate2" data-validate="parsley" method="post" action="get_single_email.php" name="client_record" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="col-form-label" for="prependedInput">Email</label>
                      <div class="controls">
                        <div class="input-prepend input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input id="prependedInput" class="form-control" name="email" size="16" type="email" placeholder="Write Email Here!" list="listid" required>

                         
                      </div>
                       
                      </div>
                    </div>
                    <div class="form-group emoji-contant-align">
                      <label class="col-form-label" for="appendedPrependedInput">Message</label>
                      <div class="controls"> 
                        <div class="input-prepend input-group">
                         <select class="form-control" name="message_type" onchange="change_message_type(this.value)" >
						 <option value="custom">Custome message</option>
						 <option value="template">Template message</option>
						 </select>
                        </div>
                      </div>
                    </div>
                   <div class="form-group emoji-contant-align" id="custome_messgae">
                      <label class="col-form-label" for="appendedPrependedInput">Message</label>
                      <div class="controls">
                        <div class="input-prepend input-group">
                         <textarea id="examplename" name="message" data-control="exname-control" rows="9" class="form-control" placeholder="Write your Message Here!" data-emojiable="true" ></textarea>
                        </div>
                      </div>
                    </div>
                    
                    	<div id="template_message" style="display:none">
					
					<div class="form-group emoji-contant-align" id="">
                      <label class="col-form-label" for="appendedPrependedInput">Select Template</label>
                      <div class="controls">
                       <select class="form-control" name="select_template" onchange="get_template_message(this.value)" >
						 <option value="custom">Select</option>
						 <?php $query_tempalte = mysqli_query($con,"select * from tapp_template_msg where temp_type='email'");
						 while($row = mysqli_fetch_array($query_tempalte))
						 { ?>
						 <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
						 <?php } ?>
						 </select>
                      </div>
                    </div>
                    
                     <div class="form-group emoji-contant-align" id="showtemplate">
                      <label class="col-form-label" for="appendedPrependedInput">Message</label>
                      <div class="controls">
                        <div class="input-prepend input-group">
                         <textarea id="examplename" name="message1" data-control="exname-control" rows="9" class="form-control" placeholder="Write your Message Here!"  ></textarea>
                        </div>
                      </div>
                    </div>
					</div>
                    <div class="form-actions">
                      <button type="submit" id="send_btn"  name="type" class="btn btn-primary">Send Now</button>
                      <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>
          
          <!--/.row-->
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>
 </div>
  <?php 
include_once('footer.php')
?>
<script type="text/javascript" src="emoji/js2.js"></script>
<script type="text/javascript" src="emoji/js1.js"></script>
<script type="text/javascript" src="emoji/emojionearea.js"></script>


  <!-- Begin emoji-picker JavaScript -->
  <script src="lib/js/nanoscroller.min.js"></script>
 <script src="lib/js/tether.min.js"></script>
  <script src="lib/js/config.js"></script>
  <script src="lib/js/util.js"></script>
  <script src="lib/js/jquery.emojiarea.js"></script>
  <script src="lib/js/emoji-picker.js"></script>
  <!-- End emoji-picker JavaScript -->
<script type="text/javascript">
   $(document).ready(function() {
      $("#demo1").emojioneArea({
       container: "#container",
       hideSource: false,
       useSprite: false
      });
    });
</script>
 <script>

    $(function() {
      // Initializes and creates emoji set from sprite sheet
      window.emojiPicker = new EmojiPicker({
        emojiable_selector: '[data-emojiable=true]',
        assetsPath: 'lib/img/',
        popupButtonClasses: 'fa fa-smile-o'
      });







      // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields







      // You may want to delay this step if you have dynamically created input fields that appear later in the loading process







      // It can be called as many times as necessary; previously converted input fields will not be converted again







      window.emojiPicker.discover();







    });







  </script>



<?php
if(isset($_GET['f']))
{
if($_GET['f']=='2')
{
?>
<script>
swal({
    title: "Message Sent successfully.",
    //text: "Message Sucessfully Added.",
    timer:3000,
    showConfirmButton: false
  });
</script>

<?php

}

else if($_GET['f']=='draft')
{
?>
<script>
swal({
    title: "Message successfully Saved to draft.",
    //text: "Message Sucessfully Added.",
    timer:3000,
    showConfirmButton: false
  });
</script>
<?php

}

else if($_GET['f']==4)
{
echo "<script language='javascript'>
alert('file Not Valid !!!');
</script>";

}
else if($_GET['f']==5)
{
echo "<script language='javascript'>
alert('The Username & password has been sent to your emailid !!!');
</script>";

}
else
{
?>
<script>
swal({
    title: "Message successfully Saved to Schedule.",
    //text: "Message Sucessfully Added.",
    timer:3000,
    showConfirmButton: false
  });
</script>
<?php
}
}
?><script>function select_n(str) {	    if (str.length == 0) {         document.getElementById("sl").innerHTML = "";        return;    } else {        var xmlhttp = new XMLHttpRequest();        xmlhttp.onreadystatechange = function() {            if (this.readyState == 4 && this.status == 200) {                document.getElementById("sl").innerHTML = this.responseText;            }        };        xmlhttp.open("GET", "getn.php?q=" + str, true);        xmlhttp.send();    }}</script>
<?php
include("connection.php");

$query = mysqli_query($con,"select * from tapp_template_msg where id='".$_REQUEST['q']."'");
while($row = mysqli_fetch_array($query))
{
?>
<label class="col-form-label" for="appendedPrependedInput">Message</label>
                      <div class="controls">
                        <div class="input-prepend input-group">
                         <textarea id="messagebox" name="message1" onkeyup="get_counts(this.value)"data-control="exname-control" rows="9" class="form-control" placeholder="Write your Message Here!" value="<?php echo substr($row['message'],0,161);?>" maxlength="160"><?php echo substr($row['message'],0,161);?></textarea>
                        </div>
                        <span id="counter-holder1"><span>
                      </div>
<?php
}
?>
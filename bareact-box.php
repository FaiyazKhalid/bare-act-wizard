

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .form-control {

    width: 80%;
}
.form-textarea {
display: none;
}
</style>
<center>
  <form action="view.php" method="post" enctype="multipart/form-data" id="UploadForm" onsubmit="return confirm('Are you sure you want to submit this Interview?');" autocomplete="off">
<center><strong>Please Add Sections contents of this Act<?echo $title; ?></strong></center>
<?
if(empty($_POST['number'])){
}
$num=$_POST['number'];
$i = 1;
$ia = 1;
$iaa = 1;
$iaaa = 1;
for($z=0;$z<$num;$z++)

{ ?>  
<textarea readonly class='form-textarea' name="section<? echo $ia++;?>">==Section <? echo $i++;?>==</textarea><br>
<strong>Section <? echo $iaaa++;?>:</strong><br>
<textarea name="para<? echo $iaa++;?>"  class="form-control" rows="3"></textarea><br>
<?php } ?>


<br/>

        <div class="submit">           
<center><h3> <button class='btn btn-primary ladda-button' name='btnUpload' data-style='zoom-in' type='submit'  id='SubmitButton' value='Upload' />Publish</button></div></center>
    </form>

</center>

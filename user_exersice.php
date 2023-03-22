<?php
include('dbconnections.php');

if(isset($_POST['submit']))
  {

    $fileCount = count($_FILES["file1"]["name"]);
    for($i=0;$i<$fileCount;$i++)
    {
      $fileName = $_FILES["file1"]["name"][$i];
      $sql="INSERT INTO vedio ('vdo','title') VALUES ( '$fileName','$fileName')";

      if($con->query($sql)===TRUE)
      {
        echo "File Upload Successfully";
      }
      else
      {
        echo "Error";
      }
  
       move_uploaded_file($_FILES['file1']['tmp_name'][$i],'forms/'.$fileName);
    }
  }

?>

        <form method="post"  enctype="multipart/form-data" >

                                  <input type="file" name="file1[]"  multiple >
                            
                                  <input type="submit" name="submit" value="upload">

                  
</form>

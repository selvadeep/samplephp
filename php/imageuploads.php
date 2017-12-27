<?php

if(is_array($_FILES)) 
{
    if(is_uploaded_file($_FILES['userImage_1']['tmp_name'])) 
    {
        $sourcePath = $_FILES['userImage_1']['tmp_name'];
        $targetPath = "uploaded_files/".$_FILES['userImage_1']['name'];
        if(move_uploaded_file($sourcePath,$targetPath)) {
?>
    <img style="width: 80px; height: 100px;" src="<?php echo "uploaded_files/".$_FILES['userImage_1']['name'];?>"/>
<?php
                                                         
                                                        }
        
    }   
}
?>

<?php
        require 'connect.php';
  
        if(isset($_POST["Add"]))
                {
                    $name_category = $_POST["txtCatName"];

                    if($name_category != "")
                    {
                        $sql = "INSERT INTO theloai (ten_tloai) VALUES('$name_category')";
                        $result = mysqli_query($conn,$sql);
                        
                    }
                }
       
        if(isset($_POST["save"]))
        {
            $id_category = $_POST["txtCatId"];
            $name_category = $_POST["txtCatName"]; 
            if($id_category != "" && $name_category != "")
            {
                $sql = "UPDATE theloai
                SET ten_tloai = ('$name_category')
                WHERE ma_tloai = ('$id_category')";
                $result = mysqli_query($conn,$sql);
                
            }
        }
    ?>
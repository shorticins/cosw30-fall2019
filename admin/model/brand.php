<?php
// Returns all products in the PRODUCTS table
// as a multi-dimensional associative array
function getBrands() {
    include('database.php');

    $query = 'SELECT * FROM BRAND WHERE Archive="0"';
    $result = mysqli_query($connection, $query);

    if($result) {
       return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getBrands()";
    }
}

?>
<?php

    function updateBrand(){

        include('database.php');
        if(isset($_POST['update'])) {    
            $id = $_POST['id'];
            $Brand_ID = $_POST['Brand_ID'];
            $Brand_Name = $_POST['Brand_Name'];
            $Brand_Desc = $_POST['Brand_Desc'];   
            $Archive = $_POST['Archive'];
            
            // Check for empty fields
            if(empty($Brand_ID) || empty($Brand_Name) || empty($Brand_Desc)) {            
                if(empty($Brand_Name)) {
                    echo "<font color='red'>Brand name field is empty.</font><br/>";
                }
                
                if(empty($Brand_Desc)) {
                    echo "<font color='red'>Brand description field is empty.</font><br/>";
                }
                    
            } else {    
                //Update Query
                $query = "UPDATE BRAND SET Brand_Name='$Brand_Name', Brand_Desc='$Brand_Desc' WHERE Brand_ID=$Brand_ID";
                $result = mysqli_query($connection, $query);
                print_r($result);
                
                
                //redirecting to brands list
            // header("Location: brands.php");
            }
        }
    }
    
    $Brand_ID = $_GET['Brand_ID'];
    
    //selecting data associated with this particular id
    $result = mysqli_query($connection, "SELECT * FROM BRAND WHERE Brand_ID = $Brand_ID");
    print_r($result);
    while($res = mysqli_fetch_array($result)) {
        $Brand_Name = $res['Brand_Name'];
        $Brand_Desc = $res['Brand_Desc'];
    }
?>
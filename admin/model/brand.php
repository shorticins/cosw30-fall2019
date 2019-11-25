<?php
include('database.php');
// Returns all products in the PRODUCTS table
// as a multi-dimensional associative array
function getBrands() {
    include('database.php');

    $query = 'SELECT * FROM BRAND';
   $result = mysqli_query($connection, $query);

    if($result) {
       return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getBrands()";
    }
}

?>
<?php
/*

*/
/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE
*/

function updateDB(){

include('database.php');

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $brand_id = $_POST['brand_id'];
    $brand_name=$_POST['brand_name'];
    $brand_description=$_POST['brand_description'];    
    
    // Check for empty fields
    if(empty($brand_id) || empty($brand_name) || empty($brand_description)) {            
        if(empty($brand_name)) {
            echo "<font color='red'>Brand name field is empty.</font><br/>";
        }
        
        if(empty($brand_description)) {
            echo "<font color='red'>Brand description field is empty.</font><br/>";
        }
            
    } else {    
        //Update Query
        $query = "UPDATE BRAND SET Brand_Name='$brand_name', Brand_Desc='$brand_description' WHERE id=$id";
        $result = mysqli_query($connection, $query);
        print_r($result);
        
        
        //redirecting to brands list
       // header("Location: brands.php");
    }
}
}
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($connection, "SELECT * FROM BRAND WHERE id=$id");
 print_r($result);
while($res = mysqli_fetch_array($result))
{
    $brand_name = $res['Brand_Name'];
    $brand_description = $res['Brand_Desc'];
}
?>
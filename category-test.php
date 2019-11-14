<?php

// include('database.php');
include('model/category.php');

?>


<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <title>Category Functions</title>
        <style>
          body {background-color: blue;
                background-position: center;
                background-repeat: no-repeat;}
          h1 {text-align: center; font-size: 30px; margin-top: 40px;
              border-radius: 25px; margin-left: 20%; margin-right: 20%;
              background-color: grey;}
          #container {width: 900px;	margin-left: auto;	margin-right: auto;	padding-top: 50px;	padding-bottom: 150px; border-radius: 25px;	background-color: #00EBCC;}
          #texting {width: 500px; display: block; margin-left: auto; margin-right: auto; text-align: center;}
          input[type=submit] {background-color: grey; border: none; border-radius: 10px;  color: white;  padding: 16px 32px;  text-decoration: none;  margin: 4px 2px;  cursor: pointer;}
          table, th, td {border: 1px solid black; text-align: center; margin-left: 3%;}
          footer {font-size: 1.5em; color: white; text-align: center; margin-top: 11%;}
        </style>
</head>



<body>

    <h1>Test The Category Functions</h1>

    <div id="container">

    <h1>All Categories</h1>

    <div id="texting">


    <table>
        <thead>
            <tr>
                <th>Category_ID</th>
                <th>Category Name</th>
                <th>Category-Desc</th>
            </tr>
        </thead>
        <tbody>

        <?php
        foreach(getCategories() as $row) {
        echo '<tr>
                <td>'.$row['Category_ID'].'</td>
                <td>'.$row['Category_Name'].'</td>
                <td>'.$row['Category_Desc'].'</td>

            </tr>';
        }
        ?>

        </tbody>
    </table>

    </div>
    </div>

        <br><br><br>

    <div id="container">

    <h1>Category By Id</h1>

    <div id="texting">

<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    print_r(getCategory($id));
} else {
}

?>

    </div>
    </div>


</body>

</html>
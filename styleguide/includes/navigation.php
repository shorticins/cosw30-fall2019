<?php
function listOfLinks($category, $subcats) {
    echo "<Div id='$category'>
        <ul id=$category><a href='$category/' title='$category'>$category</a>";
    foreach ($subcats as $item){
        echo "<li><a href='$category/$item.php' title='$item'>$item</a></li>";
    }
    echo "</ul>
        </div>";    
}
// create arrays for nav menu; update to db soon...
$Content = array("Typography", "Images", "Figures");
$Layout = array("Grid", "Utilities");
$Components = array("Alerts", "Bread Crumbs", "Buttons", "Dropdown", "Forms", "Icons", "Links", "Logo", "Media Object", "Navigation Bar", "Pagination");
$Utilities = array("Borders", "Colors", "Fonts", "Visibility", "Text");
// call function to output each list as unordered list of links
// easy manipulation using CSS to format the nav menus
listOfLinks("Content", $Content);
listOfLinks("Layout", $Layout);
listOfLinks("Components", $Components);
listOfLinks("Utilities", $Utilities);

?>

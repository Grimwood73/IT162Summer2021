<?php

/*
config.php

Used to store all of our configuration information

*/


define("THIS_PAGE", basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case "index.php":
        $title = "Ground Control Studios Home Page";
        $PageID = "Featured Projects";
    break;

    case 'media.php':
        $title = "Ground Control Media Page";
        $PageID = "Media";
    break;

    case 'engineers.php':
        $title = "Ground Control Engineers Page";
        $PageID = "Our Engineers";
    break;

    case 'gear.php':
        $title = "Ground Control Gear Page";
        $PageID = "Gear";
    break;

    case 'about.php':
        $title = "Ground Control About Page";
        $PageID = "About Us";
    break;

    case 'contact.php':
        $title = "Ground Control Contact Page";
        $PageID = "Contact Ground Control";
    break;


    default:
        $title = THIS_PAGE;
        $PageID = "Welcome";

}

$nav1["index.php"] = "Home";
$nav1["media.php"] = "Media";
$nav1["engineers.php"] = "Engineers";
$nav1["gear.php"] = "Gear";
$nav1["about.php"] = "About";
$nav1["contact.php"] = "Contact";

// Here we're creating a function to change the highlighted link on the nav bar to the active page

function makeLinks($nav1){

    
        $myReturn = '';
    
        foreach($nav1 as $url => $text)
        {
            if($url == THIS_PAGE)
            {//selected page - add class reference
                $myReturn .= '<li><a class="active" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
            }else{
                $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
            }    
        }
          
        return $myReturn;
    
    
}

?>
 
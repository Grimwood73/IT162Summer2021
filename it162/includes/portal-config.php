<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/


define("THIS_PAGE", basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case "index.php":
        $title = "Jonah's IT162 Title Page";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;

    case 'big/index.php':
        $title = "Jonah's IT162 Big Page";
        $logo = "fa-pencil-square-o";
        $PageID = "BIG";
    break;

    case 'aia.php':
        $title = "Jonah's IT162 AIA Page";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        $PageID = "AIA";
    break;

    case 'flowchart.php':
        $title = "Jonah's IT162 Flowchart Page";
        $logo = "fa-pencil-square-o";
        $logo_color = ' style="color:#00f"';
        $PageID = "Flowchart";
    break;

    case 'fp/index.php':
        $title = "Jonah's IT162 FP Page";
        $logo = "fa-pencil-square-o";
        $PageID = "FP";
    break;

    case 'contact.php':
        $title = "Jonah's IT162 Contact Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = "Contact Jonah";
    break;


    default:
        $title = THIS_PAGE;
        $logo = "fa-home";
        $PageID = "Welcome";

}

$nav1["index.php"] = "Welcome";
$nav1["big/index.php"] = "Big";
$nav1["aia.php"] = "AIA";
$nav1["flowchart.php"] = "Flowchart";
$nav1["fp/index.php"] = "Final Project";
$nav1["contact.php"] = "Contact Me";

// Here we're creating a function to change the highlighted link on the nav bar to the active page

// <a href="index.php" class="active">Welcome</a>
//        <a href="big/index.php">BIG</a>
//        <a href="aia.php">AIA</a>
//        <a href="flowchart.php">Flowchart</a>
//        <a href="fp/index.php">Final Project</a>
//        <a href="contact.php">Contact Jonah</a>

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
 
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

if(isset($_SESSION['page_count'])){
    $_SESSION['page_count']+=1;
}else{
    $_SESSION['page_count']=1;
}
$msg="you have viewed my awesome page <span style='color:red'>" . $_SESSION['page_count'];
$msg .="</span> in this session.";

if ($_SESSION['page_count']>10){
echo "thank you for visiting our website <span style='color:green'>10</span>times";

}
echo $msg;
echo "<br>";

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

 //remove all session variables
//session_unset();

 //destroy the session
//session_destroy();
echo "<br>";
echo "All session variables are now removed, and the session is destroyed.";


?>

</body>
</html>

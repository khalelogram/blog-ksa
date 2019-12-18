<?php
if(isset($_SESSION['user'])){
}else{
header("location:login.php?msg= No Access");
}
?>
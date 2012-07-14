<?php
ob_start();
include './error.php';
ob_end_clean();
if ($debug==1){
echo phpinfo();
}
else{
//silence is golden
}
?>
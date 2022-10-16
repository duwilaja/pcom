<?php
$now=date("YmdHis").".txt";
$content="Input:".file_get_contents("php://input");
$content.="POST:".json_encode($_POST);
$content.="GET:".json_encode($_GET);
$x=file_put_contents($now,$content);

echo "OK"; 
?>
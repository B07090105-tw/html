<?php
    $ID=$_POST["id"]
    $PASS=$_POST["pwd"]
    if($ID=="abc" && $PASS=="abc123")//設定ID跟PASS
       echo "Welcome"
    else
       echo "id/password wrong"
?>
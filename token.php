<?php

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING

# Here I Put Token which Available Publicly I Recommended Use Your Own Token Here 
# For Suppport @Avishkarpatil at Telegram or proavipatil@gmail.com



$jctBase = "cutibeau2ic";

$ssoToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWUiOiJiN2MwZmUzOC0zY2E3LTQ3YTItYjgzMS0zNDNiZmM4ZDU4YzciLCJ1c2VyVHlwZSI6IlJJTHBlcnNvbiIsImF1dGhMZXZlbCI6IjIwIiwiZGV2aWNlSWQiOiJhYmQ4ZTkzYWRiN2Y1ZDU2NjE1ZTA5YTViOTE4NTg4M2VjYzdmMTA0ZmMxNDg3ZGE4MmY2YzEyMzA1ZDY5YmI2Yjk3MjdlMmFlYjIyZmQ0MGNkMDc4ZThhMzUyNjIxYWY0NjJmMzk2MDI1MDUxZTEzZTBkMDE2MmIzZjRhZDU4MyIsImp0aSI6ImUxMDA2MzQyLWFhZTUtNDA2OC1hZGEyLWI1NTU2NWVjMDcxYiIsImlhdCI6MTYzNzQzNTcyOH0.qUFFyn09ruB2SYOZKILezK1WoE6TQCt1n7sJZQJyfIw"; #Change This with your SSOTOKEN 
function tokformat($str)
{
$str= base64_encode(md5($str,true));
return str_replace("\n","",str_replace("\r","",str_replace("/","_",str_replace("+","-",str_replace("=","",$str)))));
}
function generateJct($st, $pxe) 
{
 global $jctBase;
 return trim(tokformat($jctBase . $st . $pxe));
}
function generatePxe() {
return time() + 6000000;
}
function generateSt() {
global $ssoToken;
return tokformat($ssoToken);
}
function generateToken() {
$st = generateSt();
$pxe = generatePxe();
$jct = generateJct($st, $pxe);
return "?jct=" . $jct . "&pxe=" . $pxe . "&st=" . $st;
}

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING


echo generateToken();
?>

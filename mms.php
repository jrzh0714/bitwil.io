<html>
<body>
<?php
$FromNumber = "+15162094484"; // number that will send
$ToNumber = $_GET['phoneNumber']; // number that will recieve 
$Msg = $_GET['link'];  
    require '/Services/Twilio.php';
$AccountSid = "AC37d521a58b09365069bd823f792581e4";
$AuthToken = "e9d1b03ff13730b187fa421b32aad44e";
$client = new Services_Twilio($AccountSid, $AuthToken);
$pic = array($_GET['imgLink']);
$bSuccess = $client->account->messages->sendMessage(
    
    $FromNumber, 	
    $ToNumber,           
    $Msg,	
    $pic		
);
echo "Sent message to $ToNumber ";

echo $Msg;
?>
</body>
</html>
<html>
<body>
<?php
$FromNumber = "+15162094484"; // number that will send
$ToNumber = $_GET['phoneNumber']; // number that will recieve 
$Msg = $_GET['link'];  
    require '/Services/Twilio.php';
$AccountSid = "SKac60182826f843a8fea1d99eaa52b981";
$AuthToken = "1Xzjr72rdnkZXX4zneDJxqKaBSONH2Yg";
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
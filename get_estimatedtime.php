<?php
include('dbconnection.php');
if($db){
	
if ($_POST) {
    $ticketnumber = ($_POST['ticketnumber']);
}

$check = "SELECT `estimatedtime`,`remainingtime`,`completepercentage` from `eodtable` WHERE `ticketnumber`='$ticketnumber';";

$result = mysqli_query($db, $check);
    
    $answer = mysqli_fetch_assoc($result);
    if($answer)

    {
    	//echo $answer['estimatedtime'];

    	echo json_encode(array('prev_estimatedtime'=> $answer['estimatedtime'],'prev_remainingtime' => $answer['remainingtime'],'prev_completepercentage' => $answer['completepercentage'] ));  
    }
    else
    {
    	echo json_encode(array('prev_estimatedtime'=>'','prev_remainingtime' => '','prev_completepercentage' =>''));
    }
}
else{
	echo "disconnected";
}

?>

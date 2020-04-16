<?php
$db_name = "bartestdb"; // database name
$db_user = "bargavi"; // database username
$db_pass = "manickam"; // database password
$db_host = "localhost"; // 
$error   = "";
$db      = "";
//echo "inside db";
session_start();

$ticketnumber = $description = $status = $estimatedtime = $login_time = $logout_time = $remainingtime = $completepercentage = $comments = $is_subticket = $main_ticket_no = $istesting = $iteration_no = array();

$db = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name");
date_default_timezone_set("Asia/Calcutta");
$curent_date_time = date(" Y-m-d H:i:s");
$user_id="Userid";
$user_name="Username";

// function santize($arrays)
// {   
//     foreach ($arrays as $arr) {

//         $arr=mysql_real_escape_string($db,$arr);
//     }
//     return $arrays;
// }

if ($_POST) {
    $ticketnumber       = json_encode($_POST['ticketnumber']);
    $description        = json_encode($_POST['description']);
    $status             = json_encode($_POST['status']);
    $estimatedtime      = json_encode($_POST['estimatedtime']);
    $login_time         = json_encode($_POST['login_time']);
    $logout_time        = json_encode($_POST['logout_time']);
    $remainingtime      = json_encode($_POST['remainingtime']);
    $completepercentage = json_encode($_POST['completepercentage']);
    $comments           = json_encode($_POST['comments']);
    $is_subticket       = json_encode($_POST['is_subticket']);
    $main_ticket_no     = json_encode($_POST['main_ticket_no']);
    $istesting          = json_encode($_POST['istesting']);
    $iteration_no       = json_encode($_POST['iteration_no']);
}
 

print_r($ticketnumber);
// print_r($is_subticket);
// print_r($estimatedtime);

if($db){
    echo "db connection successfully";

            $store = "INSERT INTO `eodtable` (`user_id`,`user_name`,`ticketnumber`, `description`, `status`, `estimatedtime`, `login_time`,`logout_time`,`remainingtime`,`completepercentage`,`comments`,`is_subticket`,`main_ticket_no`,`istesting`,`iteration_no`,`created_date_time`) VALUES ('$user_id','$user_name','$ticketnumber','$description','$status','$estimatedtime','$login_time','$logout_time','$remainingtime','$completepercentage','$comments','$is_subticket','$main_ticket_no','$istesting','$iteration_no','$curent_date_time')";

        if (mysqli_query($db, $store)) {
            echo "stored";
            
    //         echo json_encode(array(
    // 'status' => 'success',
    // 'message'=> 'You have successfully submitted your end of the day report'
    //      ));

        } 
        else {
            echo "not stored";
    //         echo json_encode(array(
    // 'status' => 'error',
    // 'message'=> 'Database Insertion failure'
    //      ));

        }
    

}else{
    echo "connection failure";
}





//  echo $description;
//  echo $estimatedtime;
// if ($db) {

    // $check = "SELECT * from `eodtable` WHERE `ticketnumber`='$ticketnumber';";

    // $result = mysqli_query($db, $check);
    
    // $answer = mysqli_fetch_assoc($result);
   
    // if($answer)
    // {
        
    //     $completepercentage_from_db = $answer['completepercentage'];
        
    //     if ($completepercentage_from_db + $completepercentage <= 100) {
            
    //         $completepercentage = $completepercentage_from_db + $completepercentage;

    //         $update = "UPDATE `eodtable` SET `user_id` = '$user_id',`user_name` = '$user_name',`description` = '$description', `status` = '$status',`estimatedtime` = '$estimatedtime',`login_time` = '$login_time', `logout_time` = '$logout_time', `remainingtime` = '$remainingtime', `completepercentage` = '$completepercentage', `comments` = '$comments', `is_subticket` = '$is_subticket', `main_ticket_no` = '$main_ticket_no', `istesting`='$istesting', `iteration_no` = '$iteration_no',`updated_time`='$curent_date_time' WHERE `ticketnumber` = '$ticketnumber';";
        
    //     if (mysqli_query($db, $update)) 
    //     {
    //         echo json_encode(array(
    // 'status' => 'success',
    // 'message'=> 'You have successfully submitted your end of the day report'
    //      ));
    //     } 
    //     else 
    //     {
    //   echo json_encode(array(
    // 'status' => 'error',
    // 'message'=> 'Database Insertion failure'
    //      ));  
    //     }

    //     } 
    //     else {
            
    //         echo json_encode(array(
    // 'status' => 'error',
    // 'message'=> 'Invalid work completed value'
    //      ));
            
    //     }
        
    // }

    // else {

    //     $store = "INSERT INTO `eodtable` (`user_id`,`user_name`,`ticketnumber`, `description`, `status`, `estimatedtime`, `login_time`,`logout_time`,`remainingtime`,`completepercentage`,`comments`,`is_subticket`,`main_ticket_no`,`istesting`,`iteration_no`,`created_date_time`) VALUES ('$user_id','$user_name','$ticketnumber','$description','$status','$estimatedtime','$login_time','$logout_time','$remainingtime','$completepercentage','$comments','$is_subticket','$main_ticket_no','$istesting','$iteration_no','$curent_date_time')";

    //     if (mysqli_query($db, $store)) {
            
    //         echo json_encode(array(
    // 'status' => 'success',
    // 'message'=> 'You have successfully submitted your end of the day report'
    //      ));

    //     } 
    //     else {
    //         echo json_encode(array(
    // 'status' => 'error',
    // 'message'=> 'Database Insertion failure'
    //      ));

    //     }
    // }

// } 
// else 
// {

//     echo "connection failure";
// //     echo json_encode(array(
// //     'status' => 'error',
// //     'message'=> 'Database connection failure'
// // ));
    
// }




// print_r($is_subticket);
// // print_r($estimatedtime);

// if($db){
//     echo "db connection successfully";

//             $store = "INSERT INTO `eodtable` (`user_id`,`user_name`,`ticketnumber`, `description`, `status`, `estimatedtime`, `login_time`,`logout_time`,`remainingtime`,`completepercentage`,`comments`,`is_subticket`,`main_ticket_no`,`istesting`,`iteration_no`,`created_date_time`) VALUES ('$user_id','$user_name','$ticketnumber','$description','$status','$estimatedtime','$login_time','$logout_time','$remainingtime','$completepercentage','$comments','$is_subticket','$main_ticket_no','$istesting','$iteration_no','$curent_date_time')";

//         if (mysqli_query($db, $store)) {
//             echo "stored";
            
//     //         echo json_encode(array(
//     // 'status' => 'success',
//     // 'message'=> 'You have successfully submitted your end of the day report'
//     //      ));

//         } 
//         else {
//             echo "not stored";
//     //         echo json_encode(array(
//     // 'status' => 'error',
//     // 'message'=> 'Database Insertion failure'
//     //      ));

//         }
    

// }else{
//     echo "connection failure";
// }

?>
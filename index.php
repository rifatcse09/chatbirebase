
<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>

<script>
   //Initialize Firebase
//  var config = {
//    apiKey: "AIzaSyD5h_HSZwKsEy7S5O01xbYU5qUY2eJ5wbk",
//    authDomain: "chatfirebase-b784b.firebaseapp.com",
//    databaseURL: "https://chatfirebase-b784b.firebaseio.com",
//    projectId: "chatfirebase-b784b",
//    storageBucket: "",
//    messagingSenderId: "748546339110"
//  };
//  firebase.initializeApp(config);
    //firebase.database().ref('guardian/' + 2).set({
   // username: 'Gurdian_2',
   // email: 'mGardian_1@gmail.com',
  //s});
//  firebase.database().ref('chat_room/' + 2).set({
//    teacher_id: '1',
//    guardian_id: '2',
//  });
  //var milliseconds = new Date().getTime();
  //alert(milliseconds);
//   firebase.database().ref('chat_room_messages/' + 1).set({
//    chat_room_id: '2',
//    teacher_id: '1',
//	parent_id: '2',
//	message: 'hi rifat'
//	//created : milliseconds,
//  })
//  var chatRef = firebase.database().ref();
</script>
<?php //echo 'Firebase testing';

//$FIREBASE = "https://chatfirebase-b784b.firebaseio.com";
//$NODE_DELETE = "temperature.json";
//$NODE_GET = "temperature.json";
//$NODE_PATCH = ".json";
//$NODE_PUT = "temperature.json";
//// Data for PUT
//// Node replaced
//$data = 32;
//// Data for PATCH
//// Matching nodes updated
//$data = array(
//    "temperature" => 42
//);
//// JSON encoded
//$json = json_encode( $data );
//// Initialize cURL
//$curl = curl_init();
//// Create
// curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_PUT );
// curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
// curl_setopt( $curl, CURLOPT_POSTFIELDS, 32 );
//// Read
//// curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_GET );
//// Update
////curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_PATCH );
////curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PATCH" );
////curl_setopt( $curl, CURLOPT_POSTFIELDS, $json );
//// Delete
//// curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $NODE_DELETE );
//// curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
//// Get return value
//curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
//// Make request
//// Close connection
//$response = curl_exec( $curl );
//curl_close( $curl );
//// Show result
//echo $response . "\n";


  // insert data
   $insert = 'PUT';
   // updatating data
   $update = 'PATCH';
   $show = 'GET';
   
      $chatMessageData =[
       'id' => 1,
       'chat_room_id'=>3,
	   'teacher_id'=>2,
       'guardian_id'=>'',
	   'absence_id'=>'',
	   'arrival_id'=>'',
	   'message'=>'hi how are you',
	   'photo' => '',
       'created' => '1505982850',
       'updated' => '',
       'deleted' => '0',
];
   
   //for chat room
//   $chatRoomData =[
//       'id' => 1,
//       'teacher_id'=>2,
//       'guardian_id'=>1,
//       'security_token'=> 'jfVAO2pTtMy',
//       'created' => '1505982398',
//       'updated' => '',
//       'deleted' => '0',
//       'tech_guar' =>'2_1'
//];
//for user registration
//   $userData =[
//       'id' => 5,
//       'user_id'=>2,
//       'name'=>'Tahmina',
//       'school_id'=>1,
//       'type'=>'guardian',
//       'photo'=> 'https://ss-scrum-dev.s3-ap-northeast-1.amazonaws.com/upload/users/6/original.jpg',
//       'deleted'=>'0',
//       'schid_utype' => '1_guardian'
//       ];
   
   
   $json = json_encode( $chatMessageData );
  
    //for user entry $url = "https://chatfirebase-b784b.firebaseio.com/users/3.json";
    $url = "https://chatfirebase-b784b.firebaseio.com/chat_room_messages/1.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);                               
    curl_setopt($ch, CURLOPT_HEADER, false);                               
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $insert );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $jsonResponse = curl_exec($ch);
    //echo $jsonResponse;
    if(curl_errno($ch))
    {
        echo 'Curl error: ' . curl_error($ch);
    }
    curl_close($ch);
   // https://chatfirebase-b784b.firebaseio.com/users.json?orderBy="schid_utype" &equalTo="1_teacher"
//{
//  "rules": {
//     "users" : {
 //               ".indexOn": ["schid_utype","school_id","type"]
  //          },
//    ".read": true,
//    ".write": true
//  }
//}
?>
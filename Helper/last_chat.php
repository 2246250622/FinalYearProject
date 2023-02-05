<?php 

function lastChat($id_1, $id_2, $conn){
   
   $sql = "SELECT * FROM chat
           WHERE (ID_From=? AND ID_To=?)
           OR    (ID_To=? AND ID_From=?)
           ORDER BY chat_id DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_1, $id_2, $id_1, $id_2]);

    if ($stmt->rowCount() > 0) {
    	$chat = $stmt->fetch();
    	return $chat['message'];
    }else {
    	$chat = '';
    	return $chat;
    }

}
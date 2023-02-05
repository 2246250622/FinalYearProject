<?php 

function getChats($id_1, $id_2, $conn){
   
   $sql = "SELECT * FROM chat
           WHERE (ID_From=? AND ID_To=?)
           OR    (ID_To=? AND ID_From=?)
           ORDER BY ID_Chat ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_1, $id_2, $id_1, $id_2]);

    if ($stmt->rowCount() > 0) {
    	$chats = $stmt->fetchAll();
    	return $chats;
    }else {
    	$chats = [];
    	return $chats;
    }

}
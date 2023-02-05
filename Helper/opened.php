<?php 

function opened($id_1, $conn, $chats){
    foreach ($chats as $chat) {
    	if ($chat['opened'] == 0) {
    		$opened = 1;
    		$chat_id = $chat['ID_Chat'];

    		$sql = "UPDATE chat
    		        SET   opened = ?
    		        WHERE ID_From=? 
    		        AND   ID_Chat = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$opened, $id_1, $chat_id]);

    	}
    }
}
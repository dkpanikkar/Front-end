<?php 
//connect database
require_once 'db.php';

//query database
$query = "SELECT * FROM clubEvent, event,eventTag,eventUser WHERE event.event_id = eventTag.event_id, clubEvent.event_id,eventUser.event_id;"
$statement = $db-> prepare($query);
$statement->execute();
?>
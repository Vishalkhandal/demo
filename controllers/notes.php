<?php

$db = new Database($config['database'], "u705875743_demo", "!>1xnMrV7p6A");

$heading = "My Notes";

$notes = $db->query("select * from notes where user_id = 1")->fetchAll();

dd($notes);

require('views/notes.view.php');

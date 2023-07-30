<?php
$json = file_get_contents('todo.json');
$jsonArray = json_decode($json, true);
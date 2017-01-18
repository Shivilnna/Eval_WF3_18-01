<?php
include_once 'Chat.php';

$chat1 = new Chat("Guizmo", 10, "rouge", "male", "Bengal");
$chat1->getInfos();
var_dump($chat1->getInfos());

$chat2 = new Chat("Ebene", 5, "bleu", "femelle", "Siamois");
$chat2->getInfos();
var_dump($chat2->getInfos());

$chat3 = new Chat("Lechat", 3, "Ecaille", "male", "Bobsicat");
$chat3->getInfos();
var_dump($chat3->getInfos());
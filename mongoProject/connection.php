<?php

$dbhost = 'localhost:27017';
$dbname = 'fakultet';
$kolekcija_1 = 'administrator';
$kolekcija_2 = 'profesor';
$kolekcija_3 = 'student';
$kolekcija_4 = 'predmet';

$client = new MongoDB\Client('mongodb://$dbhost');
$db = $client->$dbname;
$coll_admin = $db->$kolekcija_1;
$coll_profesor = $db->$kolekcija_2;
$coll_student = $db->$kolekcija_3;
$coll_predmet = $db->$kolekcija_4;

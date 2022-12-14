<?php

//testiranje MongoDB konekcije
//require_once _DIR__.'/vendor/autoload.php'
//echo __DIR__;
require_once 'vendor/autoload.php';


$dbhost = "localhost:27017";
$dbname = "test";

$db_client = new MongoDB\Client("mongodb://$dbhost");

//$db = $db_client->test;
$db = $db_client->$dbname;
$coll_users = $db->users;


// $insertOneRez = $coll_users->insertOne([
//     'username' => 'admin',
//     'email' => 'admin@email.com',
//     'name' => 'Admin name'
// ]);

// $insertManyRez = $coll_users->insertMany(
//     [
//         [
//             'username' => 'tamara',
//             'email' => 'tamara@email.com',
//             'name' => 'Tamara name'
//         ],
//         [
//             'username' => 'petar',
//             'email' => 'petar@email.com',
//             'name' => 'Petar name'
//         ]
//     ]
// );
//var_dump($insertManyRez->getInsertedIds());

//query-ing
//findOne


$doc1 = $coll_users->findOne(['username' => 'tamara']);
var_dump($doc1);
//printf("Ubaceno je %d dokumenata\n", $insertManyRez->getInsertedCount());
//findmany
echo "Pretraga<br>";

$docs = $coll_users->find(['type' => 'general']);
foreach ($docs as $doc) {
    echo $doc['username'];
}

//update

$updateRez = $coll_users->updateOne(
    ['username' => 'admin'],
    ['$set' => ['type' => 'admin']]
);

$korisnici = ['petar', 'tamara'];
foreach ($korisnici as $korisnik) :
    $coll_users->updateOne(
        ['username' => $korisnik],
        ['$set' => ['type' => 'general']]
    );
endforeach;

//delete

$deleteRez = $coll_users->deleteOne(['username' => 'petar']);
echo "Obrisan je jedan dokument<br>";

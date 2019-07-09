<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secretkey/fir-php-fb0a2-5475d31b787e.json');

$firebase = (new Factory)
  ->withServiceAccount($serviceAccount)
  //->withDatabaseUri('http//fir-php-fb0a2.firebaseio.com')
  ->create();

$database = $firebase->getDatabase();
/*$newPost = $database
  ->getReference('blog/posts')
  ->push([
    'title' => 'post tilte',
    'body' => 'this should be pobably be longer'
  ]);

$newPost->getKey();
$newPost->getUri();

$newPost->getChild('title')->set('changed post title');
$newPost->getValue();
$newPost->remove();

echo 'hello world';*/
?>
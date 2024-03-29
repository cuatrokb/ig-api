<?php
require __DIR__ . '/../vendor/autoload.php';

$instagram = \IgScraper\Instagram::withCredentials('username', 'password', 'path/to/cache/folder/');
$instagram->login();


$accounts = $instagram->searchAccountsByUsername('raiym');

$account = $accounts[0];
// Following fields are available in this request
echo "Account info:\n";
echo "Username: {$account->getUsername()}";
echo "Full name: {$account->getFullName()}";
echo "Profile pic url: {$account->getProfilePicUrl()}";

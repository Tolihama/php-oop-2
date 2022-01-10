<?php 
require_once __DIR__ . './classes/User.php';
require_once __DIR__ . './classes/Product.php';

// Istances
$userOne = new User([
    'username'=>'Toli',
    'first_name'=>'Francesco',
    'last_name'=>'Marino',
    'age'=>28
]);

$adminOne = new Admin([
    'username'=>'Duz',
    'first_name'=>'Paolo',
    'last_name'=>'Duzioni',
    'age'=>39
]);

var_dump($userOne);

$productOne = new Product('Dixan', 20);
var_dump($productOne);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    <h2><?php echo "{$userOne->getRole()}: {$userOne->getFirstName()} {$userOne->getLastName()} ({$userOne->getAge()})"; ?></h2>
    <h2><?php echo "{$adminOne->getRole()}: {$adminOne->getFirstName()} {$adminOne->getLastName()} ({$adminOne->getAge()})"; ?></h2>
    
</body>
</html>
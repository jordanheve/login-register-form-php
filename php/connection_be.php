<?php 
    require_once __DIR__ . '/../vendor/autoload.php';
    use Symfony\Component\Dotenv\Dotenv;
    $dotenv = new Dotenv();
    $dotenv->load(__DIR__.'/../.env');

    $connection = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

?>

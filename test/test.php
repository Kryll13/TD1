<?php
require_once __DIR__ . '/../vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');
echo $faker->name();
echo PHP_EOL;

$faker = Faker\Factory::create('de_DE');
echo $faker->name();
echo PHP_EOL;


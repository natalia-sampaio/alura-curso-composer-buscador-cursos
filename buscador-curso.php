<?php

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri'=> 'https://www.alura.com.br/', 'verify' => false]);

$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');
$cursos2 = $buscador->buscar('/cursos-online-programacao/java');

foreach ($cursos as $curso){
    echo $curso . PHP_EOL;
}

foreach ($cursos2 as $curso) {
    echo $curso . PHP_EOL;
}
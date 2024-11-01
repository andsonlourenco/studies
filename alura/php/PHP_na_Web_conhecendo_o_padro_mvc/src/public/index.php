<?php
declare(strict_types=1);

use Alura\Mvc\Controller\{
  Controller,
  DeleteVideoController,
  EditVideoController,
  Error404Controller,
  NewVideoController,
  VideoFormController,
  VideoListController
};
use Alura\Mvc\Repository\VideoRepository;

require_once __DIR__ . '/../vendor/autoload.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$dbPath = __DIR__ . '/../banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");
$videoRepository = new VideoRepository($pdo);

if ($path === '/' || $path === '') {
  $controller = new VideoListController($videoRepository);
} elseif ($path === '/novo-video') {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller = new VideoFormController($videoRepository);
  } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new NewVideoController($videoRepository);
  }
} elseif ($path === '/editar-video') {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $controller = new VideoFormController($videoRepository);
  } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $controller = new EditVideoController($videoRepository);
  }
} elseif ($path === '/remover-video') {
  $controller = new DeleteVideoController($videoRepository);
} else {
  $controller = new Error404Controller();
  echo "Página não encontrada";
}
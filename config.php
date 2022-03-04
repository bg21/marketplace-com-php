<?php 

session_start();

// ---------- Carregar autoload ----------
require 'vendor/autoload.php';

header("Content-type: text/html; charset=utf-8");
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); //Deixar datas no formato brasileiro
date_default_timezone_set('America/Sao_Paulo'); //Nossa fuso horário pra brasileiro 


// ------------ Base de Dados -----------
const HOST = 'localhost';
const DBNAME = 'baseflight';
const USER = 'root';
const PASS = '';


// CAMINHOS
define('INCLUDE_PATH', 'https://localhost/TodosCursos/Danki%20Code%20-%20Cursos/Curso%20de%20Marketplace%20com%20PHP/');
define('INCLUDE_PATH_STATIC', 'https://localhost/TodosCursos/Danki%20Code%20-%20Cursos/Curso%20de%20Marketplace%20com%20PHP/public/');
define('BASE_DIR_PAINEL', __DIR__ . '/public'); //pasta public


<?php
include('config.php');


$Controller = new \App\Controllers\Controller();


// ---------- Setando as Views -----------
Flight::set('flight.views.path', 'App/Views');


// Início
Flight::route(
    '/',
    array($Controller, "index")
);

// -------------------- Error ----------------
Flight::map('notFound', function () {
    Flight::render('error');
});


// Flight::render('includes/head', array('heading' => 'Hello'), 'header_content');
// Flight::render('includes/header', array('headering' => 'Hello'), 'headering_content');
// Flight::render('includes/aside', array('asiding' => 'Hello'), 'aside_content');
// Flight::render('includes/footer', array('footing' => 'Hello'), 'footer_content');
// Flight::render('includes/rodape', array('rodape' => 'Hello'), 'rodape_content');
//erros
Flight::set('flight.log_errors', true);

// Startando as rotas
Flight::start();

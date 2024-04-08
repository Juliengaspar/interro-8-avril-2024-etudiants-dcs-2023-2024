<?php

use App\Http\Controllers\JiriController;

/** @var Core\Router $router */

//etapes2 créer les routes pour le login, le logout et l’enregistrement ;
$router->post('/jiri/edit', [JiriController::class, 'edit']);
$router->patch('/jiri/edit', [JiriController::class, 'edit'])->csrf();
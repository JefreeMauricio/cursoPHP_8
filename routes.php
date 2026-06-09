<?php
use App\Controllers\HomeController;
use App\Controllers\PagesController;
use App\Controllers\TasksController;
use App\Controllers\LoginController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get  ('/',           [HomeController ::class, 'show'    ]);
SimpleRouter::get  ('about',       [PagesController::class, 'about'   ]);
SimpleRouter::get  ('services',    [PagesController::class, 'services']);
SimpleRouter::get  ('contact',     [PagesController::class, 'contact' ]);
SimpleRouter::post ('task/create', [TasksController::class, 'create'  ]);
SimpleRouter::post ('task/toggle/{id}', [TasksController::class, 'toggle'  ]);
SimpleRouter::post ('task/delete/{id}', [TasksController::class, 'delete'  ]);
SimpleRouter::get  ('login',  [LoginController::class, 'show'    ]);
SimpleRouter::post ('login',       [LoginController::class, 'login'   ]);
SimpleRouter::post ('logout',      [LoginController::class, 'logout'  ]);
SimpleRouter::start();



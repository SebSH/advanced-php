<?php
use controllers\PagesController;
use controllers\UsersController;
use models\Users;
return [
    Users::class => function ($container) {
        return new Users();
    },
    UsersController::class => function ($container) {
        $usersController = $container[Users::class]($container);
        return new UsersController($usersController);
    },
    PagesController::class => function ($container) {
        return new PagesController();
    },
];
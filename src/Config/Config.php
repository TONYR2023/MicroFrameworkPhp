<?php

namespace Poo\Project\Config;

abstract class Config
{
    const DBNAME = 'tp';

    const DBHOST = 'localhost:8889';
    const DBUSER = 'tp';
    const DBPWD = 'root';

    const DEFAULT_CONTROLLER = 'IndexController';
    const DEFAULT_METHOD = 'index';
    const CONTROLLER = 'Poo\Project\Controller\\';
    const TEMPLATE_FOLDER = __DIR__ . '/../Views/Template/';
}

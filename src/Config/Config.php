<?php

namespace Poo\Project\Config;

abstract class Config
{
    const DBNAME = 'tp';
    const DBHOST = 'localhost:3306';
    const DBUSER = 'admin';
    const DBPWD = 'admin';

    const DEFAULT_CONTROLLER = 'IndexController';
    const DEFAULT_METHOD = 'index';
    const CONTROLLER = 'Poo\Project\Controller\\';
    const TEMPLATE_FOLDER = __DIR__ . '/../Views/Template/';
}

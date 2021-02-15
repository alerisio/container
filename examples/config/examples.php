<?php
namespace Aleris\Container\Examples;

use Aleris\Container\Config;

/**
 * Config file used for the example scripts within this 
 * directory, and nothing more.
 */
return [
    'dbname' => 'container_db', 
    'email' => 'matt.dizak@gmail.com', 
    'days' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 
    Config::class => \Aleris\Container\Config::class
];


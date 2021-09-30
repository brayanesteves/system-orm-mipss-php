<?php
    /**
     * Created by Visual Studio Code
     * User: Brayan Esteves [VE]
     * Date: 28/09/2021
     * Time: 01:12 PM
     */
    include "help/helps.php";
    define(  "APP_ROUTE", ROUTE_BASE .    "app/");
    define("VIEWS_ROUTE", ROUTE_BASE .  "views/");
    define(    "LIBRARY", ROUTE_BASE .   "libs/");
    define(     "ROUTES",  APP_ROUTE . "routes/");
    define(     "MODELS",  APP_ROUTE .  "model/");

    /**
     * Configuration
     */
    include ROUTE_BASE .  "config/config.php";
    include              "ORM/Connection.php";
    include                   "ORM/Model.php";

    includeModels();
    
    include           "Views.php";
    include           "Route.php";
    include ROUTES . "routes.php";
?>
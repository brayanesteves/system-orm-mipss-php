<?php
    /**
     * Created by Visual Studio Code
     * User: Brayan Esteves [VE]
     * Date: 28/09/2021
     * Time: 01:12 PM
     */
    define(  "APP_ROUTE", ROUTE_BASE .    "app/");
    define("VIEWS_ROUTE", ROUTE_BASE .  "views/");
    define(     "ROUTES",  APP_ROUTE . "routes/");

    include           "Route.php";
    include ROUTES . "routes.php";
?>
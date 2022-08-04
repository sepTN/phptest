<?php
$f3 = require('/fff/base.php');
$f3->route('GET /', function () {
    echo 'Hello Worlds';
});
$f3->route(
    'GET /about',
    function () {
        echo 'About page';
    }
);



$f3->run();

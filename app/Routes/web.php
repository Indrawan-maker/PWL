<?php

Router::get('/', 'HomeController@index');
Router::get('/about', 'AboutController@index');
// Router::get('/about', 'HomeController@contact');
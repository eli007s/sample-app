<?php

    require_once 'jinxup.php';

    $jinxup->app('sample')

        ->root('sample-app')
        //->route('/')->to('new_index', 'test')
        ->init();
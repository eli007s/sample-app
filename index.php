<?php

    require_once 'jinxup.php';

    $jinxup->app('sample')

        ->route('/')->to('new_index', 'test')
        ->init();
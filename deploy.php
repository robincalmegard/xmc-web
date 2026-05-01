<?php
namespace Deployer;
require 'recipe/common.php';

// Project name
set('application', 'xmc.se');

// Project repository
set('repository', 'git@github.com:robincalmegard/xmc-web.git');

// Shared files/dirs between deploys 
set('shared_files', []);
set('shared_dirs', []);

// Writable dirs by web server 
set('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts
host('http-0[1:2].xmc.se/prod')
    ->set('remote_user', 'robin')
    ->set('deploy_path', '/var/www/xmc.se')
    ->setLabels([
        'stage' => 'prod'
    ]);

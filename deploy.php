<?php
require 'vendor/deployer/deployer/recipe/composer.php';

server('main', 'syph-fw.com', 22)
    ->user('ubuntu')
    ->forwardAgent()
    ->stage('master')
    ->env('deploy_path', '/var/www/html/syph-fw')
    ->pemFile('/var/www/certs/sylabs.pem');

set('repository', 'git@github.com:sylabs/syph-docs.git');
set('keep_releases', 2);
set('shared_dirs', ['storage/logs']);

after('deploy:update_code', 'deploy:shared');

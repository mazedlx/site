<?php

require 'recipe/symfony.php';
set('ssh_type', 'ext-ssh2');
set('repository', 'https://github.com/mazedlx/site.git');
set('shared_dirs', [
    'storage/app',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
]);

set('shared_files', ['.env']);
set('writable_dirs', ['storage', 'vendor']);
server('mazedlx.net', 'mazedlx.net', 22)
->user('maze')
->identityFile()
->stage('production')
->env('deploy_path', '/var/www/html/site');

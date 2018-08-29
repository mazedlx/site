@servers(['web' => ['maze@mazedlx.net']])

@task('deploy', ['on' => 'web'])
    cd /var/www/html/site
    php artisan down
    git stash
    git pull
    composer update --no-dev
    php artisan migrate:fresh --seed
    yarn prod
    php artisan up
@endtask

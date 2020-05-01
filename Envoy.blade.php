@servers(['web' => ['maze@mazedlx.net']])

@task('deploy', ['on' => 'web'])
    cd /var/www/html/site
    php artisan down
    git stash
    git pull
    composer install --no-dev
    composer update --no-dev
    php artisan migrate:fresh --seed --force
    npm install
    npm run prod
    php artisan optimize
    php artisan up
@endtask

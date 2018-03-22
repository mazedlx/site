@servers(['web' => ['maze@mazedlx.net']])

@task('deploy', ['on' => 'web'])
    cd /var/www/html/site
    php artisan down
    git stash
    git pull
    php artisan migrate:fresh --seed
    yarn prod
    php artisan up
    php artisan queue:work &!
@endtask
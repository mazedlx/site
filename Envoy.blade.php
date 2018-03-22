@servers(['web' => ['maze@mazedlx.net']])

@task('deploy', ['on' => 'web'])
    cd /var/www/html/krankenhausbewertung
    php artisan down
    git stash
    git pull
    yarn prod
    php artisan up
    php artisan queue:work &!
@endtask
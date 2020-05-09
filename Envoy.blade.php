@servers(['web' => ['maze@mazedlx.net']])

@story('deploy', ['on' => 'web'])
    cd
    down
    git
    composer
    migrate
    npm
    up
@endstory

@story('quick', ['on' => 'web'])
    cd
    down
    git
    up
@endstory

@task('cd')
    cd /var/www/html/site
@endtask

@task('down')
    php artisan down
@endtask

@task('git')
    git stash
    git pull
@endtask

@task('composer')
    composer install --no-dev
    composer update --no-dev
@endtask

@task('migrate')
    php artisan migrate:fresh --seed --force
@endtask

@task('npm')
    npm install
    npm run prod
@endtask

@task('up')
    php artisan optimize
    php artisan up
@endtask

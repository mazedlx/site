@servers(['web' => ['maze@mazedlx.net']])

@story('deploy')
    htdocs
    down
    git
    composer
    migrate
    npm
    up
@endstory

@story('quick')
    htdocs
    down
    git
    up
@endstory

@task('htdocs')
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

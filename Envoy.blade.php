@servers(['web' => 'mazedlx.net'])

@task('deploy', ['on' => 'web'])
    cd /var/www/html/wer-hat-den-spoe-vorsitz.at
    php artisan down
    git stash
    git pull
    npm install
    npm run build
    composer install --no-dev
    php artisan optimize
    php artisan responsecache:clear
    php artisan up
@endtask

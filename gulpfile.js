//SAS Compiler e PHP-Sync para subpasta no root
// npm install -g gulp
// npm install -g browser-sync
// npm install --save-dev gulp
// npm install --save-dev browser-sync
// npm install --save-dev gulp-connect-php
// npm i browser-sync --save


var gulp = require('gulp');
var browsersync = require('browser-sync').create();
var sass = require('gulp-sass')(require('sass'))
var php = require('gulp-connect-php');   

//Compilar o Sass
gulp.task('sassSD',gulp.series( function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'public/scss/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest("public/css"))
        .pipe(browsersync.stream());

}));

//mover js para src.js 
gulp.task('jsSD',gulp.series( function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.js', 'node_modules/jquery/dist/jquery.js', 'node_modules/@popperjs/core/dist/umd/popper.js'])
        .pipe(gulp.dest("public/js"))
        .pipe(browsersync.stream());

}));

//servidor para olhar os Html /scss
gulp.task('serverSD', gulp.series( ['sassSD'], function() {
    browsersync.init({
        proxy:"http://127.0.0.1:3005",
        https: {
            key: "ssl/server.key",
            cert: "ssl/server.crt"
            },
        baseDir: "./",
        port: 3005

    });
    
    php.server({base:'./', port:3005, keepalive:true});
    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'public/scss/*.scss'], gulp.parallel( ['sassSD']));
    gulp.watch("./**/*.*").on('change',gulp.parallel( browsersync.reload));

}));

// =====================================================
gulp.task('GULP', gulp.series( ['jsSD', 'serverSD']));
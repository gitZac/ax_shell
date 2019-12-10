// SETUP

import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import browserSync from 'browser-sync';
import zip from 'gulp-zip';
import replace from 'gulp-replace';
import info from './package.json';
import { Server } from 'http';

// VARIABLES

const server = browserSync.create();

// BrowserSync

export const spinup = (done) => {
    server.init({
        proxy: 'https://axshell.dev.cc/'
    });
    done();
}

export const reload = (done) => {
    server.reload();
    done();
}

// PATHS

const paths = {
    styles: {
        src:['./sass/style.scss'],
        dest:['./']
    }
}

// BUILDS

export const styles = (done) => {
    return gulp.src(paths.styles.src)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(server.stream());
        
        done();
}

export const watch = () => {
    gulp.watch('./sass/**/*.scss', styles);
    gulp.watch('**/*.php', reload);
}

// EXPORT TASKS

export const dev = gulp.series(spinup, watch);

export default dev;
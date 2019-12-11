/**
 * Load Plugins.
 *
 * Load gulp plugins and assign them semantic names.
 */

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
import autoprefixer from 'gulp-autoprefixer';

/**
 * Configuration.
 *
 * Project Configuration for gulp tasks.
 *
 * Edit the variables as per your project requirements.
 */

const paths = {
    styles: {
        src:['./sass/style.scss'],
        dest:['./']
    },

    scripts: {
        src: ['']
    }
}

const server = browserSync.create();

/**
 * Task: BrowserSync
 *
 * Spinsup the server, sets auto reload
 *
 */

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



/**
 * Task: styles
 *
 * Compiles Sass, Autoprefixes it and Minifies CSS.
 *
 */

export const styles = (done) => {
    return gulp.src(paths.styles.src)
        .pipe(sourcemaps.init() )
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer(
            'last 2 version',
            '> 1%',
            'safari 5',
            'ie 8',
            'ie 9',
            'opera 12.1',
            'ios 6',
            'android 4'            
        ))
        .pipe(sourcemaps.write() )

        .pipe(gulp.dest(paths.styles.dest))
        .pipe(server.stream());
        
        done();
}

/**
 * Task: Scripts
 *
 * Allows module bundling for scripts, and use of ES5 syntax.
 *
 */

export const scripts = (done) => {
    return gulp.src(paths.scripts.src)
        .pipe(named())
        .pipe(webpack({
            module: {
                rules:[
                    {
                        test: /\.js$/,
                        use: {
                            loader: 'babel-loader',
                            options: {
                                presets: ['babel-preset-env']
                            }
                        }
                    }
                ]
            }, 
            output: {
                filename: '[name].js'
            },
            externals:{
                jquery:'jQuery'
            }
        }))
        .pipe(gulp.dest(paths.scripts.dest))
    
        done();
}

/**
 * Task: Watch
 *
 * Watches Sass, SCSS, PHP and JS files for changes and reloads browser.
 *
 */

export const watch = () => {
    gulp.watch('./sass/**/*.scss', styles);
    gulp.watch('**/*.php', reload);
}

// EXPORT TASKS

export const dev = gulp.series(spinup, watch);

export default dev;
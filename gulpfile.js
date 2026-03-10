const { src, dest, series, parallel, watch: gulpWatch } = require("gulp");
const gulp = require("gulp");
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass")(require("sass"));
const webpackStream = require("webpack-stream");
const webpack = require("webpack");
const webpackConfig = require("./webpack.config");
const imageResize = require("gulp-image-resize");

const IMAGE_MAX_WIDTH = 1600;
const IMAGE_QUALITY = 80;

function scssTask() {
  return gulp
    .src("./src/scss/style.scss")
    .pipe(sass({ outputStyle: "expanded" }).on("error", sass.logError))
    .pipe(gulp.dest("./dist/main/css/"))
    .pipe(browserSync.stream());
}

function phpTask() {
  return gulp
    .src("./src/*.php")
    .pipe(gulp.dest("./dist/main/"))
    .pipe(browserSync.stream());
}

function jsTask() {
  return gulp
    .src("./src/js/*.js")
    .pipe(webpackStream(webpackConfig, webpack))
    .pipe(gulp.dest("./"))
    .pipe(browserSync.reload({ stream: true }));
}

function sync(done) {
  browserSync.init({
    proxy: "http://localhost:8000",
    snippetOptions: {
      ignorePaths: ["/wp-admin/**", "/wp-login.php"],
    },
  });
  done();
}

function reload(done) {
  browserSync.reload();
  done();
}

function resizeImages() {
  return src("./src/img/**/*.{jpg,jpeg,png}")
    .pipe(
      imageResize({
        width: IMAGE_MAX_WIDTH,
        quality: IMAGE_QUALITY,
        upscale: false,
      })
    )
    .pipe(dest("./dist/main/img/"));
}

function copyImages() {
  return src("./src/img/**/*.{svg,webp,gif}")
    .pipe(dest("./dist/main/img/"));
}

function imagesTask(done) {
  return parallel(resizeImages, copyImages)(done);
}

function watch(done) {
  gulp.watch("./src/scss/style.scss", scssTask);
  gulp.watch("./src/*.php", phpTask);
  gulp.watch("./src/js/*.js", jsTask);
  gulp.watch("./src/img/**/*", imagesTask);
  done();
}

const dev = series(imagesTask, sync, parallel(watch));

exports.default = dev;

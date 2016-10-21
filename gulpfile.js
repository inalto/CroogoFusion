var gulp = require('gulp');


gulp.task('install', function () {


	gulp.src('./node_modules/syncfusion-javascript/Scripts/**/*').pipe(gulp.dest('./webroot/js/'));
 	gulp.src('./node_modules/syncfusion-javascript/Content/**/*').pipe(gulp.dest('./webroot/css/'));

});

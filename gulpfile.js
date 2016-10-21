var gulp = require('gulp');


gulp.task('install', function () {


	gulp.src('./node_modules/syncfusion-javascript/Scripts/**/*').pipe(gulp.dest('./webroot/js/'));
	gulp.src('./node_modules/jsrender/jsrender.min.js').pipe(gulp.dest('./webroot/js/'));
	gulp.src('./node_modules/jquery/dist/jquery.min.js').pipe(gulp.dest('./webroot/js/'));
	gulp.src('./node_modules/jquery-validation/dist/**/*').pipe(gulp.dest('./webroot/js/jquery-validation/'));

 	gulp.src('./node_modules/syncfusion-javascript/Content/**/*').pipe(gulp.dest('./webroot/css/'));

});

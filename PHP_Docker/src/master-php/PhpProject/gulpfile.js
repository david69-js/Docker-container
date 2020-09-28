const gulp = require('gulp'),
    sass = require('gulp-sass');

    gulp.task('sass', ()=>{

        return gulp.src('./scss/style.scss')
                .pipe(sass({
                    outputStyle: 'expanded',
                }).on('error', sass.logError))
                .pipe(gulp.dest('./assets/css'));
    });

    gulp.task('default', () =>{
       return gulp.watch('./scss/style.scss', gulp.series(['sass']));
    })
/*funciones requeridas en gulp si o si
    gulp.task
    gulp.src();
    gulp.dest();
    gulp.watch();
*/
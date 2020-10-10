import gulp from "gulp";
import yargs from "yargs";
import sass from "gulp-sass";
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import sourcemaps from "gulp-sourcemaps";
import cleanCss from "gulp-clean-css";
import purgecss from "gulp-purgecss";
import purgecssWordpress from "purgecss-with-wordpress";
import gulpif from "gulp-if";
// import imagemin from "gulp-imagemin";
// import del from "del";
// import webpack from "webpack-stream";
// import uglify from "gulp-uglify";
// import browserSync from "browser-sync";

// let server = browserSync.create();
const PROD = yargs.argv.prod;

let paths = {
	styles: {
		src: ["src/style.scss" /* "src/scss/admin.scss" */],
		dest: "build/css",
	},
	// images: {
	// 	src: "src/img/**/*.{jpg,jpeg,png,svg,gif}",
	// 	dest: "public/img",
	// },
	// scripts: {
	// 	src: ["src/js/index.js" /* "src/js/admin.js" */],
	// 	dest: "public/js",
	// },
	// other: {
	// 	src: ["src/**/*", "!src/{img,js,scss}", "!src/{img,js,scss}/**/*"],
	// 	dest: "public",
	// },
	// package: {
	// 	src: [
	// 		"**/*",
	// 		"!node_modules{,/**}",
	// 		"!package{,/**}",
	// 		"!src{,/**}",
	// 		"!.*",
	// 		"!*.md",
	// 		"!gulpfile.babel.js",
	// 		"!package.json",
	// 		"!package-lock.json",
	// 		"!phpcs.xml.dist",
	// 		"!composer.json",
	// 	],
	// 	dest: "package",
	// },
};

// export let serve = (done) => {
// 	server.init({
// 		proxy: "http://genesisstarter.local/", // replace with local dev URL
// 	});
// 	done();
// };

// export let reload = (done) => {
// 	server.reload();
// 	done();
// };

// export let clean = () => del(["public", "package"]);

export let styles = (done) => {
	// return (
	gulp
		.src(paths.styles.src)
		.pipe(gulpif(!PROD, sourcemaps.init()))
		.pipe(sass().on("error", sass.logError))
		.pipe(
			gulpif(
				PROD,
				purgecss({
					content: ["**/*.html"],
					whitelist: purgecssWordpress.whitelist,
					whitelistPatterns: purgecssWordpress.whitelistPatterns,
				})
			)
		)
		.pipe(gulpif(PROD, postcss([autoprefixer()])))
		.pipe(gulpif(PROD, cleanCss({ compatibility: "*" }))) // default ie10 compatibility: https://www.npmjs.com/package/clean-css#compatibility-modes
		.pipe(gulpif(!PROD, sourcemaps.write()))
		.pipe(gulp.dest(paths.styles.dest));
	// );
	done();
	// .pipe(server.stream());
};

// export let images = () => {
// 	return gulp
// 		.src(paths.images.src)
// 		.pipe(gulpif(PROD, imagemin()))
// 		.pipe(gulp.dest(paths.images.dest));
// };

// export let copy = () => {
// 	return gulp.src(paths.other.src).pipe(gulp.dest(paths.other.dest));
// };

export let watch = () => {
	gulp.watch("src/**/*.scss", styles);
	// gulp.watch("src/js/**/*.js", gulp.series(scripts, reload));
	// gulp.watch("**/*.php", reload);
	// gulp.watch(paths.images.src, gulp.series(images, reload));
	// gulp.watch(paths.other.src, gulp.series(copy, reload));
};

// export let scripts = () => {
// 	return gulp
// 		.src(paths.scripts.src)
// 		.pipe(named())
// 		.pipe(
// 			webpack({
// 				module: {
// 					rules: [
// 						{
// 							test: /\.js$/,
// 							use: {
// 								loader: "babel-loader",
// 								options: {
// 									presets: ["@babel/preset-env"],
// 								},
// 							},
// 						},
// 					],
// 				},
// 				output: {
// 					filename: "[name].js",
// 				},
// 				devtool: !PROD ? "inline-source-map" : false,
// 			})
// 		)
// 		.pipe(gulpif(PROD, uglify()))
// 		.pipe(gulp.dest(paths.scripts.dest));
// };

export let dev = gulp.series(
	// clean,
	// gulp.parallel(styles, scripts, images, copy),
	styles,
	// serve,
	watch
);

// export let build = gulp.series(
// 	clean,
// 	gulp.parallel(styles, scripts, images, copy)
// );

export let build = gulp.series(styles);

export default dev;
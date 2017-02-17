/**
 * Project path
 */
let srcDir = 'app',
    publicDir = '..';

export default {
    entries: {
        css: [`./${ srcDir }/css/style.scss`],
        js: [`./${ srcDir }/js/app.js`]
    },
    vendor: {
        js: [
        //'./node_modules/jquery/dist/jquery.js',
        './bower_components/foundation-sites/dist/js/foundation.js',
		'./bower_components/slick-carousel/slick/slick.min.js',
        './bower_components/wow/dist/wow.min.js'
        ]
    },
    all: {
        html: `${ srcDir }/*.html`,
        template: `${ srcDir }/**/*.html`,
        js: `${ srcDir }/js/**/*.js`,
        css: `${ srcDir }/css/**/*.scss`,
        fonts: [`${ srcDir }/fonts/**/*.*`],
        images: `${ srcDir }/images/**/*.{gif,jpg,png,svg}`
    },
    dest: {
        js: `${ publicDir }/js`,
        css: `${ publicDir }/css`,
        html: `${ publicDir }/`,
        fonts: `${ publicDir }/fonts`,
        images: `${ publicDir }/images`
    },
    publicDir: publicDir
}

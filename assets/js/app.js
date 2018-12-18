window.name = "NG_DEFER_BOOTSTRAP!";

require.config({
	baseUrl: "assets/js/",
    paths: {
        'jquery': 'libs/jquery/jquery'
    },

    // shim: {
    //     'jquery.scroll': {
    //         deps: ['jquery'],
    //         exports: 'jQuery.fn.scroll'
    //     }
    // }
});
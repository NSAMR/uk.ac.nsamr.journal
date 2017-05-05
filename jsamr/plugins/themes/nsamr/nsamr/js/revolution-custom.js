/*
 * Revolution custom js file
 * Author: Design_mylife
 * 
 */

//full width slider


jQuery(document).ready(function () {

    revapi = jQuery('.tp-banner').revolution(
            {
                delay: 6000,
                startwidth: 1170,
                startheight: 600,
                hideThumbs: 10,
                fullWidth: "on",
                forceFullWidth: "on",
                navigationStyle: "preview4"
            });

});	//ready
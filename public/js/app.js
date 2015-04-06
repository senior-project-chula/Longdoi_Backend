/*
 *  Document   : app.js
 *  Author     : pixelcave
 *  Description: Custom scripts and plugin initializations
 */

var App = function() {

    /* Initialization UI Code */
    var uiInit = function() {

        // Handle UI
        handleHeader();
        handleMenu();
        scrollToTop();

        // Add the correct copyright year at the footer
        var yearCopy = $('#year-copy'), d = new Date();
        if (d.getFullYear() === 2014) { yearCopy.html('2014'); } else { yearCopy.html('2014-' + d.getFullYear().toString().substr(2,2)); }


        // added by user
        // Initialize Datepicker
        $('.input-datepicker, .input-daterange').datepicker({weekStart: 1});
        $('.input-datepicker-close').datepicker({weekStart: 1}).on('changeDate', function(e){ $(this).datepicker('hide'); });

        // Initialize Typeahead - Example with countries
        var exampleTypeheadData = ["Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antarctica","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Bouvet Island","Brazil","British Indian Ocean Territory","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","CΓ΄te d'Ivoire","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central African Republic","Chad","Chile","China","Christmas Island","Cocos (Keeling) Islands","Colombia","Comoros","Congo","Cook Islands","Costa Rica","Croatia","Cuba","Cyprus","Czech Republic","Democratic Republic of the Congo","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Faeroe Islands","Falkland Islands","Fiji","Finland","Former Yugoslav Republic of Macedonia","France","French Guiana","French Polynesia","French Southern Territories","Gabon","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Heard Island and McDonald Islands","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Martinique","Mauritania","Mauritius","Mayotte","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Niue","Norfolk Island","North Korea","Northern Marianas","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Pitcairn Islands","Poland","Portugal","Puerto Rico","Qatar","RΓ©union","Romania","Russia","Rwanda","SΓ£o TomΓ© and PrΓ­ncipe","Saint Helena","Saint Kitts and Nevis","Saint Lucia","Saint Pierre and Miquelon","Saint Vincent and the Grenadines","Samoa","San Marino","Saudi Arabia","Senegal","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Georgia and the South Sandwich Islands","South Korea","Spain","Sri Lanka","Sudan","Suriname","Svalbard and Jan Mayen","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","The Bahamas","The Gambia","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands","Tuvalu","US Virgin Islands","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","United States Minor Outlying Islands","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Wallis and Futuna","Western Sahara","Yemen","Yugoslavia","Zambia","Zimbabwe"];
        var brokers = ["KKTRADE","FNSYRUS","KTZMICO","AIRA","ASP","KGI","MBKET","PST","AWS","KSS","DBSV","CGS","CNS","BLS","UOBKHST","THANACHART"];
        var stocks = ["AAV","ADVANC","AMATA","ANAN","AOT","AP","BANPU","BAY","BBL","BCH","BCP","BEC","BECL","BDMS","BH","BIGC","BJC","BJCHI","BLAND","BMCL","BTS","CENTEL","CK","CPALL","CPF","CPN","DELTA","DEMCO","DTAC","EARTH","EGCO","ERW","GFPT","GLOBAL","GLOW","GUNKUL","HANA","HEMRAJ","HMPRO","ICHI","INTUCH","IRPC","ITD","IVL","JAS","KBANK","KCE","KKP","KTB","KTC","KTIS","LH","LOXLEY","LPN","M","MAJOR","MC","MEGA","MINT","NOK","PS","PSL","PTG","PTT","PTTEP","PTTGC","QH","RATCH","ROBINS","SAMART","SAWAD","SCB","SCC","SCCC","SF","SGP","SIM","SIRI","SPALI","SPCG","STA","STEC","STPI","SVI","TCAP","THAI","THCOM","THREL","TICON","TISCO","TMB","TOP","TPIPL","TRUE","TTA","TTCL","TTW","TUF","UV","VGI","SET100","SET"];

        $('.input-typeahead').typeahead({ source: exampleTypeheadData });
        $('.input-typeahead-brokers').typeahead({ source: brokers });
        $('.input-typeahead-stocks').typeahead({ source: stocks });
        // end added by user

        // Initialize tabs
        $('[data-toggle="tabs"] a, .enable-tabs a').click(function(e){ e.preventDefault(); $(this).tab('show'); });

        // Initialize Tooltips
        $('[data-toggle="tooltip"], .enable-tooltip').tooltip({container: 'body', animation: false});

        // Initialize Popovers
        $('[data-toggle="popover"], .enable-popover').popover({container: 'body', animation: true});

        // Initialize single image lightbox
        $('[data-toggle="lightbox-image"]').magnificPopup({type: 'image', image: {titleSrc: 'title'}});

        // Initialize image gallery lightbox
        $('[data-toggle="lightbox-gallery"]').each(function(){
            $(this).magnificPopup({
                delegate: 'a.gallery-link',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    arrowMarkup: '<button type="button" class="mfp-arrow mfp-arrow-%dir%" title="%title%"></button>',
                    tPrev: 'Previous',
                    tNext: 'Next',
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
                },
                image: {titleSrc: 'title'}
            });
        });

        // Initialize Placeholder
        $('input, textarea').placeholder();

        // Toggle animation class when an element appears with Jquery Appear plugin
        $('[data-toggle="animation-appear"]').each(function(){
            var $this       = $(this);
            var $animClass  = $this.data('animation-class');
            var $elemOff    = $this.data('element-offset');

            $this.appear(function() {
                $this.removeClass('visibility-none').addClass($animClass);
            },{accY: $elemOff});
        });

        // With CountTo (+ help of Jquery Appear plugin), Check out examples and documentation at https://github.com/mhuggins/jquery-countTo
        $('[data-toggle="countTo"]').each(function(){
            var $this = $(this);

            $this.appear(function() {
                $this.countTo({
                    speed: 1500,
                    refreshInterval: 20,
                    onComplete: function() {
                        if($this.data('after')) {
                            $this.html($this.html() + $this.data('after'));
                        }
                    }
                });
            });
        });

        // With jquery.videoBG, Check out examples and documentation at https://github.com/sydlawrence/jquery.videoBG
         $('.js-video-bg').videoBG({
            mp4: 'img/placeholders/videos/placeholder_video.mp4',
            ogv: 'img/placeholders/videos/placeholder_video.ogv',
            webm: 'img/placeholders/videos/placeholder_video.webm',
            poster: 'img/placeholders/videos/placeholder_video.jpg',
            scale: true,
            zIndex: 0
        });

        // Toggles 'open' class on store menu
        $('.store-menu .submenu').on('click', function(){
           $(this)
               .parent('li')
               .toggleClass('open');
        });
    };

    /* Handles Header */
    var handleHeader = function(){
        var header = $('header');

        $(window).scroll(function() {
            // If the user scrolled a bit (150 pixels) alter the header class to change it
            if ($(this).scrollTop() > header.outerHeight()) {
                header.addClass('header-scroll');
            } else {
                header.removeClass('header-scroll');
            }
        });
    };

    /* Handles Main Menu */
    var handleMenu = function(){
        var sideNav = $('.site-nav');

        $('.site-menu-toggle').on('click', function(){
            sideNav.toggleClass('site-nav-visible');
        });

        sideNav.on('mouseleave', function(){
            $(this).removeClass('site-nav-visible');
        });
    };

    /* Scroll to top functionality */
    var scrollToTop = function() {
        // Get link
        var link = $('#to-top');
        var windowW = window.innerWidth
                        || document.documentElement.clientWidth
                        || document.body.clientWidth;

        $(window).scroll(function() {
            // If the user scrolled a bit (150 pixels) show the link in large resolutions
            if (($(this).scrollTop() > 150) && (windowW > 991)) {
                link.fadeIn(100);
            } else {
                link.fadeOut(100);
            }
        });

        // On click get to top
        link.click(function() {
            $('html, body').animate({scrollTop: 0}, 500);
            return false;
        });
    };

    return {
        init: function() {
            uiInit(); // Initialize UI Code
        }
    };
}();

/* Initialize app when page loads */
$(function(){ App.init(); });
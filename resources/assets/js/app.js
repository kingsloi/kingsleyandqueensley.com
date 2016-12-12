window.$ = window.jQuery = require('jquery');

window.Vue = require('vue');
require('vue-resource');

let Instafeed = require("instafeed.js");

const app = new Vue({
    el: '#app',

    data() {
        return {
            'names': '',
            'success': null,
            'email': '',
            'answer': null,
            'sent': false,
            'errors': {}
        };
    },

    computed: {
        count: function () {
            if (this.names === "") return 0;
            let names = this.names.replace(/,(\s+)?$/, '');
            return names.split(",").length;
        },
        personContext: function () {
            return ((this.count > 1) ? 'we' : 'I');
        }
    },

    methods: {
        toggleCommaInfo: function () {
            $('.people-by-comma').slideToggle();
        },

        rsvp: function () {
            let vm = this;
            if (this.names === "" || this.count === 0) return false;
            this.$http.post('/rsvp', { names: this.names, count: this.count, answer: this.answer, email: this.email })
                .then(this.onComplete.bind(this))
                .catch(this.onError.bind(this));
        },

        onComplete: function (response) {
            if (response.data.success) {
                this.success = true;
                this.sent = true;
                this.errors = {};
            } else {
                this.success = false;
                this.errors = response.data.errors;
            }
        },

        onError: function (response) {
            vm.success = false;
            vm.errors = response.data;
        },
    },

    mounted: function () {

        this.$nextTick(function () {

            /**
             * Scroll events
             */
            $(window).scroll(function () {
                if ($(window).scrollTop() > 0) {
                    $('nav').addClass('scrolled');
                } else {
                    $('nav').removeClass('scrolled');
                }
            });

            /**
             * CSS3 Full backgrounds (hacky but works)
             */
            $('.background-image-holder').each(function () {
                var imgSrc = $(this).children('img').attr('src');
                $(this).css('background', 'url("' + imgSrc + '")');
                $(this).children('img').hide();
                $(this).css('background-position', '50% 50%');
            });

            /**
             * Fade in background images
             */
            setTimeout(function () {
                $('.background-image-holder').each(function () {
                    $(this).addClass('fadeIn');
                });
            }, 200);


            /**
             * Set up Instagram feed
             * @type Instafeed
             */
            var feed = new Instafeed({
                get: 'user',
                userId: '13802239',
                clientId: '4cc4044c1a8a4c3eb55895a60b6879c8',
                accessToken: '13802239.4cc4044.c448ee438a9b47ecb3cf20f2cf70ea91',
                template: '<li style="background-image:url({{image}})"><a href="{{link}}"><img src="{{image}}" /></a></li>'
            });
            feed.run();

        });
    }
});
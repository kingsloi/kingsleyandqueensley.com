<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

        <title>Kingsley and Maddie's Wedding - {!! Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.date'))->format('dS F Y') !!}</title>
        <meta name="description" content="Come Celebrate Kingsley and Maddie's wedding on {!! Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.date'))->format('dS F Y') !!} at the {!! config('wedding.location') . ', ' . config('wedding.location_city') . ', ' . config('wedding.location_state') .' '. config('wedding.location_zip') !!}">

        <meta property="og:title" content="Kingsley and Maddie's Wedding - {!! Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.date'))->format('dS F Y') !!}">
        <meta property="og:description" content="Come Celebrate Kingsley and Maddie's wedding on {!! Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.date'))->format('dS F Y') !!} at the {!! config('wedding.location') . ', ' . config('wedding.location_city') . ', ' . config('wedding.location_state') .' '. config('wedding.location_zip') !!}">
        <meta property="og:image" content="http://kingsleyandqueensley.com/img/kingsley-and-maddie.jpg">
        <meta property="og:url" content="http://kingsleyandqueensley.com">

        <link href="/css/app.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='//fonts.googleapis.com/css?family=Playfair+Display:100,300,400,700%7COpen+Sans' rel='stylesheet' type='text/css'>

    </head>
    <body >
        <div id="app">

            <div class="nav-container">

                <nav class="nav nav-1 transparent light fixed">
                    <a href="/" class="logo">
                        <span>Kingsley &amp; Maddie</span>
                    </a>
                    <ul class="menu">
                        <li><a href="#home" class="inner-link" target="default">home</a></li><li><a href="#story" class="inner-link" target="default">our story</a></li><li><a href="#wedding" class="inner-link" target="default">ceremony</a></li><li><a href="#accomm" class="inner-link" target="default">accommodation</a></li><li><a href="#rsvp" class="inner-link" target="default">rsvp</a></li>
                    </ul>
                    <div class="mobile-toggle">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <div class="line-3"></div>
                    </div>
                </nav>

            </div>

            <div class="main-container">

                <a id="home" class="in-page-link"></a>

                <section class="header header-4 fullscreen overlay">
                    <div class="image-slider">
                        <ul class="slides">
                            <li>
                                <div class="background-image-holder">
                                    <img alt="Background image" class="background-image" src="img/kingsley-and-maddie.jpg">
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center header-text">
                                            <h1>Kingsley &amp; Maddie</h1>
                                            <h6>{!! Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.date'))->format('dS F Y') !!} - {!! config('wedding.location') . ', ' . config('wedding.location_city') . ', ' . config('wedding.location_state') !!}</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </section>

                <a id="story" class="in-page-link"></a>

                <section class="story story-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h1>Our Story</h1>
                                <h6>A serendipitous meeting</h6>
                            </div>
                            <div class="col-sm-6 text-center">
                                <h3>Groom</h3>
                                <p>Originally from <a href="https://en.wikipedia.org/wiki/Tamworth,_Staffordshire">Tamworth, United Kingdom (UK)</a>, a old market town a few miles north of Birmingham, Kingsley grew up in a fairly suburban neighbourhood, doing the traditional British things like drinking tea, eating fish and chips, moaning about the weather, watching Top Gear, loving the queen, and saying sorry after everything. Sorry.</p>
                                <p>In 2011, Kingsley got hired for 12 months as a web developer intern at <a href="http://www.grossbauer.com/">The Grossbauer Group</a>, a marketing company in Chesterton, IN, as part of his university degree. It was during those 12 months that Kingsley developed a love for all things USA 🇺🇸</p>
                                <p>With his own web development business in the UK, Kingsley contracts for clients all over the world. In 2015, Kingsley had the opportunity to visit the USA for 3 months, where he met Maddie&hellip;</p>
                            </div>
                            <div class="col-sm-6 text-center">
                                <h3>Bride</h3>
                                <p>🎶 "Just a small town girl" 🎶 is one way to explain Maddie. Born &amp; raised in good ol' <a href="https://en.wikipedia.org/wiki/Crown_Point,_Indiana">Crown Point, Indiana, USA</a>, doing typical American things like fishing, riding tractors, country line dancing, and cheerleading. She was a cheerleader for 11 years and coached at the high school for 4 years after.</p>
                                <p>Maddie graduated from cosmetology school in 2011 and started working for a LOL (Little Old Lady) salon in Crown Point and hasn't had a bad day since.</p>
                                <p>Maddie loves nothing more than being around her family and to this day loves nothing more than rewinding and watching old Disney Movies on VHS with her sisters on a rainy day.</p>
                                <p>Accepting the fact that she would grow old with her Chihuahua Gus, that is until she met Kingsley&hellip;</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 text-center">
                                <h3>Bride &amp; Groom</h3>
                                <img src="/img/maps.png" class="maps" alt="Birmingham, UK - Crown Point, IN, USA"/>
                                <p>After striking up a converstation in a local supermarket, Kingsley knew from that moment that Maddie would be in his life for a very long time. Agreeing to a date, they bonded over steak and wine.</p>
                                <p>Realising they both lost a parent at an early age, they both began to spot similarities in their lives. However, it wasn't until after the date that they discovered they both had the other half of <a href="http://imgur.com/a/gl0IZ" target="_blank">the same tattoo.</a></p>
                                <p>After a few more dates, they started to become inseparable. Surprising her with a plane ticket to Pennsylvania, Maddie flew to PA to spend a few days with Kingsley and his family before the Christmas holidays.</p>
                                <p>Kingsley had to fly back to the UK. Deciding they couldn't be apart, they gave long distance dating a go. 3948 miles to be exact. Maddie did what most American's dream to do and travelled to Europe. Twice. It was during Maddie's trips to Kingsley that they knew they were each others "the one".</p>
                                <p>Which brings us to {!! Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.date'))->format('F dS') !!}&hellip;</p>
                                <a href="#rsvp" class="btn inner-link" target="default">RSVP Here</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="gallery gallery-2 overlay">
                    <div  class="instafeed" data-user-name="madchambers">
                        <ul id="instafeed"></ul>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <a href="https://www.instagram.com/explore/tags/kingsleyandqueensley">
                                    <h1>#kingsleyandqueensley</h1>
                                    <h6>Share the day on Instagram</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <a id="wedding" class="in-page-link"></a>

                <section class="details details-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img alt="Kingsley &amp; Maddie" src="img/engagement-2.jpg">
                                <img alt="Kingsley &amp; Maddie" src="img/engagement-1.png">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>Ceremony &amp; Reception</h2>
                                <p><b>{!! config('wedding.location') !!}</b><br>Start: {!! Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.date'))->format('g:ia') !!}<br/>Reception Immediately Following Ceremony<br/>Sparkler Send-Off 11:45pm</p><p>{!! config('wedding.location_street') !!}<br>{!! config('wedding.location_city') !!}, {!! config('wedding.location_state') !!}, {!! config('wedding.location_zip') !!}</p>

                                <a href="https://www.google.com/maps/place/Aquatorium/@41.6197191,-87.2592593,17z/data=!3m1!4b1!4m5!3m4!1s0x8811c0e4bcb15a2f:0xbd2b2f8c29670f44!8m2!3d41.6197191!4d-87.2570706" class="btn inner-link" target="default">Google Maps</a>
                            </div>
                        </div>
                    </div>
                </section>

                <a id="accomm" class="in-page-link"></a>

                <section class="accom accom-1 overlay">
                    <div class="background-image-holder parallax">
                        <img alt="Background image" class="background-image" src="img/raddison-merriville.jpg">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h6>Where To Stay?</h6>
                                <h1>Radisson Hotel at Star Plaza</h1>

                                <p>800 E 81st Ave, <br>Merrillville, IN 46410-5646 <br/>(<em>20 mins / 14 miles from venue</em>)</p>
                                <a href="https://www.radisson.com/merrillville-hotel-in-46410/merrillv" class="btn btn-white" target="_blank">Book Your Stay</a>
                            </div>
                        </div>
                    </div>
                </section>


                <a id="rsvp" class="in-page-link"></a>

                <section class="rsvp rsvp-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h1>Say you'll be there</h1>
                                @if(!Carbon\Carbon::now()->gte(Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.rsvp_cutoff'))))
                                    <p>
                                        Please let us know if you can make it by<br> {!! Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.rsvp_cutoff'))->format('dS F') !!} at the latest, please!
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="form-wrapper">
                                    @if(!Carbon\Carbon::now()->gte(Carbon\Carbon::createFromFormat('d/m/Y H:i',config('wedding.rsvp_cutoff'))))

                                    <form class="form-email" v-on:submit.prevent="rsvp" v-if="sent === false">

                                        <div class="form-section">

                                            <div class="names-holder">
                                                <span class="step">1</span>
                                                <input type="email" class="form-control" placeholder="Contact Email" v-model.trim="email"/>
                                            </div>

                                            <div class="names-holder">
                                                <span class="step">2</span>
                                                <input type="text" class="form-control" placeholder="Your Name / All Names" v-model.trim="names" v-on:focus="toggleCommaInfo" v-on:blur="toggleCommaInfo"/>
                                                <div class="people-by-comma">Separate people by a comma (,) please!</div>
                                            </div>

                                            <div class="radio-group">
                                                <span class="step">3</span>
                                                <div class="radio-holder btn"
                                                    v-on:click="answer = true"
                                                    :class="{
                                                        'checked': answer === true
                                                    }"
                                                >
                                                    @{{personContext}} Can't Wait
                                                </div>
                                                <div class="radio-holder btn"
                                                    v-on:click="answer = false"
                                                    :class="{
                                                        'checked': answer === false
                                                    }"
                                                >
                                                    @{{personContext}} Can't Come
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-section">
                                            <button class="btn" type="submit" id="rsvp-btn">
                                                RSVP <span v-show="count > 0">@{{count}} people</span>
                                            </button>
                                        </div>

                                    </form>

                                    <div class="form-feedback">
                                        <div class="form-success" v-if="success === true">
                                            <template v-if="answer === true">
                                                We'll see you soon!
                                            </template>
                                            <template v-else>
                                                Sorry you can't make it :( but thanks for letting us know!
                                            </template>
                                        </div>
                                        <div class="form-error" v-if="success === false">
                                            <ul>
                                                <li v-for="(error, key) in errors">@{{error[0]}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @else
                                        <div class="form-feedback">
                                            <div class="form-error">
                                                RSVP's are now closed, sorry! Try contacting either the bride or groom for help!
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="footer footer-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h6>Made with <span class="heart">❤</span> - Kingsley &amp; Maddie xoxo</h6>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>

        <script src="/js/all.js"></script>

        <script>
            !function(w,e,d,D,i,n,g){w.GoogleAnalyticsObject=d;w[d]||(w[d]=function(){
            (w[d].q=w[d].q||[]).push(arguments)});w[d].l=+new Date;n=e.createElement(D);
            g=e.getElementsByTagName(D)[0];n.src=i;g.parentNode.insertBefore(n,g)}
            (window,document,'ga','script','//www.google-analytics.com/analytics.js');

            ga('create', 'UA-73532243-2', 'auto');
            ga('send', 'pageview');
        </script>

    </body>
</html>
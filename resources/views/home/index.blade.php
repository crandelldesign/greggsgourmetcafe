<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
        <link rel="stylesheet" type="text/css" href="{{url('/css/slick/slick.css')}}">
    </head>
    <body>
        @include('layouts.nav')
        <div class="page home">
            <div class="content container-fluid">

                <div class="alert alert-info">
                    <p class="lead">Gregg's Gourmet Cafe will be closed indefinitely due to smoke damage. Please call E.G. Nick's at <a href="tel:18106646200">810-664-6200</a> for your catoring needs! Thank you for your continued patronage.</p>
                </div>

                <div class="row">
                    <div class="col-sm-5">
                        <div class="logo-container center-block margin-bottom-25">
                            <img src="{{url('/img/greggs-gourmet-cafe-logo.jpg')}}" class="img-responsive logo center-block" alt="Gregg's Gourmet Cafe">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="slideshow">
                            <div class="item"><img srcset="{{url('/img/slideshow/slideshow1@2x.jpg')}} 2x" src="{{url('/img/slideshow/slideshow1.jpg')}}" alt="Gregg's Gourmet Cafe Pizza" class="img-responsive center-block"></div>
                            <div class="item"><img srcset="{{url('/img/slideshow/slideshow2@2x.jpg')}} 2x" src="{{url('/img/slideshow/slideshow2.jpg')}}" alt="Gregg's Gourmet Cafe Salad" class="img-responsive center-block"></div>
                            <div class="item"><img srcset="{{url('/img/slideshow/slideshow3@2x.jpg')}} 2x" src="{{url('/img/slideshow/slideshow3.jpg')}}" alt="Gregg's Gourmet Cafe Breadsticks" class="img-responsive center-block"></div>
                            <div class="item"><img srcset="{{url('/img/slideshow/slideshow4@2x.jpg')}} 2x" src="{{url('/img/slideshow/slideshow4.jpg')}}" alt="Gregg's Gourmet Cafe Pizza" class="img-responsive center-block"></div>
                            <div class="item"><img srcset="{{url('/img/slideshow/slideshow5@2x.jpg')}} 2x" src="{{url('/img/slideshow/slideshow5.jpg')}}" alt="Gregg's Gourmet Cafe Chicken and Ribs" class="img-responsive center-block"></div>
                            <div class="item"><img srcset="{{url('/img/slideshow/slideshow6@2x.jpg')}} 2x" src="{{url('/img/slideshow/slideshow6.jpg')}}" alt="Gregg's Gourmet Cafe Pizza and Breadsticks" class="img-responsive center-block"></div>
                            <div class="item"><img srcset="{{url('/img/slideshow/slideshow7@2x.jpg')}} 2x" src="{{url('/img/slideshow/slideshow7.jpg')}}" alt="Gregg's Gourmet Cafe of Waterford Choir" class="img-responsive center-block"></div>
                        </div>
                        <div class="row" itemscope itemtype="http://schema.org/LocalBusiness">
                            <div class="col-sm-5">
                                <h1 class="homepage-header" itemprop="name"><strong>Gregg's Gourmet Cafe</strong></h1>
                                <address>
                                    <div itemprop="address" typeof="PostalAddress">
                                        <!--<p><a href="tel:+12486256612"><strong>248-625-6612</strong></a></p>-->
                                        <p>Call E.G. Nick's at <strong><a href="tel:18106646200">810-664-6200</a></strong>
                                        <p><span itemprop="streetAddress">5914 S. Main Street (M-15)</span><br>
                                            <span itemprop="addressLocality">Clarkston</span>, <span itemprop="addressRegion">Michigan</span> <span itemprop="postalCode">48346</span></p>
                                    </div>
                                </address>
                            </div>
                            <div class="col-sm-7">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Hours</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr itemprop="openingHours" content="Mo 10:30-21:00">
                                            <td>Monday</td>
                                            <td>10:30am to 9:00pm</td>
                                        </tr>
                                        <tr itemprop="openingHours" content="Tu 10:30-21:00">
                                            <td>Tuesday</td>
                                            <td>10:30am to 9:00pm</td>
                                        </tr>
                                        <tr itemprop="openingHours" content="We 10:30-21:00">
                                            <td>Wednesday</td>
                                            <td>10:30am to 9:00pm</td>
                                        </tr>
                                        <tr itemprop="openingHours" content="Th 10:30-212:00">
                                            <td>Thursday</td>
                                            <td>10:30am to 9:00pm</td>
                                        </tr>
                                        <tr itemprop="openingHours" content="Fr 10:30-22:00">
                                            <td>Friday</td>
                                            <td>10:30am to 10:00pm</td>
                                        </tr>
                                        <tr itemprop="openingHours" content="Sa 10:30-22:00">
                                            <td>Saturday</td>
                                            <td>10:30am to 10:00pm</td>
                                        </tr>
                                        <tr itemprop="openingHours" content="Su 12:00-20:00">
                                            <td>Sunday</td>
                                            <td>12:00pm to 8:00pm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @include('layouts.footer')
            <script type="text/javascript" src="{{ url('/js/default.js') }}"></script>
            <script type="text/javascript" src="{{ url('/js/slick/slick.js') }}"></script>
            <script>
                $(document).ready(function()
                {
                    $('.slideshow').slick({
                        autoplay: true,
                        prevArrow: '<button type="button" class="slideshow-prev"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-angle-left fa-stack-1x"></i></span></button>',
                        nextArrow: '<button type="button" class="slideshow-next"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-angle-right fa-stack-1x"></i></span></button>'
                    });
                    $('.slideshow-prev, .slideshow-next').on('click', function(event)
                    {
                        $('.slideshow').slick('slickPause');
                    });
                });
            </script>
        </div>
    </body>
</html>

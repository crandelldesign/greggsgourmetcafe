<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
    </head>
    <body>
        <div class="page">
            <div class="content container-fluid">

                <div class="logo-container">
                    <img src="{{url('/img/greggs-gourmet-cafe-logo.jpg')}}" class="img-responsive logo center-block">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h1>Color Palette</h1>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="color-swatch swatch1">
                                    Crimson<br>
                                    #ED2D38
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch2">
                                    Green Pea<br>
                                    #245E36
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch3">
                                    Black<br>
                                    #00000
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch4">
                                    Blue<br>
                                    #0000F9
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch5">
                                    Sangria<br>
                                    #A00008
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch6">
                                    English Holly<br>
                                    #043011
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h1>Buttons</h1>

                        <button class="btn btn-lg btn-greenpea">This is a large button</button>&nbsp;

                        <div class="visible-xs-block margin-bottom-10"></div>

                        <button class="btn btn-sangria">This is another smaller button</button>

                        <hr class="visible-xs-block">

                    </div>
                    <div class="col-sm-6">
                        <h1>Typography</h1>

                        <h1>Heading 1</h1>
                        <p class="details">Font: Helvetica #245E36</p>

                        <hr>

                        <h2>Heading 2</h2>
                        <p class="details">Font: Helvetica #00746b</p>

                        <hr>

                        <h3>Heading 3</h3>
                        <p class="details">Font: Helvetica #000000</p>

                        <hr>

                        <p>Body Text</p>
                        <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
                        <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

                        <p><a href="#">This is a link</a> - <a href="#" class="hover">This is a hover link</a></p>

                        <p class="details">Font: Helvetica #000000</p>
                    </div>
                </div>

            </div>
            @include('layouts.footer')
            <script type="text/javascript" src="{{ url('/js/default.js') }}"></script>
        </div>
    </body>
    
</html>
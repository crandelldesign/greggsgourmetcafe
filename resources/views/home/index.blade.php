@extends('layouts.default')

@section('head')
<link rel="stylesheet" type="text/css" href="{{'/css/slick/slick.css'}}">
@stop

@section('content')



@stop

@section('scripts')
<script>
    $(document).ready(function()
    {
        $('.slideshow').slick({
            autoplay: true,
            prevArrow: '<button type="button" class="slideshow-prev"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-angle-left fa-stack-1x"></i></span></button>',
            nextArrow: '<button type="button" class="slideshow-next"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-angle-right fa-stack-1x"></i></span></button>'
        });
    });
</script>
@stop
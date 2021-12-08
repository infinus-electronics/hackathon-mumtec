@extends('layouts.app')

@section('content')
    @include('layouts.headers.app-head')
    
    <H1 class="text-center">CLICK THE MAIL ICON TO CHAT WITH ME</H1>
    <img style="display: block;margin-left: auto;margin-right: auto;width: 50%;position:absolute;" src="https://i.pinimg.com/736x/02/b1/3c/02b13cd6e197d1456c42792a71b7cb75.jpg" alt="Picture" class="center">

    
    <script>
        var botmanWidget = {
            aboutText: 'ssdsd',
            introMessage: "✋ Hi! I'm Yoong Ken, yes, that guy. :) Thanks for reaching out! How may I help you? Science, History, or how to bancuh kopi?"
        };
    </script>
    
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    
@endsection

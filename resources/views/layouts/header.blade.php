<div class="flex-center position-ref full-height container">
    <div>
        <li style="display:inline-flex; float:right; margin-right:2em;">
            <a href="{{ route('change_lang', ['lang' => 'es']) }}"> <img src='{{ asset('images/idiomas/castellano.png') }}' class='img-responsive ' style='margin-right: 6px; margin-top:0.2em; height:29px; width: 30px;' /></a>
            <a href="{{ route('change_lang', ['lang' => 'en']) }}"><img src='{{ asset('images/idiomas/ingles.png') }}' class='img-responsive' style=' margin-right: 6px; height:35px; width: 30px;' /></a>
            <a href="{{ route('change_lang', ['lang' => 'eu']) }}"><img src='{{ asset('images/idiomas/euskera.png') }}' class='img-responsive' style=' margin-right: 6px; height:35px; width: 30px;' /></a>
        </li>
    </div>

    <div class="links">
        <a href="{{ route('index') }}">@lang('lang.home')</a>
    </div>
</div>
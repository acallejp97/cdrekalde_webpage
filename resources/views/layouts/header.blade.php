<nav>
    <div class="logo" >
        <a href="{{ route('index') }}"><img src="{{ URL::asset('images/logo.png') }}"></a>
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a href="#video-intro" class="active" >@lang('lang.'.$titulo)</a></li>
        <li><a href="#circle-section">@lang('lang.activities')</a></li>
        <li><a href="#description">@lang('lang.description')</a></li>
        <li><a href="#calendar">@lang('lang.schedules')</a></li>
        <li class="lang">
            @if (App::getLocale() != 'es')
                <a href="{{ route('change_lang', ['lang' => 'es']) }}"> <img src='{{ asset('images/idiomas/castellano.png') }}' /></a>
            @endif
            @if (App::getLocale() != 'en')
                <a href="{{ route('change_lang', ['lang' => 'en']) }}"><img src='{{ asset('images/idiomas/ingles.png') }}' /></a>
            @endif
            @if (App::getLocale() != 'eu')
                <a href="{{ route('change_lang', ['lang' => 'eu']) }}"><img src='{{ asset('images/idiomas/euskera.png') }}' /></a>
            @endif
        </li>
    </ul>
</nav>

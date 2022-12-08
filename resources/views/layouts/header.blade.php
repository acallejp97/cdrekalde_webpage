<nav>
    <div class="logo">
        <a href="{{ route('index') }}"><img src="{{ URL::asset('images/logos/logo.png') }}"></a>
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a href="#home" class="active" onclick="closeMenu()">@lang('lang.' . $titulo)</a></li>
        <li><a href="#circle-section" onclick="closeMenu()">@lang('lang.activities')</a></li>
        <li><a href="#description" onclick="closeMenu()">@lang('lang.description')</a></li>
        <li><a href="#calendar" onclick="closeMenu()">@lang('lang.schedules')</a></li>
        <li class="lang">
            @if (App::getLocale() != 'es')
                <a href="{{ route('change_lang', ['lang' => 'es']) }}" onclick="closeMenu()"> <img
                        src='{{ asset('images/idiomas/castellano.png') }}' /></a>
            @endif
            @if (App::getLocale() != 'en')
                <a href="{{ route('change_lang', ['lang' => 'en']) }}" onclick="closeMenu()"><img
                        src='{{ asset('images/idiomas/ingles.png') }}' /></a>
            @endif
            @if (App::getLocale() != 'eu')
                <a href="{{ route('change_lang', ['lang' => 'eu']) }}" onclick="closeMenu()"><img
                        src='{{ asset('images/idiomas/euskera.png') }}' /></a>
            @endif
        </li>
    </ul>
</nav>
<script>
    function closeMenu() {
        document.getElementById("click").checked = false;
    }
</script>

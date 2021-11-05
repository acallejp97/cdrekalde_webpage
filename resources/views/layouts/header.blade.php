<nav>
    <div class="logo">
        <img src="{{ URL::asset('images/logo.png') }}">
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a class="active" href="{{ route('index') }}">@lang('lang.'.$titulo)</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Gallery</a></li>
        <li class="lang">
            <a href="{{ route('change_lang', ['lang' => 'es']) }}"> <img src='{{ asset('images/idiomas/castellano.png') }}' /></a>
            <a href="{{ route('change_lang', ['lang' => 'en']) }}"><img src='{{ asset('images/idiomas/ingles.png') }}' /></a>
            <a href="{{ route('change_lang', ['lang' => 'eu']) }}"><img src='{{ asset('images/idiomas/euskera.png') }}' /></a>
        </li>
    </ul>
</nav>

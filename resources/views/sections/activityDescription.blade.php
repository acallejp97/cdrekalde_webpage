    <div id="description" class="text-center mb-3">
        <h2>
        @if($titulo !== 'karate')
            @lang('lang.description-'.$titulo)
        @else
            @lang('lang.description-'.$titulo.'-adulto')
            <br/>
            @lang('lang.description-'.$titulo.'-infantil')
        @endif
    </h2>
    <img src="{{asset('images/entrada.png')}}" alt="entrada" class="mb-3">
    </div>

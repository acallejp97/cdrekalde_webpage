    <div id="description" class="title m-b-md">
        @if($titulo !== 'karate')
            @lang('lang.description-'.$titulo)
        @else
            @lang('lang.description-'.$titulo.'-adulto')
            <br/>
            @lang('lang.description-'.$titulo.'-infantil')
        @endif
    </div>
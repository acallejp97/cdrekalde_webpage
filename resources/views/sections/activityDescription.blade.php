    <div id="description" class="text-center mb-3 container-fluid">
    <h1>@lang('lang.'.$titulo)</h1>
    <p>
        @if($titulo !== 'karate')
            @lang('lang.description-'.$titulo)
        @else
            @lang('lang.description-'.$titulo.'-adulto')
            <br/>
            @lang('lang.description-'.$titulo.'-infantil')
        @endif
    </p>
	</div>


    		<div class="owl-carousel owl-theme">
    			<div class="img-wrapper">
    				<img src="{{asset('images/entrada.png')}}" alt="entrada" class="mb-3">
				</div>
    			<div class="img-wrapper">
    				<img src="{{asset('images/entrada.png')}}" alt="entrada" class="mb-3">
				</div>
    			<div class="img-wrapper">
    				<img src="{{asset('images/entrada.png')}}" alt="entrada" class="mb-3">
				</div>
    			<div class="img-wrapper">
    				<img src="{{asset('images/entrada.png')}}" alt="entrada" class="mb-3">
				</div>
			</div>

@php ($activities = ['karate-infantil','karate-adulto', 'aikido', 'kickboxing', 'pilates', 'defensapersonal']) @endphp

<div id="circle-section">
        @foreach ($activities as $activity)
        <div class="item text-center">
            <div class='button-image'>
                <a href="{{ route($activity)}}"><img src="images/logos/{{$activity}}-logo.png" alt=""></a>
            </div>
            <a href="{{ route($activity)}}"><h2 class='text'>@lang('lang.'.$activity)</h2></a>
        </div>
        @endforeach
</div>

@php ($activities = ['karate', 'aikido', 'kickboxing', 'pilates', 'espaldasana']) @endphp

<div id="circle-section">
        @foreach ($activities as $activity)
        <div class="item text-center">
            <div class='button-image' href="{{ route($activity)}}">
                <img src="images/{{$activity}}-circle.png" alt="">
            </div>
            <a href="{{ route($activity)}}"><h2 class='text'>@lang('lang.'.$activity)</h2></a>
        </div>
        @endforeach
</div>

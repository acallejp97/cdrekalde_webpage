@php ($activities = ['karate', 'aikido', 'kickboxing', 'pilates', 'espaldasana']) @endphp

<div id="circle-section" class="container-fluid">
    <div class="row">
        @foreach ($activities as $activity)
        <div class="col-lg-3 col-md-6">
            <div class='button-image' href="{{route($activity)}}" style='background: url(images/{{$activity}}-circle.png) no-repeat 100% 50%;'>
                <div href="{{route($activity)}}" class='text'>@lang('lang.'.$activity)</div>
            </div>
        </div>
        @endforeach
    </div>
</div>

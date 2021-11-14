@php $colors = array(
    'pilates' => '#277da1',
    'espaldasana' => '#4d908e',
    'karate-infantil' => '#f9c74f',
    'karate-joven' => '#f8961e',
    'karate-adulto' => '#f3722c',
    'kickboxing' => '#f94144',
    'aikido' => '#f9844a',
);
@endphp

<div class="calendar">
    <header>
        <div style="align-self: flex-start; flex: 0 0 1"></div>
        <div class="calendar__title" style="display: flex; justify-content: center; align-items: center">
          <h1 class="" style="flex: 1;"><span></span><strong>@lang('lang.horarios')</strong></h1>
        </div> 
        <div style="align-self: flex-start; flex: 0 0 1"></div>
    </header>
    <div class="outer">
    <table>
        <thead>
            <tr>
                <th class="headcol"></th>
                <th>@lang('lang.lunes')</th>
                <th>@lang('lang.martes')</th>
                <th>@lang('lang.miercoles')</th>
                <th>@lang('lang.jueves')</th>
                <th>@lang('lang.viernes')</th>
            </tr>
        </thead>
    </table>
  <div class="wrap"> 
    <table class="offset">
    <tbody>
    <tr>
        <td class="headcol"></td>
        @if($titulo == 'pilates' || $titulo=='home')
         <td><div class="event double" style="background-color:{{ $colors["pilates"] }}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>10:30–11:30 @lang('lang.pilates')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'espaldasana' || $titulo=='home')
        <td><div class="event double" style="background-color:{{ $colors["espaldasana"] }}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>10:30–11:30 @lang('lang.espaldasana')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'pilates' || $titulo=='home')
        <td><div class="event double" style="background-color:{{ $colors["pilates"] }}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>10:30–11:30 @lang('lang.pilates')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'espaldasana' || $titulo=='home')
        <td><div class="event double" style="background-color:{{ $colors["espaldasana"] }}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>10:30–11:30 @lang('lang.espaldasana')</div></td>
        @else
        <td></td>
        @endif
        
        <td></td>
      </tr>
      <tr>
        <td class="headcol">11:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol">17:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol">18:00</td>
        @if($titulo == 'karate' || $titulo=='home')
        <td><div class="event double" style="background-color: {{ $colors["karate-infantil"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>18:00–19:00 @lang('lang.karate-infantil')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'aikido' || $titulo=='home')
        <td><div class="event cuadruple" style="background-color: {{ $colors["aikido"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>18:00–20:00 @lang('lang.aikido')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'karate' || $titulo=='home')
        <td><div class="event double" style="background-color: {{ $colors["karate-infantil"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>18:00–19:00 @lang('lang.karate-infantil')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'aikido' || $titulo=='home')
        <td><div class="event cuadruple" style="background-color: {{ $colors["aikido"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>18:00–20:00 @lang('lang.aikido')</div></td>
        @else
        <td></td>
        @endif
        <td></td>
      </tr>
      <tr>
        <td class="headcol"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol">19:00</td>
        @if($titulo == 'karate' || $titulo=='home')
        <td><div class="event double" style="background-color: {{ $colors["karate-joven"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>19:00-20:00 @lang('lang.karate-joven')</div></td>
        @else
        <td></td>
        @endif
        <td></td>
        @if($titulo == 'karate' || $titulo=='home')
        <td><div class="event double" style="background-color: {{ $colors["karate-joven"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>19:00-20:00 @lang('lang.karate-joven')</div></td>
        @else
        <td></td>
        @endif
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol">20:00</td>
        @if($titulo == 'karate' || $titulo=='home')
        <td><div class="event double" style="background-color:  {{ $colors["karate-adulto"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>20:00-21:00 @lang('lang.karate-adulto')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'kickboxing' || $titulo=='home')
        <td><div class="event cuadruple" style="background-color:  {{ $colors["kickboxing"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>20:00-22:00 @lang('lang.kickboxing')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'karate' || $titulo=='home')
        <td><div class="event double" style="background-color:  {{ $colors["karate-adulto"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>20:00-21:00 @lang('lang.karate-adulto')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'kickboxing' || $titulo=='home')
        <td><div class="event cuadruple" style="background-color:  {{ $colors["kickboxing"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>20:00-22:00 @lang('lang.kickboxing')</div></td>
        @else
        <td></td>
        @endif
        @if($titulo == 'karate' || $titulo=='home')
        <td><div class="event double" style="background-color:  {{ $colors["karate-adulto"]}}"><input id="check" type="checkbox" class="checkbox" /><label for="check"></label>20:00-21:00 @lang('lang.karate-adulto')</div></td>
        @else
        <td></td>
        @endif
    </tr>
      <tr>
        <td class="headcol"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol">21:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="headcol">22:00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>
  </div>
  
@php
    $colors = [
        'pilates' => '#277da1',
        'defensapersonal' => '#4d908e',
        'karate-infantil' => '#f9c74f',
        'karate-joven' => '#f8961e',
        'karate-adulto' => '#f3722c',
        'kickboxing' => '#f94144',
        'aikido' => '#f9844a',
    ];
@endphp

<div id="calendar" class="calendar">
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
            <table>
                <tbody>
                    <tr>
                        <td class="headcol"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="headcol">10:00</td>
                        <td></td>
                        @if ($titulo == 'defensapersonal' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color:{{ $colors['defensapersonal'] }}">
                                    <input id="check_defensapersonal_martes" type="checkbox" class="checkbox" /><label
                                        for="check_defensapersonal_martes"></label>10:00-11:00 @lang('lang.defensapersonal')
                                </div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        <td></td>
                        @if ($titulo == 'defensapersonal' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color:{{ $colors['defensapersonal'] }}">
                                    <input id="check_defensapersonal_jueves" type="checkbox" class="checkbox" /><label
                                        for="check_defensapersonal_jueves"></label>10:00-11:00 @lang('lang.defensapersonal')
                                </div>
                            </td>
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
                        <td class="headcol">11:00</td>
                        <td class="separator"></td>
                        <td class="separator"></td>
                        <td class="separator"></td>
                        <td class="separator"></td>
                        <td class="separator"></td>
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
                        @if ($titulo == 'defensapersonal' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color:{{ $colors['defensapersonal'] }}">
                                    <input id="check_defensapersonal_martes_tarde" type="checkbox" class="checkbox" /><label
                                        for="check_defensapersonal_martes_tarde"></label>17:00-18:00 @lang('lang.defensapersonal')
                                </div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        <td></td>
                        @if ($titulo == 'defensapersonal' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color:{{ $colors['defensapersonal'] }}">
                                    <input id="check_defensapersonal_jueves_tarde" type="checkbox" class="checkbox" /><label
                                        for="check_defensapersonal_jueves_tarde"></label>17:00-18:00 @lang('lang.defensapersonal')
                                </div>
                            </td>
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
                        <td class="headcol">18:00</td>
                        @if ($titulo == 'karate-infantil' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color: {{ $colors['karate-infantil'] }}">
                                    <input id="check_karate_infantil_lunes" type="checkbox" class="checkbox" /><label
                                        for="check_karate_infantil_lunes"></label>18:00-19:00 @lang('lang.karate-infantil')
                                </div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        @if ($titulo == 'aikido' || $titulo == 'home')
                            <td>
                                <div class="event cuadruple" style="background-color: {{ $colors['aikido'] }}"><input
                                        id="check_aikido_martes" type="checkbox" class="checkbox" /><label
                                        for="check_aikido_martes"></label>18:00-20:00 @lang('lang.aikido')</div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        @if ($titulo == 'karate-infantil' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color: {{ $colors['karate-infantil'] }}">
                                    <input id="check_karate_infantil_miercoles" type="checkbox" class="checkbox" /><label
                                        for="check_karate_infantil_miercoles"></label>18:00-19:00 @lang('lang.karate-infantil')
                                </div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        @if ($titulo == 'aikido' || $titulo == 'home')
                            <td>
                                <div class="event cuadruple" style="background-color: {{ $colors['aikido'] }}"><input
                                        id="check_aikido_jueves" type="checkbox" class="checkbox" /><label
                                        for="check_aikido_jueves"></label>18:00-20:00 @lang('lang.aikido')</div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        @if ($titulo == 'karate-infantil' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color: {{ $colors['karate-infantil'] }}">
                                    <input id="check_karate_infantil_viernes" type="checkbox" class="checkbox" /><label
                                        for="check_karate_infantil_viernes"></label>18:00-19:30 @lang('lang.karate-infantil')
                                </div>
                            </td>
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
                        <td class="headcol">19:00</td>
                        @if ($titulo == 'karate-infantil' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color: {{ $colors['karate-joven'] }}"><input
                                        id="check_karate_joven_lunes" type="checkbox" class="checkbox" /><label
                                        for="check_karate_joven_lunes"></label>19:00-20:00 @lang('lang.karate-joven')</div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        <td></td>
                        @if ($titulo == 'karate-infantil' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color: {{ $colors['karate-joven'] }}">
                                    <input id="check_karate_joven_miercoles" type="checkbox" class="checkbox" /><label
                                        for="check_karate_joven_miercoles"></label>19:00-20:00 @lang('lang.karate-joven')
                                </div>
                            </td>
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
                        @if ($titulo == 'karate-adulto' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color:  {{ $colors['karate-adulto'] }}">
                                    <input id="check_karate_adulto_lunes" type="checkbox" class="checkbox" /><label
                                        for="check_karate_adulto_lunes"></label>20:00-21:00 @lang('lang.karate-adulto')
                                </div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        @if ($titulo == 'kickboxing' || $titulo == 'home')
                            <td>
                                <div class="event cuadruple" style="background-color:  {{ $colors['kickboxing'] }}">
                                    <input id="check_kickboxing_martes" type="checkbox" class="checkbox" /><label
                                        for="check_kickboxing_martes"></label>20:00-22:00 @lang('lang.kickboxing')
                                </div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        @if ($titulo == 'karate-adulto' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color:  {{ $colors['karate-adulto'] }}">
                                    <input id="check_karate_adulto_miercoles" type="checkbox" class="checkbox" /><label
                                        for="check_karate_adulto_miercoles"></label>20:00-21:00 @lang('lang.karate-adulto')
                                </div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        @if ($titulo == 'kickboxing' || $titulo == 'home')
                            <td>
                                <div class="event cuadruple" style="background-color:  {{ $colors['kickboxing'] }}">
                                    <input id="check_kickboxing_jueves" type="checkbox" class="checkbox" /><label
                                        for="check_kickboxing_jueves"></label>20:00-22:00 @lang('lang.kickboxing')
                                </div>
                            </td>
                        @else
                            <td></td>
                        @endif
                        @if ($titulo == 'karate-adulto' || $titulo == 'home')
                            <td>
                                <div class="event double" style="background-color:  {{ $colors['karate-adulto'] }}">
                                    <input id="check_karate_adulto_viernes" type="checkbox" class="checkbox" /><label
                                        for="check_karate_adulto_viernes"></label>20:00-21:00 @lang('lang.karate-adulto')
                                </div>
                            </td>
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

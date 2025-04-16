@props(['size'=>'base'])
@php

$classes="bg-white/15 hover:bg-white/30 px-3 py-1 rounded-xl text-2xs font-bold transition-colors duration-300";
 if($size=='base'){
    $classes .=" px-5 py-1 text-sm";
 }
 if($size == 'small'){
    $classes.= " px-3 py-1 text-xs";
 }
   
@endphp

<a href="" class="{{$classes}}">{{$slot}}</a>
@php
    $class ??=null;
@endphp
<div @class(["form-checbox form-switch",$class])>
    <input type="hidden" value="0" name="{{ $name }}">
    <input @checked(old($name,$value ?? false)) type="checkbox" name="{{ $name }}" value="1" class="form-check-input @error($name) is-invalid @enderror" role="switch" id="{{ $name }}">
    <label class="form-check-label" for="{{ $name }}">{{$label}}</label>


</div>
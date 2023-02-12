<div>
    <label class="form-label" for="{{$name}}">{{$label}}</label>
    <textarea class="form-control" placeholder="{{Str::headline($placeholder)}}" id="{{$name}}" name="{{$name}}" rows="3">{{$value==='' ? old($name) : $value}}</textarea>
    @error($name)
    <div id="{{$name. "-error"}}" class="text-danger form-text">
      {{$message}}
    </div>
    @enderror
    
    
    @if ($note!=='')
    <div id="{{$name. "-note"}}" class="form-text">
      {{$note}}
    </div>
    @endif
</div>
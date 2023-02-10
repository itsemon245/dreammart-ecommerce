<div class="{{$class}}">
    <label class="form-label" for="{{$name}}">{{$label}}</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">{!!$symbol!!}</span>
        <input type="{{$type}}" class="form-control" name="{{$name}}" id="{{$name}}" value="{{$value==='' ? old($name) : $value}}" placeholder="{{Str::headline($placeholder)}}"/>
    </div>
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
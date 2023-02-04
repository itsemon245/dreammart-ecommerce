<div class="mb-3">
    <label class="form-label" for="{{$name}}">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id="{{$name}}" value="{{old($name)}}" placeholder="{{ Str::is('*@*.com', $placeholder) ? Str::lower($placeholder) : Str::headline($placeholder)}}"/>
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
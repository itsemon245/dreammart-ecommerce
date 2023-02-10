<div class="mb-3">
    <label class="form-label" for="{{$name}}">{{$label}}</label>
    <select class="form-select" name="{{$name}}" id="{{$name}}" aria-label="{{$placeholder}}">
      <option selected disabled>{{Str::headline($placeholder)}}</option>
      @if (count($options)>0)
      @foreach ($options as $option)
      <option value="{{$option->id}}">{{$option->name}}</option>
      @endforeach
      @else
        <option>Null</option>
      @endif
    </select>
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
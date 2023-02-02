<div class="mb-3">
    <label class="form-label" for="username">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder}}">
    @if ($note!=='')
    <div id="{{$name. "-note"}}" class="form-text">
      {{$note}}
    </div>
    @endif
</div>
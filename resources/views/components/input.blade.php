@props(['name','label','type'])
<div class="mb-3">
    <label>{{$label}}</label>
    <input name="{{$name}}" type="{{$type}}" class="form-control" {{$attributes}}>
    @error($name)
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
@foreach ($lesson as $less)
<form action="/api/lesson/{$less->lesson_id}" method="GET">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
    <input type="submit" value="{{$less->status}}">
    <input type="submit" value="{{$less->user_id}}">
    <input type="submit" value="{{$less->subject_id}}">
    </div>
</form>
@endforeach
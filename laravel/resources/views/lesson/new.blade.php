<form action="/api/lesson/new" method="POST">
    {{csrf_field()}}
   
    <div class="form-group">
        <input type="text" name="status" placeholder="status">
    </div>

    <div class="form-group">
        <input type="text" name="subject_id" placeholder="User_id">
    </div>

    <div class="form-group">
        <input type="text" name="user_id" placeholder="Subject_id">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">felvisz</button>
</form>
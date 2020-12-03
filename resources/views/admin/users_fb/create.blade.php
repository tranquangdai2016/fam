@extends('admin.layout.admin')

@section('content')
<form action="">
    <div class="form-group">
        <label for="exampleInput">uid</label>
        <input type="text" class="form-control" id="exampleInput" placeholder="input uid" name="uid">
    </div>
    <div class="form-group">
        <label for="exampleInput">Mật khẩu</label>
        <input type="password" class="form-control" id="exampleInput" placeholder="input uid" name="pass_word">
    </div>
    <div class="form-group">
        <label for="exampleInput">Tên</label>
        <input type="text" class="form-control" id="exampleInput" placeholder="input uid" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInput">Ngày sinh</label>
        <input type="date" class="form-control" id="exampleInput" placeholder="input uid" name="date_of_birth">
    </div>
    <div class="form-group">
        <label for="exampleInput">bạn bè</label>
        <input type="number" class="form-control" id="exampleInput" placeholder="input uid" name="friend">
    </div>
    <div class="form-group">
        <label for="exampleInput">ngày nhập</label>
        <input type="text" class="form-control" id="exampleInput" placeholder="input uid" name="date_input">
    </div>
    <div class="form-group">
        <label for="exampleInput"> acess token</label>
        <input type="text" class="form-control" id="exampleInput" placeholder="input uid" name="remember_token">
    </div>
    <div class="form-check">
        <label class="form-check-label">
        <input type="radio" class="form-check-input" name="status" id="" value="0">
        die
        <input type="radio" class="form-check-input" name="status" id="" value="checkedValue" checked>
        live
      </label>
    </div>
</form>
@endsection
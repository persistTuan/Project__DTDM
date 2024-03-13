@extends("layouts.app")

@section("title", "create KhachHang")

@section("content")

<form class="mx-5" method="post" action="{{route('khachHangs.store')}}">
    @csrf
    @method("post")
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Tên Khách hàng</label>
        <div class="col-sm-10">
            <input name="KhachHang_name" type="input" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input name="KhachHang_password" type="input"  class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">phone</label>
        <div class="col-sm-10">
            <input name="KhachHang_phone" type="input"  class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input name="KhachHang_email" type="input" class="form-control" id="name">
        </div>
    </div>
    
    <button name="submit_eidtKhachHang" type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
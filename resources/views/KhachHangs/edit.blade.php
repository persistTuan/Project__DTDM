@extends("layouts.app")

@section("title", "edit woman")

@section("content")

<form class="mx-5" method="post" action="{{route('khachHangs.update', $khachHang->id)}}">
    @csrf
    @method("PUT")
    <div class="mb-3 row">
        <label for="id" class="col-sm-2 col-form-label">Id khachHangs</label>
        <div class="col-sm-10">
            <input readonly name="idkhachHang" type="input" value="{{$khachHang->id}}" class="form-control" id="id">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name Khách hàng</label>
        <div class="col-sm-10">
            <input name="khachHang_name" type="input" value="{{$khachHang->name}}" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Pass</label>
        <div class="col-sm-10">
            <input name="khachHang_password" type="input" value="{{$khachHang->password}}" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
            <input name="khachHang_phone" type="input" value="{{$khachHang->phone}}" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input name="khachHang_email" type="input" value="{{$khachHang->email}}" class="form-control" id="name">
        </div>
    </div>

    <button name="submit_eidtkhachHang" type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
@extends("layouts.app")

@section("title", "khachHang")

@section("content")

<div class="menu p-5">
    @php
    $message = session('message');
    $type = session('type');
    @endphp

    @if($message)
    <div class="alert alert-{{ $type }}">{{ $message }}</div>
    @endif
    <a class="btn btn-success mb-3" href="{{route('khachHangs.create')}}">Thêm mới</a>
    <table class=" table table-striped  table-bordered">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($khachHangs as $khachHang)
            <tr>
                <td style="word-wrap: break-word;" scope="row">{{$khachHang->name}}</td>
                <td style="word-wrap: break-word;" scope="row">{{$khachHang->phone}}</td>
                <td style="word-wrap: break-word;" scope="row">{{$khachHang->email}}</td>
                <td>
                    <div class="d-flex justify-content-between align-content-center" role="group"
                        aria-label="Basic mixed styles example">
                        <a class="btn btn-primary me-2" href="{{route('khachHangs.show', $khachHang->id)}}"><i
                                class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-warning me-2" href="{{route('khachHangs.edit', $khachHang->id)}}"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <button type="button" class="btn btn-danger border-0" data-bs-toggle="modal"
                            data-bs-target="#modalId{{$khachHang->id}}"><i class="fa-solid fa-trash"></i></button>
                        <!-- <button type="button" class="btn btn-success">Right</button> -->
                    </div>
                </td>
            </tr>

            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <form method="post" action="{{route('khachHangs.destroy', $khachHang->id)}}">
                @csrf
                @method('delete')
                <div class="modal fade" id="modalId{{$khachHang->id}}" tabindex="-1" data-bs-backdrop="static"
                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want delete this....?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            @endforeach
            <!-- Optional: Place to the bottom of scripts -->
            <script>
            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
            </script>

        </tbody>
    </table>
</div>

@endsection
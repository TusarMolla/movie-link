@extends('elements.master')

@section('content')
    <div class="col-6 offset-3 card p-3 mt-5">
        <form action="category-store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">

                <div class="mb-3">
                    <label for="nameInput" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="nameInput" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image Upload</label>
                    <input name="imagefile" class="form-control" type="file" id="formFile">
                  </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>



        </form>
    </div>
@endsection


@section('script')
    <script></script>
@endsection

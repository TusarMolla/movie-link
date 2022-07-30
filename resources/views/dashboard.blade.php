
@extends("elements.master")

@section("content")

<div >

    <a class="mt-5 p-5 btn bg-success  col-4 offset-4 card" href="{{url('/create-movie-link')}}">
        <h4 class="m-auto text-light fw-bold">Add Mivew Link</h4>
    </a>
    <a class="mt-5 p-5 btn bg-info col-4 offset-4 card" href="{{url('/movie-link-list')}}">
        <h4 class="m-auto text-light fw-bold">View Movie Link</h4>
    </a>

    <a class="mt-5 p-5 btn bg-info col-4 offset-4 card" href="{{url('/create-category')}}">
        <h4 class="m-auto text-light fw-bold">Create Category</h4>
    </a>


    <a class="mt-5 p-5 btn bg-info col-4 offset-4 card" href="{{url('/category-list')}}">
        <h4 class="m-auto text-light fw-bold">View Categorys</h4>
    </a>



</div>



@endsection


@section("script")

<script>

</script>

@endsection

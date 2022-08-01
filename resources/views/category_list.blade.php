@extends('elements.master')

@section('content')

<table class="table">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td><img class="list-image" src="{{asset("public/images/".$category->image)}}" alt="img" width="100" height="100" ></td>
      <td>{{$category->image}}</td>
      <td><a class="btn btn-success" href="{{url('category-edit\/').$category->id}}"> edit </a> <a class="btn btn-danger" href="{{url('link-delete')}}">delete</a></td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection


@section('script')
    <script></script>
@endsection

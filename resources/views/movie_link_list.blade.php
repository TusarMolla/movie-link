@extends('elements.master')

@section('content')

<table class="table">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Link</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($links as $link)
    <tr>
      <th scope="row">{{$link->id}}</th>
      <td>{{$link->name}}</td>
      <td><img class="list-image" src="{{asset("public/images/".$link->image)}}" alt="img" width="100" height="100" ></td>
      <td>{{$link->link}}</td>
      <td><a class="btn btn-success" href="{{url('movie-link-edit\/').$link->id}}"> edit </a> <a class="btn btn-danger" href="{{url('link-delete')}}">delete</a></td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection


@section('script')
    <script></script>
@endsection

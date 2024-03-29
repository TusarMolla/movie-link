@extends('elements.master')

@section('content')
    <div class="col-6 offset-3 card p-3 mt-5">
        <form action="{{url('movie-link-update/'.$movie->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input value="{{$movie->name}}" name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="mivieUrlId" class="form-label">Url</label>
                    <input value="{{$movie->link}}" name="url" type="text" class="form-control" id="mivieUrlId" placeholder="Url">
                </div>

                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Category</label>
                    <select id="disabledSelect" class="form-select" name="category">
                        <option selected>
                            <h4>Select</h4>
                        </option>

                        @foreach ($categories as $category)
                        {{$movie->category_id == $category->id ?'yes': 'no' }}
                            <option value="{{ $category->id }}" {{$movie->category_id == $category->id ? 'selected=selected':''}}>
                                <h1>{{ $category->name }}</h1>
                            </option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label for="ratingId" class="form-label">Rating</label>
                    <input value="{{$movie->rating}}" name="rating" type="text" class="form-control" id="ratingId" placeholder="Rating">
                </div>

                <div class="mb-3">
                    <label for="durationId" class="form-label">Duration</label>
                    <input value="{{$movie->duration}}" name="duration" type="text" class="form-control" id="durationId" placeholder="Duration">
                </div>

                <div class="mb-3">
                    <label for="datenId" class="form-label">Release Date</label>
                    <input value="{{$movie->release_date}}" name="date" type="text" class="form-control" id="dateId" placeholder="Release Date">
                </div>

                <label class="form-label">Tranding</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isTranding" id="isTrandingYesID" value="1" {{$movie->tranding ==1 ? 'checked=checked' :''}} >
                    <label class="form-check-label" for="isTrandingYesID">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isTranding" id="isTrandingNoID" value="0" {{$movie->tranding ==0 ? 'checked=checked' :''}}  >
                    <label class="form-check-label" for="isTrandingNoID">
                        NO
                    </label>
                </div>




                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$movie->description}}</textarea>
                </div>
                <label for="formFile" class="form-label">Select Image</label>
                <input name="image" class="form-control" type="file" id="formFile">
            </div>


            <button class="btn btn-success" type="submit">Submit</button>



        </form>
    </div>
@endsection


@section('script')
    <script></script>
@endsection

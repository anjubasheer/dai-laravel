@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
        <div class="col align-self-center">
          <form action="{{ route('save') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Title">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

         </form>
        </div>
    </div>
</div>
@endsection

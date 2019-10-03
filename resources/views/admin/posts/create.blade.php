@extends('layouts.app')

@section('content')
    <div class="card ">
        <div class="card-header">
            Create a new post
        </div>

        <div class="card-body">
            <form action="{{route('post.store')}}" method="POST">

                {{csrf_field()}}
                <div class="form-group">
                    <label for="title"></label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured"></label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content"></label>
                    <textarea class="form-control" name="content" id="content" cols="5" rows="5"></textarea>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit"> Store Post</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
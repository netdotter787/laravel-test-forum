@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Thread</div>
                    <div class="card-body">
                        <form method="POST" action="/threads">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title :</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="body">Body :</label>
                                <textarea name="body" id="body" class="form-control" name="body" rows="8"></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Publish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

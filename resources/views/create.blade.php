@extends('master')
@section('content')

<div class="container coustom-login">
    <div class="row">
        <div class="col-sm-8">
            <form action="/create" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Question</label>
                    <input type="text" name="name" class="form-control" id="question" placeholder="Enter Question">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
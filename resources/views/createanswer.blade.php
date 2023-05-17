@extends('master')
@section('content')

<div class="container coustom-login">
    <div class="row">
        <div class="col-sm-8">
            <form action="/createanswer" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correct Answer</label>
                    <input type="text" name="correct_answer" class="form-control" id="correct_answer" placeholder="Enter Correct Answer">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Question Id</label>
                    <input type="text" name="question_id" class="form-control" id="anwser_id" placeholder="Enter Question Id">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
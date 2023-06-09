@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>View All Question</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="/create"> Create New Question</a>
        </div>
    </div>
</div>


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Question</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($question as $question)
    <tr>
        <td>{{ $question->id }}</td>
        <td>{{ $question->name }}</td>
        <td>{{ $question->detail }}</td>
        <td>
            {{-- <form action="{{ route('products.destroy',$product->id) }}" method="POST"> --}}

                {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> --}}

                {{-- <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a> --}}

                @csrf
                {{-- @method('DELETE') --}}
  
                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection


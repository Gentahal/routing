@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task</div>
                <div class="card-body">
                    <form action="/savetask" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="">Nama Task</label>
                        <input type="text" name="nama" value="{{ $task->nama }}" class="form-control">
                    </div>
                    <div class="form-group">
                        @csrf
                        <label for="">Description</label>
                        <input type="text" name="description" value="{{ $task->description }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Create</button>
                        <a href="/task" class="btn btn-danger">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

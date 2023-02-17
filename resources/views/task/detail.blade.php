@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task</div>
                <table class="table table-bordered">
                    <tr>
                        <td>Nama</td>
                        <td>{{ $task->nama }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>{{ $task->description }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('template.template')

@section('title')
Halaman Task
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Task
                </div>

                <div class="card-body">
                    <div class="table-responsive" p-2>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Task Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($task as $row)
                                    <tr>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>
                                            <a href="{{ url('task/'.$row->id) }}" class="btn bg-primary text-white">Detail</a>
                                            <a href="{{ url('taskedit/'.$row->id) }}" class="btn bg-warning text-white">Edit</a>
                                            <a href="{{ url('delete/'.$row->id) }}" class="btn bg-danger text-white">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
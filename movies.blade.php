@extends('layouts.main')
@section('title', "Movies")
@section('artikel')
    <div class="card">
        <div class="card-header">
            <a href="/rental/form-add" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i> rental</a>
        </div>
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis_ps</th>
                        <th>Tanggal_sewa</th>
                        <th>KTP</th>
                        <th>Actions</th>
                    </tr>
                </thead> 
                
                <tbody>
                    @foreach ($mv as $idx => $m)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->jenis_ps }}</td>
                        <td>{{ $m->tanggal_sewa }}</td>
                        <td>
                            <img src="{{ asset('/storage/'.$m->poster) }}" alt="{{ $m->poster }}" height="80" width="80">
                        </td>
                        <td>
                            <a href="/form-edit/{{ $m->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete/{{ $m->id }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

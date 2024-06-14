@extends('layouts.main')
@section('title', 'Form Edit Movies')
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/update/{{ $mv->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mv->nama }}" required>
                </div>
                <div class="form-group">
                    <label>Jenis_ps</label>
                    <select name="jenis_ps" class="form-control">
                        <option value="0">--Pilih jenis_ps--</option>
                        <option value="PS_4" {{ ($mv->jenis_ps == "PS_4") ? "selected":"" }}>PS_4</option>
                        <option value="PS_5" {{ ($mv->jenis_ps == "PS_5") ? "selected":"" }}>PS_5</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>tanggal_sewa</label>
                    <input type="number" min="0" max="31" name="tanggal_sewa" value="{{ $mv->tanggal_sewa }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>KTP</label>
                    <input type="file" accept="image/*" name="poster" class="form-control-file">
                </div>

                <div class="form-group">
                    <img src="{{ asset('/storage/'.$mv->poster) }}" alt="{{ $mv->poster }}" height="80" witdh="80">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
    </div>
@endsection
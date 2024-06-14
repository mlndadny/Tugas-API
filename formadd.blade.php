@extends('layouts.main')
@section('title', 'Form Add Rental PS')
@section('artikel')
    <div class="card mt-5">
        <div class="card-header bg-pink text-white">
            <h4 class="mb-0">Add Rental PS</h4>
        </div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_ps">Jenis PS</label>
                    <select name="jenis_ps" id="jenis_ps" class="form-control">
                        <option value="0">--Pilih jenis PS--</option>
                        <option value="PS_3">PS_3</option>
                        <option value="PS_4">PS_4</option>
                        <option value="PS_5">PS_5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_sewa">Tanggal Sewa</label>
                    <input type="number" min="1" max="31" name="tanggal_sewa" id="tanggal_sewa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="poster">KTP</label>
                    <input type="file" accept="image/*" name="poster" id="poster" class="form-control-file">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-lucu">Save</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .bg-pink {
            background-color: #ff69b4 !important;
        }

        .btn-lucu {
            background-color: #ff69b4;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 25px;
        }

        .btn-lucu:hover {
            background-color: white;
            color: black;
            border: 2px solid #ff69b4;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .card-header {
            border-radius: 15px 15px 0 0;
        }

        .form-control:focus {
            border-color: #ff69b4;
            box-shadow: 0 0 0 0.2rem rgba(255, 105, 180, 0.25);
        }
    </style>
@endsection

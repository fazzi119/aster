@extends('layouts.app')
@section('konten')
    <div class="page-inner">
        <div class="page-header d-flex justify-content-between">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Edit {{ $subtitle }}</h4>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('master/customer/' . $customer->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group @error('nama') has-error @enderror">
                                <label for="nama">Nama customer</label>
                                <input type="text" class="form-control" value="{{ old('nama', $customer->nama) }}"
                                    name="nama" id="nama" placeholder="isi nama customer">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" value="{{ old('alamat', $customer->alamat) }}"
                                    name="alamat" id="alamat" placeholder="isi alamat customer">
                            </div>

                            <div class="form-group">
                                <label for="kontak">Kontak</label>
                                <input type="number" class="form-control" value="{{ old('kontak', $customer->kontak) }}"
                                    name="kontak" id="kontak" placeholder="isi kontak customer">
                            </div>

                            <div class="form-group">
                                <label for="info">Keterangan</label>
                                <textarea class="form-control" name="info" id="info" rows="5">{{ old('info', $customer->info) }}</textarea>
                            </div>


                            <div class="card-action d-flex justify-content-end">
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="ml-3 btn btn-success">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

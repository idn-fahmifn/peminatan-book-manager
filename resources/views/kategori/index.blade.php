@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori" id="" class="form-control">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Nama Kategori</th>
                                <th>Pilihan</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

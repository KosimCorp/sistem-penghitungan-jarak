@extends('layout')

@section('content')
<div class="container mt-5">
	<h4>Tambah Sekolah</h4>
	<form action="{{ route('sekolah.store') }}" method="POST" class="card">
		@csrf

		<div class="card-body">
			<div class="mb-2">
				<label class="form-label">Nama Sekolah</label>
				<input class="form-control" type="text" name="name" required>
			</div>
			<div class="mb-2">
				<label class="form-label">Deskripsi</label>
				<textarea class="form-control" name="description" required></textarea>
			</div>
			<div class="mb-2">
				<label class="form-label">Latitude</label>
				<input class="form-control" type="text" name="latitude" required>
			</div>
			<div class="mb-2">
				<label class="form-label">Longitude</label>
				<input class="form-control" type="text" name="longitude" required>
			</div>
			<div align="right">
				<button type="submit" class="btn btn-sm btn-primary">Tambah</button>
			</div>
		</div>
	</form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Tambah Senarai Ameniti
    </div>
    <div class="card-body">
        <form action="{{ route('amenities.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="code" class="form-label">Kod <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" required>
                @error('code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="abbreviation" class="form-label">Singkatan</label>
                <input type="text" class="form-control @error('abbreviation') is-invalid @enderror" id="abbreviation" name="abbreviation" value="{{ old('abbreviation') }}">
                @error('abbreviation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Keterangan <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}" required>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <a href="{{ route('amenities.index') }}" class="btn btn-default shadow-sm border">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <button type="submit" class="btn btn-success float-end">
                <i class="fas fa-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection

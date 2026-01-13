@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Senarai Ameniti
    </div>
    <div class="card-body">
        <div class="mb-3">
            <a href="{{ route('amenities.create') }}" class="btn btn-primary">+ Tambah</a>
        </div>
        <table id="amenitiesTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kod</th>
                    <th>Singkatan</th>
                    <th>Keterangan</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($amenities as $index => $amenity)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $amenity->code }}</td>
                    <td>{{ $amenity->abbreviation }}</td>
                    <td>{{ $amenity->description }}</td>
                    <td>
                        <a href="{{ route('amenities.edit', $amenity->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('amenities.destroy', $amenity->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Adakah anda pasti?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function () {
        $('#amenitiesTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/ms.json"
            }
        });
    });
</script>
@endpush
@endsection

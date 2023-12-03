<div class="row justify-content-between my-3">
    <div class="col-3">
        <h2>Daftar Barang Hilang</h2>
    </div>
    <div class="col-2">
        <a href="/add-article" class="btn btn-primary">Tambah Data</a>
    </div>
</div>

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Photo
            <th>Items</th>
            <th>Date Lost</th>
            <th>Time Lost</th>
            <th>Description</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Lost Place</th>
            <th>Detail Location</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($losts as $losts)
        <tr>
            <td>{{ $losts->name }}</td>
            <td>{{ $losts->photo }}</td>
            <td>{{ $losts->items }}</td>
            <td>{{ $losts->date_lost }}</td>
            <td>{{ $losts->time_lost }}</td>
            <td>{{ $losts->description }}</td>
            <td>{{ $losts->category }}</td>
            <td>{{ $losts->brand }}</td>
            <td>{{ $losts->lost_place }}</td>
            <td>{{ $losts->detail_loc }}</td>

        </tr>
        @endforeach
    </tbody>
</table>
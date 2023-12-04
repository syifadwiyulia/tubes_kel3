@extends('layouts.mainlayout')
@section('page_title','Edit Barang Ditemukan')

@section('content')
    <h3>Edit Data Barang DItemukan</h3>
    <div class="mt-5 col-12 m-auto">
        <form action="/founds/{{ $founds->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-1">
                    <label for="name" class="col-form-label">Name</label>
                </div>
                <div class="col-8">
                    <input type="text" id="name" class="form-control" name="name" value="{{  old('name', $founds->name) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="photo" class="col-form-label">Photo</label>
                </div>
                <div class="col-8">
                    <input type="text" id="photo" class="form-control" name="photo" value="{{  old('photo', $founds->photo) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="items" class="col-form-label">Items</label>
                </div>
                <div class="col-8">
                    <input type="text" id="items" class="form-control" name="items" value="{{  old('items', $founds->items) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="date_found" class="col-form-label">Date Lost</label>
                </div>
                <div class="col-8">
                    <input type="date" id="date_found" class="form-control" name="date_found" value="{{  old('date_found', $founds->date_found) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="description" class="col-form-label">Description</label>
                </div>
                <div class="col-8">
                    <input type="text" id="description" class="form-control" name="description" value="{{  old('description', $founds->description) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="category" class="col-form-label">Category</label>
                </div>
                <div class="col-8">
                    <input type="text" id="category" class="form-control" name="category" value="{{  old('category', $founds->category) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="brand" class="col-form-label">Brand</label>
                </div>
                <div class="col-8">
                    <input type="text" id="brand" class="form-control" name="brand" value="{{  old('brand', $founds->brand) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="where_found" class="col-form-label">Where Found</label>
                </div>
                <div class="col-8">
                    <input type="text" id="where_found" class="form-control" name="where_found" value="{{  old('where_found', $founds->where_found) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="detail_loc" class="col-form-label">Detail Location</label>
                </div>
                <div class="col-8">
                    <input type="text" id="detail_loc" class="form-control" name="detail_loc" value="{{  old('detail_loc', $founds->detail_loc) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInLine" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                        <button type="submit" class="btn btn-success mb-3">Perbarui</button>
                    <a href="/article" class="btn btn-secondary mb-3">Kembali</a>
                </div>
            </div>
        </form>
    </div>
@endsection
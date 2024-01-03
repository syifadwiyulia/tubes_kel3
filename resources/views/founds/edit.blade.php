@extends('layouts.mainlayout')
@section('page_title','Edit Kategori')
<style>
    .wrapper{
        margin-left: 10%;
    }
</style>
@section('content')
    <h3 class="mt-4">Edit Items</h3>
    <div class="wrapper mt-5 col-12 m-auto">
        <form action="/founds/{{ $founds->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-2">
                    <label for="name" class="col-form-label">Name</label>
                </div>
                <div class="col-3">
                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name', $founds->name)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="items" class="col-form-label">Items</label>
                </div>
                <div class="col-3">
                    <input type="text" id="items" class="form-control" name="items" value="{{ old('name', $founds->items)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="date_found" class="col-form-label">Date Reported</label>
                </div>
                <div class="col-3">
                    <input type="datetime-local" id="date_found" class="form-control" name="date_found" value="{{ old('date_found', $founds->date_found)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="description" class="col-form-label">Item Description</label>
                </div>
                <div class="col-3">
                    <input type="text" id="description" class="form-control" name="description" value="{{ old('description', $founds->description)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="category" class="col-form-label">Items Category</label>
                </div>
                    <div class="col-3">
                    <select name="category" class="form-control">
                        <option value="" disabled selected>Select Category</option>
                        <option value="">{{ old('category', $founds->category)}}</option>
                        <option value="Clothing" {{ old('category', $founds->category) == 'Clothing' ? 'selected':'' }}>Clothing</option>
                        <option value="Electronics" {{ old('category', $founds->category) == 'Electronics' ? 'selected':'' }}>Electronics</option>
                        <option value="Personal Items" {{ old('category', $founds->category) == 'Personal Items' ? 'selected':'' }}>Personal Items</option>
                        <optgroup label="Vehicles" >
                            <option value="Cars" {{ old('category', $founds->category) == 'Cars' ? 'selected':'' }}>Cars</option>
                            <option value="Motorcycles" {{ old('category', $founds->category) == 'Motorcycles' ? 'selected':'' }}>Motorcycles</option>
                        </optgroup>
                        <option value="Documents and Identification" {{ old('category', $founds->category) == 'Documents and Identification' ? 'selected':'' }}>Documents and Identification</option>
                        <option value="Stationery" {{ old('category', $founds->category) == 'Stationery' ? 'selected':'' }}>Stationery</option>
                        <option value="Other Personal Items"{{ old('category', $founds->category) == 'Other Personal Items' ? 'selected':'' }}>Other Personal Items</option>
                    </select>
                    <br>
                    </div>
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="photo" class="col-form-label">Photo</label>
                </div>
                <div class="col-3">
                    <input type="file" id="photo" class="form-control" name="photo" value="{{ old('photo', $founds->photo)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="where_found" class="col-form-label">Found Location</label>
                </div>
                <div class="col-3">
                    <select name="where_found" class="form-control">
                        <option value="" disabled selected>Select Location</option>
                        <option value="">{{ old('where_found', $founds->where_found) }}</option>
                        <option value="Selaru Building (FIT)" {{ old('where_found', $founds->where_found) == 'Selaru Building (FIT)' ? 'selected':'' }} >Selaru Building (FIT)</option>
                        <option value="Manterawu Building (FEB)" {{ old('where_found', $founds->where_found) == 'Manterawu Building (FEB)' ? 'selected':'' }} >Manterawu Building (FEB)</option>
                        <option value="Sebatik Building (FIK)" {{ old('where_found', $founds->where_found) == 'Sebatik Building (FIK)' ? 'selected':'' }}>Sebatik Building (FIK)</option>
                        <option value="Tokong Nanas Building" {{ old('where_found', $founds->where_found) == 'Tokong Nanas Building' ? 'selected':'' }}>Tokong Nanas Building</option>
                        <option value="FIT Building Parking" {{ old('where_found', $founds->where_found) == 'FIT Building Parking' ? 'selected':'' }}>FIT Building Parking</option>
                        <option value="Open Library" {{ old('where_found', $founds->where_found) == 'Open Library' ? 'selected':'' }}>Open Library</option>
                        <option value="Syamsul Ulum Mosque" {{ old('where_found', $founds->where_found) == 'Syamsul Ulum Mosque' ? 'selected':'' }}>Syamsul Ulum Mosque</option>
                    </select>
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="detail_loc" class="col-form-label">Detail Location</label>
                </div>
                <div class="col-3">
                    <input type="text" id="detail_loc" class="form-control" name="detail_loc" value="{{ old('detail_loc', $founds->detail_loc)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="contact" class="col-form-label">Contact</label>
                </div>
                <div class="col-3">
                    <input type="text" id="contact" class="form-control" name="contact" value="{{ old('contact', $founds->contact)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="keterangan" class="col-form-label">Status</label>
                </div>
                <div class="col-3">
                    <select name="keterangan" class="form-control">
                        <option value="" disabled selected>Select Status</option>
                        <option value="">{{ old('keterangan', $founds->keterangan) }}</option>
                        <option value="not yet returned" {{ old('keterangan', $founds->keterangan) == 'not yet returned' ? 'selected':'' }}>not yet returned</option>
                        <option value="has been returned" {{ old('keterangan', $founds->keterangan) == 'has been returned' ? 'selected':'' }}>has been returned</option>
                    </select>
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="date_returned" class="col-form-label">Date Returned</label>
                </div>
                <div class="col-3">
                    <input type="datetime-local" id="date_returned" class="form-control" name="date_returned" value="">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary mb-3">Update</button>
                    <a href="/founds" class="btn btn-secondary mb-3">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection


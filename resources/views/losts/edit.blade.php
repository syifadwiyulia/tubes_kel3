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
        <form action="/losts/{{ $losts->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-2">
                    <label for="name" class="col-form-label">Name</label>
                </div>
                <div class="col-3">
                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name', $losts->name)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('name')
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
                    <input type="text" id="items" class="form-control" name="items" value="{{ old('items', $losts->items)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('items')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="date_lost" class="col-form-label">Date Reported</label>
                </div>
                <div class="col-3">
                    <input type="datetime-local" id="date_lost" class="form-control" name="date_lost" value="{{ old('date_lost', $losts->date_lost)}}">
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
                    <input type="text" id="description" class="form-control" name="description" value="{{ old('description', $losts->description)}}">
                </div>
                <div class="col-auto">
                    <span id="passwaordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i>{{ $message }}</i>  
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2">
                    <label for="category" class="col-form-label">Items Category</label>
                </div>
                <div class="col-3">
                    <select name="category" class="form-control">
                        <option value="" disabled selected>Select Category</option>
                        <option value="Clothing" {{ old('category', $losts->category) == 'Clothing' ? 'selected':'' }}>Clothing</option>
                        <option value="Electronics" {{ old('category', $losts->category) == 'Electronics' ? 'selected':'' }}>Electronics</option>
                        <option value="Personal Items" {{ old('category', $losts->category) == 'Personal Items' ? 'selected':'' }}>Personal Items</option>
                        <optgroup label="Vehicles">
                            <option value="Cars" {{ old('category', $losts->category) == 'Cars' ? 'selected':'' }}>Cars</option>
                            <option value="Motorcycles" {{ old('category', $losts->category) == 'Motorcycles' ? 'selected':'' }}>Motorcycles</option>
                        </optgroup>
                        <option value="Documents and Identification" {{ old('category', $losts->category) == 'Documents and Identification' ? 'selected':'' }}>Documents and Identification</option>
                        <option value="Stationery" {{ old('category', $losts->category) == 'Stationery' ? 'selected':'' }}>Stationery</option>
                        <option value="Other Personal Items" {{ old('category', $losts->category) == 'Other Personal Items' ? 'selected':'' }}>Other Personal Items</option>
                    </select>
                    <br>
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
                    <input type="file" id="photo" class="form-control" name="photo" value="{{ old('photo', $losts->photo)}}">
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
                    <label for="place_lost" class="col-form-label">Lost Location</label>
                </div>
                <div class="col-3">
                    <select name="lost_place" class="form-control">
                        <option value="" disabled selected>Select Location</option>
                        <option value="">{{ old('lost_place', $losts->lost_place) }}</option>
                        <option value="Selaru Building (FIT)" {{ old('lost_place', $losts->lost_place) == 'Selaru Building (FIT)' ? 'selected':'' }}>Selaru Building (FIT)</option>
                        <option value="Manterawu Building (FEB)" {{ old('lost_place', $losts->lost_place) == 'Manterawu Building (FEB)' ? 'selected':'' }}>Manterawu Building (FEB)</option>
                        <option value="Sebatik Building (FIK)" {{ old('lost_place', $losts->lost_place) == 'Sebatik Building (FIK)' ? 'selected':'' }}>Sebatik Building (FIK)</option>
                        <option value="Tokong Nanas Building" {{ old('lost_place', $losts->lost_place) == 'Tokong Nanas Building' ? 'selected':'' }}>Tokong Nanas Building</option>
                        <option value="FIT Building Parking" {{ old('lost_place', $losts->lost_place) == 'FIT Building Parking' ? 'selected':'' }}>FIT Building Parking</option>
                        <option value="Open Library" {{ old('lost_place', $losts->lost_place) == 'Open Library' ? 'selected':'' }}>Open Library</option>
                        <option value="Syamsul Ulum Mosque" {{ old('lost_place', $losts->lost_place) == 'Syamsul Ulum Mosque' ? 'selected':'' }}>Syamsul Ulum Mosque</option>
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
                    <input type="text" id="detail_loc" class="form-control" name="detail_loc" value="{{ old('detail_loc', $losts->detail_loc)}}">
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
                    <input type="text" id="contact" class="form-control" name="contact" value="{{ old('contact', $losts->contact)}}">
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
                        <option value="">{{ old('keterangan', $losts->keterangan) }}</option>
                        <option value="not yet found" {{ old('keterangan', $losts->keterangan) == 'not yet found' ? 'selected':'' }}>not yet found</option>
                        <option value="has been found" {{ old('keterangan', $losts->keterangan) == 'has been found' ? 'selected':'' }}>has been found</option>
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
                    <label for="date_found" class="col-form-label">Date Found</label>
                </div>
                <div class="col-3">
                    <input type="datetime-local" id="date_found" class="form-control" name="date_found" value="">
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
                    <a href="/losts" class="btn btn-secondary mb-3">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
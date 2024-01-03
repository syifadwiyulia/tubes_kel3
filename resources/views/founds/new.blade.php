@extends('layouts.mainlayout')
@section('page_title','Form Penemuan Barang')
@section('content')
<div class="lost-found-section" style="margin-left: 130px">
    <a href="/lostandfound"><img src="{{asset('admin/assets/img/toggle.png')}}" class="mt-4"></a>
    <h4 class="mt-4">Found Property Information</h4>
    <div class="property-form-block">
      <div class="property-form-block" id="property_frm_section">
        <div class="property-form-body">
          <form action="/founds" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="brand_id" class="control-label lbl-descriptive fs-5">Found By</label><br>
                      <span class="label-detail f-6">(Your Name)</span>
                    </label>
                    <div class="col-sm-10">
                      <input name="name" type="text" class="form-control" value="{{ Auth::user()->name}}">
                      <br>
                    </div>
                </div>
                <div class="form-group">
                  <label for="sub_category_id" class="control-label lbl-descriptive fs-5">
                    What was Found?<br>
                    <span class="label-detail fs-6">(Wallet, Smartphone, ID Card, etc.) This field may auto-populate.</span>
                  </label>
                  <div class="col-sm-10">
                    <input name="items" type="text" class="form-control">
                    <br>
                  </div>
                </div>
                <div class="form-group">
                    <label for="category_id" class="control-label lbl-descriptive fs-5">
                        Category<br>
                        <span class="label-detail fs-6">(Please select the category of the found property)</span>
                    </label>
                    <div class="col-sm-10">
                      <select name="category" class="form-control">
                          <option value="" disabled selected>Select Category</option>
                          <option value="Clothing">Clothing</option>
                          <option value="Electronics">Electronics</option>
                          <option value="Personal Items">Personal Items</option>
                          <optgroup label="Vehicles">
                              <option value="Cars">Cars</option>
                              <option value="Motorcycles">Motorcycles</option>
                          </optgroup>
                          <option value="Documents and Identification">Documents and Identification</option>
                          <option value="Stationery">Stationery</option>
                          <option value="Other Personal Items">Other Personal Items</option>
                      </select>
                      <br>
                  </div>
              </div>
                <div class="form-group">
                  <label for="brand_id" class="control-label lbl-descriptive fs-5">Brand</label><br>
                  <span class="label-detail f-6">(Apple, Pull&Bear, Coach, etc.)</span>
                </label>
                <div class="col-sm-10">
                  <input name="brand" type="text" class="form-control">
                  <br>
                </div>
              </div>
        </div>
        <div class="col-sm-6">
              <div class="form-group">
                  <label for="brand_id" class="control-label lbl-descriptive fs-5">Upload Image</label><br>
                  <span class="label-detail fs-6">This image will display on the Website.</span>
                </label>
                <div class="col-sm-10">
                  <input name="photo" type="file" class="form-control">
                </div>
              </div>
              <div class="form-group mt-4">
                <label for="date" class="control-label lbl-descriptive fs-5">Date Found<br>
                  <span class="label-detail fs-6">Please add the approximate date of when the item was found.</span>
                </label>
                <div class="col-sm-10">
                  <input name="date_found" type="datetime-local" class="form-control">
                  <br>
                </div>
              </div>
              <div class="form-group col-sm-10">
                <label for="additional_information" class="control-label lbl-descriptive fs-5">Description Information Items<br>
                  <span class="label-detail fs-6">Please provide any additional details/description of your found property.</span>
                </label>
                <input id="search_brand" class="form-control search-item-input" name="description" type="text">
                <div class="search-box"></div>
              </div>
              <div class="form-group col-sm-10 mt-4">
                <label for="additional_information" class="control-label lbl-descriptive fs-5">Contact Information<br>
                  <span class="label-detail fs-6">Please provide your contact details for further communication.</span>
                </label>
                <input id="search_brand" class="form-control search-item-input" name="contact" type="text" value="{{ Auth::user()->contact}}">
                <div class="search-box"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  <h4 class="mt-5">Location Information</h4>
    <div class="property-form-block">
      <div class="property-form-block" id="property_frm_section">
          <div class="property-form-body">
              <div class="row">
                  <!-- Form Location -->
                  <div class="col-sm-6">
                      <div class="form-group col-sm-12">
                          <label for="location_id" class="control-label lbl-descriptive fs-5">
                              Found Location<br>
                              <span class="label-detail fs-6">Please select where the item was found.</span>
                          </label>
                          <div class="col-sm-10">
                              <select name="where_found" class="form-control">
                                  <option value="" disabled selected>Select Location</option>
                                  <option value="Selaru Building (FIT)">Selaru Building (FIT)</option>
                                  <option value="Manterawu Building (FEB)">Manterawu Building (FEB)</option>
                                  <option value="Sebatik Building (FIK)">Sebatik Building (FIK)</option>
                                  <option value="Tokong Nanas Building">Tokong Nanas Building</option>
                                  <option value="FIT Building Parking">FIT Building Parking</option>
                                  <option value="Open Library">Open Library</option>
                                  <option value="Syamsul Ulum Mosque">Syamsul Ulum Mosque</option>
                              </select>
                              <br>
                          </div>
                      </div>
                  </div>
  
                  <!-- Form Detail Location -->
                  <div class="col-sm-6">
                      <div class="form-group col-sm-10">
                          <label for="additional_information" class="control-label lbl-descriptive fs-5">
                              Detail Location<br>
                              <span class="label-detail fs-6">Please provide any additional details/description of where you found it.</span>
                          </label>
  
                          <input id="search_brand" class="form-control search-item-input" name="detail_loc" type="text">
                          <div class="search-box"></div><br>
                      </div>
                  </div>
                  <!-- Map -->
                  <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 400px">
                      <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" width="1100" height="400" allowfullscreen></iframe><br>
                  </div>
  
                  <!-- Submit Button -->
                  <input class="mt-3 submit text-white border-0" type="submit" value="Submit">
              </div>
          </div>
      </div>
    </form>
      </div>
</div> 
</div>
</div>
@endsection
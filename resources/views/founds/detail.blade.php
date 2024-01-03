@extends('layouts.mainlayout')
@section('page_title','Detail Barang Ditemukan')
@section('content')
<style>
    .bg{
        background-color: #f0f0f0;
        padding-top: 10px;
        height: auto;
        
    }

    .container{
        background-color: white;
        height: 1100px;
        width: 1250px;
        border-radius: 8px;

    }

    .text{
        margin-left: 135px;
    }

</style>
<div class="bg">
    <h3 class="text">Details Items</h3>
    <div class="container"> 
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Name</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Date Reported</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Item Description</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Items Category</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Photo</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="feature d-flex align-items-center">
                    <div>
                        <p>{{$founds->name}}</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p>{{$founds->date_found}}</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p>{{$founds->description}}</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p>{{$founds->category}}</p>
                    </div>
                </div>
                <div>
                    <img src="{{ $founds->getPhoto() }}" width="350px" height="350px" style="border-radius: 3%;" alt="kunci">
                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Found Location</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Detail Location</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="feature d-flex align-items-center">
                    <div>
                        <p>{{$founds->where_found}}</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <p>{{$founds->detail_loc}}</p>
                    </div>
                </div>
                <div class="feature d-flex align-items-center">
                    <div>
                        <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 100px">
                            <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                              style="border:0" width="450" height="250" allowfullscreen></iframe><br>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row" style="margin-top: 17%">
            <div class="col-md-6 mt-4">
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Contact</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature d-flex align-items-center">
                    <div>
                        <a href="https://api.whatsapp.com/send?phone={{$founds->contact}}" style="text-decoration:none"><img src={{asset('admin/assets/img/wa.png')}} width="50px" height="50px" style="border-radius: 3%;" alt="kunci">Hubungi Via WhatsApp</a>
                    </div>
                </div>
            </div>
        </div> 
        @if (($founds ->keterangan == 'has been returned'))
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Date Returned</p>
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="feature d-flex align-items-center">
                            <div>
                                <p>{{$founds->date_returned}}</p>
                            </div>                    
                        </div>
                    </div>
                </div> 
        </div>
        @else
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;">Date Returned</p>
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="col-md-6 mt-4">
                        <div class="feature d-flex align-items-center">
                            <div>
                                <p>-</p>
                            </div>                    
                        </div>
                    </div>
                </div> 
        </div>
        @endif
        @if (Auth::user()->name == $founds->name)
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="feature d-flex align-items-center">
                    <div>
                        <p style="font-weight: bold;"></p>
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="feature d-flex align-items-center">
                            <div>
                                <a class="btn btn-primary" href="/edit-founds/{{ $founds->id }}">Edit</a>
                            </div>                    
                        </div>
                    </div>
                </div> 
        </div>
        @endif
    </div>
</div>
@endsection
@extends('layouts.mainlayout')
@section('page_title','Daftar Barang Ditemukan')
@section('content')
<style>
    .btn{
        background-color: #f0f0f0;
        margin-left: 35px;
        width: 200px;
    }
    
    .containerrecent2{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 40px;
    }
     
    .card-img-top{
        margin-left: 25px;
        margin-top: 25px;
        width: 250px;
        height: 200px;
    }
    
    .card-text{
        margin-left: 10px;
    }
    
        </style>
<div class="catalog-section" style="display: flex; align-items: center; margin-left:5%">
  <a href="/lostandfound"><img src="{{asset('admin/assets/img/toggle.png')}}" class="mx-4"></a> 
  <div>
    <h4 class="mt-3">CATALOG FOUND ITEMS</h4>
    <p>Find your lost items here!</p>
  </div>
</div>
    <div class="containerrecent">
      @foreach($founds as $found) 
      @if ($found->keterangan === 'not yet returned')
        <div class="row">
          <div class="col-md-2 mt-5 mx-4">
            <div class="card" style="width: 300px;">
              <img src="{{ $found->getPhoto() }}" class="card-img-top rounded" alt="jam">
              <div class="card-body" style="font-size: small;">
                <h4 class="card-title text-center">{{$found->items}}</h4>
                <div class="card-text">Date Reported: {{$found->date_found}} </div>
                    <div class="card-text"> Description: {{$found->description}} </div>
                    <div class="card-text"> Category: {{$found->category}}</div>
                    @if ($found ->keterangan == 'not yet returned')
                    <div class="card-text text-danger"> Status: not yet returned</div>
                    @else 
                    <div class="card-text text-primary"> Status: has been returned</div>
                    @endif
                <button type="button" class="btn mt-4 text-secondary"> <a href="/founds/{{$found->id}}" style="text-decoration: none;">See details</a></button>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach
    </div>
@endsection
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
    <h4 class="mt-3">CATALOG LOST ITEMS</h4>
    <p>Find your lost items here!</p>
  </div>
</div>
  <div class="containerrecent">
    @foreach($losts as $lost)
    @if ($lost->keterangan === 'not yet found')
      <div class="row">
        <div class="col-md-4 mt-5 px-4">
          <div class="card" style="width: 300px;">
            <img src="{{ $lost->getPhoto() }}" class="card-img-top rounded" alt="jam">
            <div class="card-body" style="font-size: small;">
              <h4 class="card-title text-center">{{$lost->items}}</h4>
              <div class="card-text">Date Lost: {{$lost->date_lost}} </div>
                  <div class="card-text"> Description: {{$lost->description}} </div>
                  <div class="card-text"> Category: {{$lost->category}}</div>
                  @if ($lost ->keterangan == 'not yet found')
                  <div class="card-text text-danger"> Status: not yet found</div>
                  @else 
                  <div class="card-text text-primary"> Status: has been found</div>
                  @endif
              <button type="button" class="btn mt-4 text-secondary"> <a href="/losts/{{$lost->id}}" style="text-decoration: none;">See details</a></button>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
  </div>
@endsection
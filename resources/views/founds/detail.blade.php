@extends('layouts.mainlayout')
@section('page_title','Detail Barang Ditemukan')

@section('content')

<div border="1">
    <div class="row">
        <div class="col-9">{{ $founds->name }}</div>
    </div>
    <div class="row">
        <div class="col-9"><img src="{{ $founds->photo }}" width="50%" alt="..."></div>
    </div>
    <div class="row">
        <div class="col-9">{{ $founds->items }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $founds->date_found }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $founds->description }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $founds->category }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $founds->brand }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $founds->where_found }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $founds->detail_loc }}</div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/founds" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
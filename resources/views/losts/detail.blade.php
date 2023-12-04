@extends('layouts.mainlayout')
@section('page_title','Detail Barang Hilang')

@section('content')

<div border="1">
    <div class="row">
        <div class="col-9">{{ $losts->name }}</div>
    </div>
    <div class="row">
        <div class="col-9"><img src="{{ $losts->photo }}" width="50%" alt="..."></div>
    </div>
    <div class="row">
        <div class="col-9">{{ $losts->items }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $losts->date_lost }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $losts->description }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $losts->category }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $losts->brand }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $losts->lost_place }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $losts->detail_loc }}</div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/article" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
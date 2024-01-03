@extends('layouts.mainlayout')
@section('page_title','Daftar Barang Ditemukan')

<!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/core/libs.min.css')}}">
      
    
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/hope-ui.min.css?v=4.0.0')}}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/custom.min.css?v=4.0.0')}}">
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/dark.min.css')}}">
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/customizer.min.css')}}">
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/rtl.min.css')}}">
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0 mt-4" >
    <div>
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Found</h4>
                   </div>
                </div>
                <div class="card-body px-0">
                   <div class="table-responsive">
                      <table id="user-list-table" class="table table-striped" role="grid" data-bs-toggle="data-table">
                         <thead>
                            <tr class="ligth">
                               <th>No</th>
                               <th>Name</th>
                               <th>Item</th>
                               <th>Date Reported</th>
                               <th>Date Returned</th>
                               <th>Description</th>
                               <th>Location</th>
                               <th>Status</th>
                               <th style="min-width: 100px">Action</th>
                            </tr>
                         </thead>
                         @foreach($founds as $found)
                         <tbody>
                            <tr>
                               <td>{{$loop->iteration}}</td>
                               <td>{{$found->name}}</td>
                               <td>{{$found->items}}</td>
                               <td>{{$found->date_found}}</td>
                               <td>@if ($found->keterangan == 'has been returned')
                                    {{$found->date_returned}}
                                   @else 
                                    -
                                   @endif
                              </td>
                               <td>{{$found->description}}</td>
                               <td>{{$found->where_found}}</td>
                               <td>@if ($found ->keterangan == 'not yet returned')
                                <span class="badge bg-danger">not yet returned</span>
                                <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" href="/remove-founds/{{ $found->id }}" aria-label="Delete" data-bs-original-title="Delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                       <span class="btn-inner">
                                          <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                             <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                                    </a>
                                 </div>
                              </td>
                              @else
                                 <span class="badge bg-primary">has been returned</div>
                              @endif</span>
                            </td>
                            </tr>
                         </tbody>
                         @endforeach
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

<!-- Found -->
<div class="conatiner-fluid content-inner mt-n5 py-0 mt-4" >
    <div>
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Lost</h4>
                   </div>
                </div>
                <div class="card-body px-0">
                   <div class="table-responsive">
                      <table id="user-list-table" class="table table-striped" role="grid" data-bs-toggle="data-table">
                         <thead>
                            <tr class="ligth">
                                <th>No</th>
                                <th>Name</th>
                                <th>Item</th>
                                <th>Date Lost</th>
                                <th>Date Found</th>
                                <th>Description</th>
                                <th>Location</th>
                               <th>Status</th>
                               <th style="min-width: 100px">Action</th>
                            </tr>
                         </thead>
                         @foreach($losts as $lost)
                         <tbody>
                            <tr>
                               <td>{{$loop->iteration}}</td>
                               <td>{{$lost->name}}</td>
                               <td>{{$lost->items}}</td>
                               <td>{{$lost->date_lost}}</td>
                               <td>@if ($lost->keterangan == 'has been found')
                                 {{$lost->date_found}}
                                @else 
                                 -
                                @endif
                           </td>
                               <td>{{$lost->description}}</td>
                               <td>{{$lost->lost_place}}</td>
                               <td>@if ($lost ->keterangan == 'not yet found')
                                <span class="badge bg-danger">not yet found</span>
                            @else
                            <span class="badge bg-primary">has been found</div>
                                @endif</span>
                            </td>
                               <td>
                                  <div class="flex align-items-center list-user-action"> 
                                     <a class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" href="/remove-losts/{{ $lost->id }}" aria-label="Delete" data-bs-original-title="Delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                        <span class="btn-inner">
                                           <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                              <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                           </svg>
                                        </span>
                                     </a>
                                  </div>
                               </td>
                            </tr>
                         </tbody>
                         @endforeach
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection
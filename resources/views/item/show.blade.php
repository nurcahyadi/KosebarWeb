@extends('layouts.headersidebar')

@section('content')
  <div id="page-wrapper" >
              <div id="page-inner">
                  <div class="row">
                      <div class="col-md-12">
                       <h2>Detail {{$data->name}}</h2>

                      </div>
                  </div>
                  <hr/>
                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <img src="{{asset('storage/' .$data->photo)}}" class="img-thumbnail" >

                                      </div>
                                      <div class="col-md-8">
                                      <table class="table">
                                        <tr>
                                          <th>Name</th>
                                          <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                          <th>Stock</th>
                                          <td>{{$data->stock}} set</td>
                                        </tr>
                                        <tr>
                                          <th>Price</th>
                                          <td>Rp. {{number_format($data->price)}}</td>
                                        </tr>
                                        <tr>
                                          <th>Description</th>
                                          <td>{{$data->description}}</td>
                                        </tr>
                                        <tr>
                                          <th>Location</th>
                                          <td>{{$data->location}}</td>
                                        </tr>

                                      </table>
                                      </div>

                                    </div>

                                  </div>

                </div>
            </div>




@endsection

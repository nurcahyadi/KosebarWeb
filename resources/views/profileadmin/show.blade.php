@extends('layouts.headersidebaradmin')

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
                                          <th>Email</th>
                                          <td>{{$data->email}}</td>
                                        </tr>
                                        



                                      </table>



                                    <a href="{{route('profileadmin.edit',['profileadmin'=>$data->id])}}"><button type="submit" class="btn btn-warning">Edit</button></a>


                                      </div>

                                    </div>

                                  </div>

                </div>
            </div>




@endsection

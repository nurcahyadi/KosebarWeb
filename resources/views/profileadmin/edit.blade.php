@extends('layouts.headersidebaradmin')

@section('content')
  <div id="page-wrapper" >
              <div id="page-inner">
                  <div class="row">
                      <div class="col-md-12">

                       <h2>Edit {{$dataedit->name}}</h2>

                      </div>
                  </div>
                   <!-- /. ROW  -->
                   <hr />
                 <div class="row">
                  <div class="col-md-12">
                      <!-- Form Elements -->
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Profile
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-12">
                                    <form  action="{{route('profileadmin.update',['profileadmin'=>$dataedit->id])}}" method="post" enctype="multipart/form-data" >
                                      {{ csrf_field() }}
                                      <input type="hidden" name="_method" value="PUT">
                                          <div class="form-group">
                                              <label>Name</label>
                                              <input type="text" class="form-control" name="name" id="name" placeholder="masukan nama anda" value="{{$dataedit->name}}"/>
                                          </div>
                                          <div class="form-group">
                                              <label>Email</label>
                                              <input type="email" class="form-control" name="email" id="email" placeholder="masukan email anda" value="{{$dataedit->email}}"/>
                                          </div>

                                          <div class="form-group">
                                              <label for="photo">Photo</label>
                                              <input type="file" id="photo" name="photo" >
                                          </div>
                                          
                                          <div class="form-group">
                                              <label>Password</label>
                                              <input type="password" class="form-control" name="password" id="password" placeholder="masukan NIK anda" value="{{$dataedit->password}}"/>
                                          </div>
                                            {{-- <a href="{{route('admin.tampilanadmin')}}" class="btn btn-primary">Save</a> --}}
                                          <button type="submit" name="button" class="btn btn-primary">Update</button>
                                    </form>


      </div>


                              </div>
                          </div>
                      </div>
                       <!-- End Form Elements -->
                  </div>
              </div>

      </div>
               <!-- /. PAGE INNER  -->
              </div>

@endsection

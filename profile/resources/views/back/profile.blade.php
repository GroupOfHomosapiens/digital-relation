@extends('back.layouts.master')
@section('content')
  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Example Form</div>
                        <div class="card-body card-block">
                            <form action="{{route('admin.profileEdit')}}" method="post" class="">
                            	@csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="username" name="name" placeholder="Ady" value="{{$auth->name}}" class="form-control">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="email" name="faculties_name" placeholder="Email" value="{{$auth->faculties_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input type="text" id="password" name="functions" placeholder="Password" class="form-control" value="{{$auth->functions}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="email" name="login" placeholder="Login" value="{{$auth->login}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input type="password" required id="password" name="password" placeholder="Password"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
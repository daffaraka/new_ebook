@extends('main')

@section('title', 'Detail Ebook')

@section('content')

    <div class="row">
        <div class="col-md-4 ">
            <div class="card p-0">
                <div class="card-body p-3 pt-4">
                    <div class="card-header">
                        <div class="card-title">
                          {{__('maintenance_account.profile_image')}}
                        </div>
                    </div>
                    <div class="mt-4 shadow">
                        <img src="{{asset('storage/user_pic/'.$account->display_picture_link)}}" class="img-thumbnail p-5" alt="...">

                    </div>
                </div>
               
            </div>
        </div>

        <div class="col card w-75">
            <div class="card-body">
                <div class="card-header">
                    <div class="card-title">
                       {{__('maintenance_account.maintenance_title')}}
                    </div>
                </div>

                <form method="POST" class="p-4" action="{{ route('admin.updateProfile',$account->account_id) }}" enctype="multipart/form-data">
                    @csrf

                    {{-- First Name --}}
                    <div class="row mb-3">
                        <label for="first_name" class="col-md-4 col-form-label text-md-end"> {{__('maintenance_account.first_name')}}</label>

                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$account->first_name}}" required autocomplete="first_name" autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Middle Name --}}
                    <div class="row mb-3">
                        <label for="middle_name" class="col-md-4 col-form-label text-md-end"> {{__('maintenance_account.middle_name')}}</label>

                        <div class="col-md-6">
                            <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{$account->middle_name}}" required autocomplete="middle_name" autofocus>

                            @error('middle_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- Last Name --}}
                    <div class="row mb-3">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end"> {{__('maintenance_account.last_name')}}</label>

                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$account->last_name}}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                
                    {{-- Gender --}}
                    <div class="row mb-3">
                        <label for="gender" class="col-md-4 col-form-label text-md-end"> {{__('maintenance_account.gender')}}</label>

                        <div class="col-md-6 pt-2">
                            <input id="gender_id" type="radio"  @error('gender_id') is-invalid @enderror" name="gender_id" value="1" required autocomplete="gender_id" autofocus>
                            <label for="contactChoice1"> {{__('maintenance_account.gender_male')}}</label> <br>
                            <input id="gender_id" type="radio"  @error('gender_id') is-invalid @enderror" name="gender_id" value="2" required autocomplete="gender_id" autofocus>
                            <label for="contactChoice1"> {{__('maintenance_account.gender_female')}}</label>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    {{-- Email  --}}
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$account->email}}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                        
                    {{-- Password --}}
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end"> {{__('maintenance_account.password')}}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Password Confirm --}}
                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{__('maintenance_account.confirm_password')}}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    {{-- Role --}}
                    <div class="row mb-3">
                        <label for="role_id" class="col-md-4 col-form-label text-md-end">{{__('maintenance_account.role')}}</label>

                        <div class="col-md-6">
                            <select id="role_id" type="text" class="form-control @error('role') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required autocomplete="role_id" autofocus>
                                <option value="#" selected disabled>{{__('maintenance_account.select_role')}} </option>
                                <option value="1">Admin</option>
                                <option value="0">User</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="role" class="col-md-4 col-form-label text-md-end">{{__('maintenance_account.profile_image')}}</label>

                        <div class="col-md-6">
                            <input id="display_picture_link" type="file" class="form-control @error('display_picture_link') 
                            is-invalid @enderror" name="display_picture_link" value="{{ old('display_picture_link') }}" 
                            required autocomplete="display_picture_link" autofocus>

                            @error('display_picture_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('maintenance_account.button.submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
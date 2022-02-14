@extends('layouts.app')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- First Name --}}
                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('registration.first_name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Middle Name --}}
                        <div class="row mb-3">
                            <label for="middle_name" class="col-md-4 col-form-label text-md-end">{{ __('registration.middle_name') }}</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" required autocomplete="middle_name" autofocus>

                                @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Last Name --}}
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('registration.last_name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    
                        {{-- Gender --}}
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('registration.gender') }}</label>

                            <div class="col-md-6 pt-2">
                                <input id="gender_id" type="radio"  @error('gender_id') is-invalid @enderror" name="gender_id" value="1" required autocomplete="gender_id" autofocus>
                                <label for="contactChoice1">{{ __('registration.gender_male') }}</label> <br>
                                <input id="gender_id" type="radio"  @error('gender_id') is-invalid @enderror" name="gender_id" value="2" required autocomplete="gender_id" autofocus>
                                <label for="contactChoice1">{{ __('registration.gender_female') }}</label>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- Email  --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            
                        {{-- Password --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('registration.confirm_password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- Role --}}
                        <div class="row mb-3">
                            <label for="role_id" class="col-md-4 col-form-label text-md-end">{{ __('registration.role') }}</label>

                            <div class="col-md-6">
                                <select id="role_id" type="text" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required autocomplete="role_id" autofocus>
                                    <option value="#" selected disabled>Select role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('registration.profile_image') }}</label>

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
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



    

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
    $( function() {
      $( "#tanggal_lahir" ).datepicker({
            dateFormat : 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "1990:2010",
      });
    } );
</script>


@extends('layouts.app')

@section('content')
@include('layouts.topnav')
@include('layouts.leftnav')
<div id="col-right" class="col-right ">
    <div class="container-fluid primary-content">
        <form action="/profile/{{ $user->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h2>Edit Profile</h2>
                    </div>
                    <div class="form-group row">
                        <label for="nip" class="col-md-4 col-form-label">NIP</label>

                        <input id="nip" name="nip" type="text" class="form-control @error('nip') is-invalid @enderror"
                        value="{{ old('nip') ?? $user->profile->nip }}"
                        autocomplete="nip" autofocus>

                        @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="grade" class="col-md-4 col-form-label">Grade</label>

                        <input id="grade" name="grade" type="text" class="form-control @error('grade') is-invalid @enderror"
                        value="{{ old('grade') ?? $user->profile->grade }}"
                        autocomplete="grade" autofocus>

                        @error('grade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-md-4 col-form-label">Position</label>

                        <input id="position" name="position" type="text" class="form-control @error('position') is-invalid @enderror"
                        value="{{ old('position') ?? $user->profile->position }}"
                        autocomplete="position" autofocus>

                        @error('position')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="row">
                        <label for="caption" class="col-md-4 col-form-label">Profile Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @error('image')

                        <strong>{{ $message }}</strong>

                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection

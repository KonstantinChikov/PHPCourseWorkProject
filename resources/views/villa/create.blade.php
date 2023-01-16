@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-3">
                <div class="card">
                    <h5 class="card-header">{{ __('Create New') }}</h5>
                    <div class="card-body">
                        <form method="POST" action="{{route('villa.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{__('Name')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           class="form-control" @error('name') is-invalid @enderror
                                           value="{{ old('name') }}" required
                                           autocomplete="name" autofocus>
                                    @error('name')

                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="location_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('locations') }}</label>

                                <div class="col-md-6">
                                    <select id="location_id"
                                            class="form-control @error('location_id') is-invalid @enderror"
                                            name="location_id"
                                            required>
                                        <option selected disabled>{{__('Choose house location')}}...</option>
                                        @foreach(\App\Models\Location::all() as $house_location)
                                            <option value="{{$house_location->id}}">{{ ucwords($house_location->name) }}</option>
                                        @endforeach
                                    </select>

                                    @error('location_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="type_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('type') }}</label>

                                <div class="col-md-6">
                                    <select id="type_id"
                                            class="form-control @error('type_id') is-invalid @enderror"
                                            name="type_id"
                                            required>
                                        <option selected disabled>{{__('Choose house type')}}...</option>
                                        @foreach(\App\Models\Type::all() as $type )
                                            <option value="{{$type->id}}">{{ ucwords($type->name) }}</option>
                                        @endforeach
                                    </select>

                                    @error('type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="beds"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Beds') }}</label>
                                <div class="col-md-6">
                                    <input id="beds" type="number" step="1"
                                           class="form-control @error('beds') is-invalid @enderror"
                                           name="beds"
                                           value="{{ old('beds') }}" required>

                                    @error('beds')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="rooms"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Rooms') }}</label>
                                <div class="col-md-6">
                                    <input id="rooms" type="number" step="1"
                                           class="form-control @error('rooms') is-invalid @enderror"
                                           name="rooms"
                                           value="{{ old('rooms') }}" required>

                                    @error('rooms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bathrooms"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Bathrooms') }}</label>
                                <div class="col-md-6">
                                    <input id="bathrooms" type="number" step="1"
                                           class="form-control @error('bathrooms') is-invalid @enderror"
                                           name="bathrooms"
                                           value="{{ old('bathrooms') }}" required>

                                    @error('bathrooms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3 mb-2">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Product') }}
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

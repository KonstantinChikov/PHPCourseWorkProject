@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-3">
                <div class="card">
                    <h5 class="card-header">{{ __('Edit villa') }}</h5>
                    <div class="card-body">
                        <form method="post" action="{{route('villa.update', $villa->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{__('Name')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           class="form-control" @error('name') is-invalid @enderror
                                           value="{{ old('name') ? old('name'): $villa->name }}" required
                                           autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="type_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control @error('type_id') is-invalid @enderror"
                                            name="type_id" required>
                                        <option value="" disabled selected>Choose type</option>
                                        @foreach(\App\Models\Type::all() as $type)
                                            @dump($type->id)
                                            <option value="{{$type->id}}">
                                                {{ $type->name }}</option>
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
                                <label for="location_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control @error('location_id') is-invalid @enderror"
                                            name="location_id" required>
                                        <option value="" disabled selected>Choose location</option>
                                        @foreach(\App\Models\Location::all() as $location)
                                            @dump($location->id)
                                            <option value="{{$location->id}}">
                                                {{ $location->name }}</option>
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
                                <label for="beds"
                                       class="col-md-4 col-form-label text-md-end">{{__('Beds')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="beds"
                                           id="beds"
                                           class="form-control" @error('beds') is-invalid @enderror
                                           value="{{ old('beds') ? old('beds'): $villa->beds }}" required
                                           autocomplete="beds" autofocus>
                                    @error('beds')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="rooms"
                                       class="col-md-4 col-form-label text-md-end">{{__('Rooms')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="rooms"
                                           id="rooms"
                                           class="form-control" @error('rooms') is-invalid @enderror
                                           value="{{ old('rooms') ? old('rooms'): $villa->rooms }}" required
                                           autocomplete="rooms" autofocus>
                                    @error('rooms')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bathrooms"
                                       class="col-md-4 col-form-label text-md-end">{{__('Bathrooms')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="bathrooms"
                                           id="bathrooms"
                                           class="form-control" @error('bathrooms') is-invalid @enderror
                                           value="{{ old('bathrooms') ? old('bathrooms'): $villa->rooms }}" required
                                           autocomplete="bathrooms" autofocus>
                                    @error('bathrooms')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3 mb-2">
                                <div class="col-md-6 offset-md-4">

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
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

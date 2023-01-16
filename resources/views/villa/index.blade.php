@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{__('Villa')}}</h1>
        <div class="mb-3 mt-3 text-right">
            <a href="{{route('villa.create')}}"
               class="btn btn-primary float-end">{{__('Add new Villa')}}
            </a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark">
                <thead>
                <th>{{__('ID')}}</th>
                <th>{{__('Name')}}</th>
                <th>{{__('House Type')}}</th>
                <th>{{__('Location')}}</th>
                <th>{{__('Beds')}}</th>
                <th>{{__('Rooms')}}</th>
                <th>{{__('Bathrooms')}}</th>

                </thead>
                <tbody>
                @foreach($villa as $villas)
                    <tr>
                        <td>{{( $villas->id)}}</td>
                        <td>{{( $villas->name)}}</td>
                        <td>{{( $villas->types->name)}}</td>
                        <td>{{( $villas->house_location->name)}}</td>
                        <td>{{( $villas->beds)}}</td>
                        <td>{{( $villas->rooms)}}</td>
                        <td>{{( $villas->bathrooms)}}</td>
                        <td>
                            <div class="d-flex">
                                <div class="edit mx-2">
                                    <a href="{{route('villa.edit',  $villas->id)}}" class="btn btn-primary">{{__('Edit')}}</a>
                                </div>
                                <form  method="post" action="{{route('villa.delete',  $villas->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this item?');">{{__('DELETE')}}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

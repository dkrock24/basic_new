@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <h5><i class="fa fa-file"></i> Contact List</h5>  
            <div class="card">
                
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Names</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created</th>
                        <th scope="col">
                            <a href="{{ route('export-information')}}">
                                <img src="{{ URL::to('/assets/images/202300.png') }}" width="50px" alt="Export Information">
                            </a>
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $cont = $information->firstItem();
                    @endphp
                    @foreach ($information as $info)
                        <tr>
                            <th scope="row">{{ $cont++ }}</th>
                            <td>{{ $info->email }}</td>
                            <td>{{ $info->nombre }}</td>
                            <td>{{ $info->telefono }}</td>
                            <td>{{ $info->descripcion }}</td>
                            <td>{{ $info->created_at->format('d M Y') }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('contact_detail', $info) }}">Show</a>
                                <a class="btn btn-warning" href="{{ route('delete_information', $info) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $information->links("pagination::bootstrap-4") }}
            
            </div>       
        </div>
    </div>
</div>
@endsection

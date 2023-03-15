@extends('layouts.backend')

@section('content')



        <a type="button" class="btn btn-primary mb-3" style="width: 75px;" href="{{ route('users.index') }}"> Back</a>

        <!-- update section -->
        <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
            <div class="card-body flex flex-row">
                
                <!-- image -->
                <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                    <img src="{{ asset('backend/img/happy.svg') }}" alt="img title">
                </div>
                <!-- end image -->
    
                <!-- info -->
                <div class="py-2 ml-10">
                    <h1 class="h6">Hello, {{ $role->name }}</h1>
    
                    <ul class="mt-4">
                        {{-- <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Email : {{ $role->guard }}</li> --}}
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> 
                            <strong>
                                <strong>Permissions:</strong>
                                @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $v)
                                       <br> <label class="label label-success">{{ $v->name }},</label>
                                    @endforeach
                                @endif
                            </strong>
                        </li>
                    </ul>
                </div>
                <!-- end info -->
    
            </div>
        </div>
        <!-- end update section -->

 
@endsection
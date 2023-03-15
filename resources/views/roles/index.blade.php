@extends('layouts.backend')

@section('content')
    

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success mb-3" href="{{ route('roles.create') }}" style="width:155px;"> Add New Role</a>
            @endcan
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

    <!-- Start Recent Sales -->
    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header">Roles Management</div>

        <table class="table-auto w-full text-left" style="border: 1px solid;">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r">No</th>
                    <th class="px-4 py-2 border-r">Name</th>
                    <th  class="text-center px-4 py-2 " >Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach ($roles as $key => $role)

                <tr class="text-center">                    
                    <td class="border border-l-0 px-4 py-2 text-center text-green-500">1</td>
                    <td class="border border-l-0 text-center text-green-500">{{ $role->name }}</td>
                    <td>
                        <button>
                            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                        </button>
                        @can('role-edit')
                        <button>
                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                        </button>
                        @endcan
                        @can('role-delete')
                        <button>
    
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </button>
                        @endcan
                    </td>
                </td>

                @endforeach
                
            </tbody>
        </table>

{!! $roles->render() !!}

    </div>
    <!-- End Recent Sales -->

@endsection
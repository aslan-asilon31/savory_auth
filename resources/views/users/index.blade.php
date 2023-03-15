
@extends('layouts.backend')

@section('content')
    
    <div class="flex justify-between">
        <div class="pull-right">
            <a class="btn btn-primary mb-3" href="{{ route('users.index') }}" style="width:75px;"> Back</a>
        </div>

        <div class="pull-left">
            <a class="btn btn-primary mb-3" href="{{ route('users.create') }}" style="width:155px;"> Add User</a>
        </div>
    </div>

    <!-- Start Recent Sales -->
    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header">User List</div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r"></th>
                    <th class="px-4 py-2 border-r">Name</th>
                    <th class="px-4 py-2 border-r">Email</th>
                    <th class="px-4 py-2 border-r">Roles</th>
                    <th class="px-4 py-2 border-r">Image</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">

                @foreach ($users as $user)
                <tr>                    
                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">{{ $user->name }}</td>
                    <td class="border border-l-0 px-4 py-2">{{ $user->email }}</td>
                    <td class="border border-l-0 border-r-0 px-4 py-2">
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                    </td>
                    <td class="border border-l-0 px-4 py-2">
                        <img src="{{ Storage::url('public/users/').$user->image }}" class="rounded" style="width: 50px">
                    </td>
                    <td>
                        <a href="" class="bg-purple-300">Show</a>
                        <a href="" class="bg-blue-300">Edit</a>
                        <a href="" class="bg-red-300">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <!-- End Recent Sales -->

    <script>
        //message with toastr
        @if(session()->has('success'))
              
           toastr.success('{{ session('success') }}', 'BERHASIL!'); 
      
        @elseif(session()->has('error'))
      
           toastr.error('{{ session('error') }}', 'GAGAL!'); 
                  
        @endif
      </script>

 
@endsection
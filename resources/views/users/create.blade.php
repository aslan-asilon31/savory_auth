
@extends('layouts.backend')

@section('content')
<style>
    .dropdown:hover > .dropdown-content {
        display: block;
    }
    
</style>

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />


<div class=" mx-auto bg-white shadow-md rounded-md p-4">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}" style="width:70px;"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div> --}}


        <div class=" mx-auto flex flex-col">
            <form method="POST" action="{{ route('users.store')}}"  enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" required placeholder="Name..." >
                </div>
                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Email
                </label>
                <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" required placeholder="youemail@gmail.com...">
                </div>
                <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" required placeholder="******************">
                <p class="text-red-500 text-xs italic">Please choose a password.</p>
                </div>

                <div class="dropdown inline-block relative bg-white-500">
                    <select name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option hidden>Choose a role</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->name }}" >{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="bg-white shadow-md rounded-md p-4">
                <h2 class="text-xl font-bold mb-4"></h2>
                <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">
                    {{-- <div class="m-4">
                        <label class="inline-block mb-2 text-gray-500">Upload
                            Image(jpg,png,svg,jpeg)</label>
                        <div class="flex items-center justify-center w-full">
                            <div class="flex flex-col gap-4 py-4  lg:flex-row">
            
                                <div class="flex h-56 w-full flex-col items-center justify-center gap-4 rounded-xl border border-dashed border-gray-300 p-5 text-center">
                                  <img src="/images/ddHJYlQqOzyOKm4CSCY8o.png" accept="image/*" id="blah" src="#" alt="your image" class="h-16 w-16 rounded-full" />
                                  <p class="text-sm text-gray-600">Drop your desired image file here to start the upload</p>
                                  <input type="file" id="image" name="image" onchange="readURL(this);" class="max-w-full rounded-lg px-2 font-medium text-blue-600 outline-none ring-blue-600 focus:ring-1" />
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <label for="">Image</label>
                    <input type="file" id="image" name="image">
                </div>
                
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Submit
                    </button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="cancel" type="button">
                        Cancel
                    </button>
                </div>
            </form>
        </div>

    </div>

    
    <script>

    // $(document).ready(function() {
    // // Add click event listener to Cancel button
    // $('#cancel').click(function() {
    //     // Get all form elements and set their values to empty strings
    //     $('form input[type="text"], form input[type="email"], form input[type="password"], form input[type="file"]').val('');
    //     $('#image').val('');
    // });
    // });

    // function readURL(input) {
    // if (input.files && input.files[0]) {
    //     var reader = new FileReader();
    //     reader.onload = function (e) {
    //     $('#blah').attr('src', e.target.result).width(150).height(200);
    //     };
    //     reader.readAsDataURL(input.files[0]);
    // }
    // }
    </script>

 


@endsection
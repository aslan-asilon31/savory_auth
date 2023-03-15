<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Http\Requests\StoreUser;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create',compact('roles'));
    }

    public function store(StoreUser $request)
    {

        $image = $request->file('image');
        $image->storeAs('public/users', $image->hashName());
    
        $user = User::create([
            'name'     => $request->name,
            'email'   => $request->email,
            'password'   => Hash::make($request->password),
            'role'   => $request->role,
            'image'     => $image->hashName(),
        ]);
    
        $role = Role::create([
            'name'     => $request->id,
            'name'     => $request->name,
            'guard_name'   => 'web',
        ]);

        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('users.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('users.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    
    
        // return redirect()->route('users.index')
        //                 ->with('success','User created successfully');
    }
    
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}

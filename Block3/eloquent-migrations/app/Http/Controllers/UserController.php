<?php
//testing tests
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    public function index() {
        return response()->json(User::all());
    }

    public function show($id) {
        return response()->json(User::find($id));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'Пользователь добавлен',
            'user' => $user,
        ], 201);

        // $user = User::create($request->all());
        // return response()->json($user, 201);
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user);
    }
    
    public function destroy($id){
        User::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
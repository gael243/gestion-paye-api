<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['type_user'])->get();

        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'password'      => bcrypt($data['password']),
            'picture'       => $data['picture'],
            'type_user_id'  => $data['type_user_id'],
        ]);

        $this->storeImage($user);
        return response()->json($user);
    }

    private function storeImage(User $user){
        if (request('picture')) {
            $name = request('picture')->store('picture_users','public');
            $name = str_replace('picture_users/', '', $name);
            $user->update([
                'picture' => $name
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data  = $request->validated();
        if (!empty($data['password'])) {
            $user->update([
                'name'          => $data['name'],
                'email'         => $data['email'],
                'password'      => bcrypt($data['password']),
                'picture'       => $data['picture'],
                'type_user_id'  => $data['type_user_id'],
            ]);
          }else {
            unset($data['password']);
  
            $user->update([
                'name'          => $data['name'],
                'email'         => $data['email'],
                'picture'       => $data['picture'],
                'type_user_id'  => $data['type_user_id'],
            ]);
          }
        $updateUser = $user->update($data);

        $this->storeImage($user);
        return response()->json($updateUser);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null);
    }
}

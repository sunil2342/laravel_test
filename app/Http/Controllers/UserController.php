<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
     /**
     * The user controller instance.
     */
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @param  User  $users
     * @return void
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return view('users.show', ['user' => $this->users->findOrFail($id)]);
        } catch (Exception $e) {
            return redirect()->back()->with('error',trans('app.something_went_wrong'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            return view('users.edit', ['user' => $this->users->findOrFail($id)]);
        } catch (Exception $e) {
            return redirect()->back()->with('error',trans('app.something_went_wrong'));
        }
    }

     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $user = Cache::get('user:'.$id);

        return view('users.profile', ['user' => $user]);
    }

}

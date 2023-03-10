<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserBanRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $pageName = "Список пользователей";
        return view('admin.users.index', compact('users', 'pageName'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $pageName = 'Блокировка пользователя';
        return view('admin.users.ban', compact('user', 'pageName'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserBanRequest $request, User $user)
    {
        if($user->is_banned){
            $user->ban_reason = null;
            $user->is_banned = 0;
        }else{
            $user->fill($request->all());
            $user->is_banned = 1;
        }
        $user->save();
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        //
    }
}

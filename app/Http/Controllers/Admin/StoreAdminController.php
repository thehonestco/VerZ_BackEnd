<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Enums\RoleEnum;
use App\Models\Store;
use App\Http\Requests\AdminUserRequest;
use Illuminate\Support\Facades\Hash;

class StoreAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userQuery = User::whereRoleId(RoleEnum::STOREADMIN);
        if( $request->s !='')
        {
            $sq = $request->s;
            $userQuery->whereAny(['name','pharmacist_id_no','email','nickname'], 'like', '%' . $sq . '%');
        }
        $users = $userQuery->latest()->paginate(10);

        return view('superadmin.store_admin.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::get();
        return view('superadmin.store_admin.create', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminUserRequest $request)
    {
        $user = User::create([
            'name' => $request->full_name,
            'nickname' => $request->nick_name,
            'pharmacist_id_no' => $request->pharmacist_id_number,
            'email' => $request->email,
            'phone' => $request->number,
            'status' => $request->status,
            'splcode' =>  $request->splcode,
            'role_id' => RoleEnum::STOREADMIN,
            'password' => Hash::make('123456'),
        ]);
        $user->stores()->sync($request->stores);
        return to_route("superadmin.store-admin.index")
        ->withSuccess("Store admin created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('stores')->findOrFail($id);
        return view('superadmin.store_admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::with('stores')->findOrFail($id);
        $stores = Store::get();
        $storeIds = $user->stores->pluck('id')->toArray() ?? [];
        return view('superadmin.store_admin.edit', compact('user','stores','storeIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUserRequest $request,$id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->full_name,
            'nickname' => $request->nick_name,
            'pharmacist_id_no' => $request->pharmacist_id_number,
            'email' => $request->email,
            'phone' => $request->number,
            'status' => $request->status,
            'splcode' =>  $request->splcode,
        ]);
        $user->stores()->sync($request->stores);
        return to_route("superadmin.store-admin.index")
        ->withSuccess("Store admin updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

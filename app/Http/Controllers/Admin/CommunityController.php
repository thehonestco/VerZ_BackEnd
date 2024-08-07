<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\User;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $communityQuery =Community::withCount('users')->with('admin');
        if( $request->s !='')
        {
            $sq = $request->s;
            $communityQuery->whereAny(['name','nickname'], 'like', '%' . $sq . '%');
        }
        $communities = $communityQuery->latest()->paginate(10);

        return view('superadmin.community.index', ['communities' => $communities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        return view('superadmin.community.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $community = Community::create([
            'type'=>$request->type,
            'name'=>$request->name,
            'splcode' => $request->splcode,
            'nickname'=>$request->nickname,
            'status' => $request->status,
            'admin_id'=>$request->admin_id,
        ]);
        $community->users()->sync($request->members);
        return to_route("superadmin.community.index")
        ->withSuccess("community created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $community = Community::with('users')->findOrFail($id);
        return view('superadmin.community.show', compact('community'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $community = Community::findOrFail($id);
        $users = User::get();
        $userIds =  $community->users->pluck('id')->toArray();
        return view('superadmin.community.edit', compact('users','community','userIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $community =  Community::findOrFail($id);
        $community->update([
            'type'=>$request->type,
            'name'=>$request->name,
            'splcode' => $request->splcode,
            'nickname'=>$request->nickname,
            'status' => $request->status,
            'admin_id'=>$request->admin_id,
        ]);
        $community->users()->sync($request->members);
        return to_route("superadmin.community.index")
        ->withSuccess("community updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

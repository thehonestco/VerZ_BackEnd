<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Listing
        $storeQuery = Store::Query();
        if( $request->s !='')
        {
            $sq = $request->s;
            $storeQuery->where('name', 'like', '%' . $sq . '%')
                       ->orWhere('license_no', 'like', '%' . $sq . '%')
                       ->orWhere('director_name', 'like', '%' . $sq . '%')
                       ->orWhere('director_no', 'like', '%' . $sq . '%')
                       ->orWhere('pharmacist_id_no', 'like', '%' . $sq . '%')
                       ->orWhere('address', 'like', '%' . $sq . '%')
                       ->orWhere('niu_no', 'like', '%' . $sq . '%');
        }
        $stores = $storeQuery->orderBy("name", "asc")->paginate(10);

        return view('superadmin.store.index', ['stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('superadmin.store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'name'       => 'required|unique:stores',
          'license_no' => 'required',
          'status'     => 'required',
        ]);

        $store = Store::create([
          'name'        => $request->name,
          'splcode'     => uniqid(),
          'license_no'  => $request->license_no,
          'license_no'  => $request->license_no,
          'director_name' => $request->director_name,
          'director_no'   => $request->director_no,
          'pharmacist_id_no' => $request->pharmacist_id_no,
          'address'    => $request->address,
          'niu_no'     => $request->niu_no,
          'status'     => $request->status == 1 ? 1 : 0
        ]);

        return redirect()
               ->route("superadmin.store.index")
               ->withSuccess("Store created successfully.");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $store = Store::findOrFail($id);

        return view('superadmin.store.show', ['store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $store = Store::findOrFail($id);

        return view('superadmin.store.edit', ['store' => $store]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $store = Store::findOrFail($id);
        $data = $request->all();
        $request->validate([
            "name"       => "required|unique:stores,name," . $id,
            "license_no" => "required",
        ]);

        $store->name = $request->name;
        $store->license_no = $request->license_no;
        $store->director_name = $request->director_name;
        $store->director_no = $request->director_no;
        $store->pharmacist_id_no = $request->pharmacist_id_no;
        $store->address = $request->address;
        $store->niu_no = $request->niu_no;
        $store->status = $request->status == 1 ? 1 : 0;

        $store->save();

        return back()->withSuccess("Store was Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

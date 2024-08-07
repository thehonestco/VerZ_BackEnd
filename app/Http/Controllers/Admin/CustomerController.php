<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Listing
        $customerQuery = User::Query();
        if( $request->s !='')
        {
            $sq = $request->s;
            $customerQuery->where('name', 'like', '%' . $sq . '%')
                       ->orWhere('email', 'like', '%' . $sq . '%')
                       ->orWhere('nickname', 'like', '%' . $sq . '%')
                       ->orWhere('dob', 'like', '%' . $sq . '%')
					   ->orWhere('address', 'like', '%' . $sq . '%')
                       ;
        }
        $customers = $customerQuery->where('role_id', 3)
								   ->orderBy("name", "asc")
								   ->paginate(10);

        return view('superadmin.customer.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
		return view('superadmin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
		$request->validate([
          'email'       => 'required|unique:users',
          'name' 		=> 'required',
          'gender' 		=> 'required|integer|between:1,3',
          'status'      => 'required|integer|between:0,1',
          'password'      => 'required',
        ]);

        $customer = User::create([
          'name'          => $request->name,
          'splcode'       => uniqid(),
		  'role_id'		  => 3,
          'nickname'      => $request->nickname,
          'email'  		  => $request->email,
		  'phone'  		  => $request->phone,
          'password'      => $request->password,
          'gender' 		  => $request->gender,
          'address'       => $request->address,
          'status'        => $request->status
        ]);

        return redirect()
               ->route("superadmin.customer.index")
               ->withSuccess("Customer created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
		$customer = User::where("role_id", 3)->where("id", $id)->first();
		if(!$customer)
		{
			abort(404);
		}
        return view('superadmin.customer.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
		$customer = User::where("role_id", 3)->where("id", $id)->first();
		if(!$customer)
		{
			abort(404);
		}

        return view('superadmin.customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
		$customer = User::where("role_id", 3)->where("id", $id)->first();
		if(!$customer)
		{
			abort(404);
		}
		
        $data = $request->all();
        $validated = $request->validate([
            "email"       => "required|unique:users,email," . $id,
            "name"        => "required",
			'gender' 	  => 'required|integer|between:1,3',
            'status'      => 'required|integer|between:0,1',
        ]);

		$customer->name = $request->name;
		$customer->nickname      = $request->nickname;
		$customer->email  		  = $request->email;
		$customer->phone  		  = $request->phone;
        if($request->password != '')
		{
			$customer->password  = $request->password;
		}
		$customer->dob  		  = $request->dob;
		$customer->gender 		  = $request->gender;
		$customer->address       = $request->address;
		$customer->status        = $request->status;
      
		$customer->save();

        return back()->withSuccess("Customer was Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

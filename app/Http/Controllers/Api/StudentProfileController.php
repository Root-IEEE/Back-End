<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentProfileController extends Controller
{



    public function index(Request $request)
    {
        $user = $request->user();

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'image' => $user->image,
            'father_phone' => $user->studentDetail->father_phone,
            'mother_phone' => $user->studentDetail->mother_phone,
            'class_name' => $user->studentDetail->class_name,
        ];

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }


    public function update(Request $request)
    {
//        $user = $request->user();
//
//        // Validate the incoming request data
//        $validatedData = $request->validate([
//            'name' => 'string|max:255',
//            'phone' => 'string|min:8|max:11',
//            'email' => 'email|max:255|unique:users,email,' . $user->id,
//            // Add validation rules for other fields (image, father_phone, mother_phone, class_name, etc.)
//        ]);
//
//        // Update the user's profile attributes
//        $user->update($validatedData);
//
//        return response()->json(['message' => 'Profile updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }


}

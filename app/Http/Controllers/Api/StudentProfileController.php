<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
//        $user = $request->user();
//
//        // Validate the incoming request data
//        $validatedData = $request->validate([
//            'name' => 'string|max:255',
//            'phone' => 'string|min:8|max:11',
//            'email' => 'email|max:255|unique:users,email,' . $user->id,
//            'image' => 'image',
//            'father_phone' => 'string',
//            'mother_phone' => 'string',
//            'class_name' => 'string', ]);
//
//        $updatedData = [
//
//            $user->update([
//            'name' => $validatedData['name'],
//            'phone' => $validatedData['phone'],
//            'email' => $validatedData['email'],
//        ])
//
//        ];
//        $us = [
//            $user->studentDetail->update([
//            'father_phone' => $validatedData['father_phone'],
//            'mother_phone' => $validatedData['mother_phone'],
//            'class_name' => $validatedData['class_name'],
//        ])
//        ];
//
//        $update= array_merge($updatedData)

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

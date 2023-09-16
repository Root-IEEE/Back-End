<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentDetailsResource;
use App\Models\StudentDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class StudentDetailsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'father_phone' => 'required|string',
            'mother_phone' => 'required|string',
            'class_name' => 'required|string',
        ]);

        $user = auth()->user();

        if ($user->studentDetail) {
            return response()->json(['message' => 'Student details already exist for this user'], 400);
        }

        $studentDetail = new StudentDetail();
        $studentDetail->father_phone = $validatedData['father_phone'];
        $studentDetail->mother_phone = $validatedData['mother_phone'];
        $studentDetail->class_name = $validatedData['class_name'];
        $studentDetail->user_id = $user->id;
        $studentDetail->save();


        return new StudentDetailsResource($studentDetail);


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
    public function update($id)
    {

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

?>

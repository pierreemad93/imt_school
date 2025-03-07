<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Enrollment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows=Enrollment::paginate('5');
        return view('admin.users.pending_user', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Enrollment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pending' => $request->pending,
            'coursename'=> $request->coursename,
        ]);
        alert()->success('you are enrollnement at course , WE will contact With you', 'Done')->autoclose(4000)->cancelButton();
        return  redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pending=Enrollment::whereId($id)->delete();
        alert()->success('You Are Delete Pending Dourse', 'Done')->autoclose(4000)->cancelButton();
        return  redirect('/courses');

    }
}

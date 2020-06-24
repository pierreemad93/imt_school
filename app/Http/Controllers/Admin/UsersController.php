<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use PDF;
use App;
use App\Traits\uploadImageTrait;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = User::paginate(5);
        return view('admin.users.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(App\Http\Requests\Admin\userRequest $request)
    {
        //Save image
        $photo = $request->photo ;
        $file_extension=$request->photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path= 'assets/common/images/users';
        $request->photo->move($path , $file_name);
        // Stop use trait to solve it  issue

        if(isset($file_extension)){
            //insert at database
            User::create([
                'photo' => 'default-user.png' ,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
            ]);
        }else{
            User::create([
                'photo' =>  $file_name ,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
            ]);
        }
        alert()->success('you are add user', 'Done')->autoclose(4000)->cancelButton();
        return  redirect()->route('users.create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pdf()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTMl($this->convert_user_data_to_html());
        return $pdf->stream();

    }

    public function convert_user_data_to_html()
    {
        $user_data = User::get();
        $output = '  
                      <h3>IMT Student</h3>
                      <table width="100%" style="border-collapse: collapse; border: 0px;">
                      <tr>
                        <th style="border: 1px solid; padding:12px;" width="60%">Username</th>
                        <th style="border: 1px solid; padding:12px;" width="30%">Email</th>
                        <th style="border: 1px solid; padding:12px;" width="20%">Phone</th>  
                      </tr>
                    ';
        foreach ($user_data as $user) {
            $output .= '
                          <tr>
                           <td style="border: 1px solid; padding:12px;">'.$user->name.'</td>
                           <td style="border: 1px solid; padding:12px;">'.$user->email.'</td>
                           <td style="border: 1px solid; padding:12px;">'.$user->phone.'</td>
                          </tr>
            ';

        }
        $output .= '</table>';
        return $output;
    }
}

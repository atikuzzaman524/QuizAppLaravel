<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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



        $users =user::all();

        return view('users.index',['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
        if(Auth::check()){
            $user = user::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
//                'user_id' => Auth::user()->id
                'password'=>$request->input('password'),
            ]);
            if($user){
                return redirect()->route('users.index')
                    ->with('success' , 'User created successfully');
            }
        }

        return back()->withInput()->with('errors', 'Error creating new company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //

       // $user = user::where('id', $user->id )->first();
        $user = user::find($user->id );
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //

//        session(['abc' => '1']);
//        echo '<pre>';
//        var_dump(session('abc'));
//        echo '</pre>';
//        exit;

       // $user = user::where('id', $user->id )->first();
        $user = user::find($user->id );
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //

//        echo '<pre>';
//        var_dump($user->id);
//        echo '</pre>';
//        exit;

        $userUpdate= $user::where('id',$user->id)
           ->update([
                'name'=> $request->input('name'),
                 'email'=> $request->input('email')
          ]);
        if($userUpdate){

            return redirect()->route('users.show',['user'=>$user->id])
            ->with('success','User Updated successfully');

        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $findUser = user::find( $user->id);
        if($findUser->delete()){

            //redirect
            return redirect()->route('users.index')
                ->with('success' , 'Company deleted successfully');
        }
        return back()->withInput()->with('error' , 'Company could not be deleted');
    }
}

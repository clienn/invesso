<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Symfony\Component\Console\Output\ConsoleOutput;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(['message' => 'weeee', 'success' => true]);
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
        $user = new User;

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->middlename = $request->input('middlename');
        $user->gender = $request->input('gender');
        $user->birthdate = $request->input('birthdate');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        try { 
            if ($user->save()) {
                return response(['message' => 'success', 'success' => true]);
            }
        } catch(\Illuminate\Database\QueryException $ex){ 
        
            // $out = new ConsoleOutput();
            // $out->writeln(json_encode($ex));
            return response(['message' => 'possible duplicate of username/password.', 'success' => false]);
        }
        

        return response(['message' => 'failed', 'success' => false]);
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
    }
}

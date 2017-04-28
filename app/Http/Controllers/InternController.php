<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intern;
use View;
use Validator;
use Session;
// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Redirect;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $interns = Intern::all();

        // load the view and pass the interns
        return View::make('interns.index')
            ->with('interns', $interns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('interns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'firstname'       => 'required',
            'middlename'       => 'required',
            'lastname'       => 'required',
            'phone'       => 'required',
            'twitter'       => 'required',
            'gender'       => 'required',
            'state'       => 'required',
            'lg'       => 'required',
            'password'       => 'required',
            'bio'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('interns/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $intern = new Intern;
            $intern->firstname       = Input::get('firstname');
            $intern->middlename = Input::get('middlename');
            $intern->lastname = Input::get('lastname');
            $intern->phone = Input::get('phone');
            $intern->twitter = Input::get('twitter');
            $intern->gender = Input::get('gender');
            $intern->state = Input::get('state');
            $intern->lg = Input::get('lg');
            $intern->password = Input::get('password');
            $intern->bio = Input::get('bio');
            $intern->save();

            // redirect
            Session::flash('message', 'Successfully created intern!');
            return Redirect::to('interns');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

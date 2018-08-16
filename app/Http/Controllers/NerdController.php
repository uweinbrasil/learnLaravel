<?php

namespace App\Http\Controllers;

use App\Nerd;
//use Illuminate\Http\Request;
use Request;
use View;
use Validator;
use Session;
use Redirect;
class NerdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
     public function index()
     {
         // get all the nerds
         $nerds = Nerd::all();
 
         // load the view and pass the nerds
         // return View::make('nerds.index')
         //    ->with('nerds', $nerds);
         return view('nerd.index', compact('nerds'));
     }

     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        // return View::make('nerds.create');
        return view('nerd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
     public function store()
     {
         // validate
         // read more on validation at http://laravel.com/docs/validation
         $rules = array(
             'name'       => 'required',
             'email'      => 'required|email',
             'nerd_level' => 'required|numeric'
         );
         $validator = Validator::make(Request::all(), $rules);
 
         // process the login
         if ($validator->fails()) {
             return Redirect::to('nerds/create')
                 ->withErrors($validator)
                 ->withInput(Request::except('password'));
         } else {
             // store
             $nerd = new Nerd;
             $nerd->name       = Request::get('name');
             $nerd->email      = Request::get('email');
             $nerd->nerd_level = Request::get('nerd_level');
             $nerd->save();
 
             // redirect
             Session::flash('message', 'Successfully created nerd!');
             return Redirect::to('nerds');
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
        // get the nerd
        $nerd = Nerd::find($id);

        // show the view and pass the nerd to it      
        return view('nerd.show', compact('nerd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
     public function edit($id)
     {
         // get the nerd
         $nerd = Nerd::find($id);
 
         // show the edit form and pass the nerd        
         return view('nerd.edit', compact('nerd'));    
     }

     /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'nerd_level' => 'required|numeric'
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nerds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        } else {
            // store
            $nerd = Nerd::find($id);
            $nerd->name       = Request::get('name');
            $nerd->email      = Request::get('email');
            $nerd->nerd_level = Request::get('nerd_level');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('nerds');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
     public function destroy($id)
     {
         // delete
         $nerd = Nerd::find($id);
         $nerd->delete();
 
         // redirect
         Session::flash('message', 'Successfully deleted the nerd!');
         return Redirect::to('nerds');
     }
}

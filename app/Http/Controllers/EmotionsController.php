<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Input;
use Redirect;

class EmotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user_from = Input::get('user_from');
        $user_to = Input::get('user_to');

        $angry = Input::get('angry');
        
          $users = User::find($user_to);
      
               
               if($users->angry==NULL)
               { 

                $users->angry = ','.$user_from.',';


               }

               else
               {
                $users->angry = $users->angry.$user_from.',';
               }
              
              $users->save();


        return Redirect::back();
    }

     public function storehaha(Request $request)
    {
        $user_from = Input::get('user_from');
        $user_to = Input::get('user_to');

        $haha = Input::get('haha');
        
          $users = User::find($user_to);
      
               
               if($users->haha==NULL)
               { 

                $users->haha = ','.$user_from.',';


               }

               else
               {
                $users->haha = $users->haha.$user_from.',';
               }
              
              $users->save();


        return Redirect::back();
    }

     public function storelike(Request $request)
    {
        $user_from = Input::get('user_from');
        $user_to = Input::get('user_to');

        $like = Input::get('like');
        
          $users = User::find($user_to);
      
               
               if($users->like==NULL)
               { 

                $users->like = ','.$user_from.',';


               }

               else
               {
                $users->like = $users->like.$user_from.',';
               }
              
              $users->save();


        return Redirect::back();
    }

      public function storelove(Request $request)
    {
        $user_from = Input::get('user_from');
        $user_to = Input::get('user_to');

        $love = Input::get('love');
        
          $users = User::find($user_to);
      
               
               if($users->love==NULL)
               { 

                $users->love = ','.$user_from.',';


               }

               else
               {
                $users->love = $users->love.$user_from.',';
               }
              
              $users->save();


        return Redirect::back();
    }


  public function storesad(Request $request)
    {
        $user_from = Input::get('user_from');
        $user_to = Input::get('user_to');

        $sad = Input::get('sad');
        
          $users = User::find($user_to);
      
               
               if($users->sad==NULL)
               { 

                $users->sad = ','.$user_from.',';


               }

               else
               {
                $users->sad = $users->sad.$user_from.',';
               }
              
              $users->save();


        return Redirect::back();
    }

      public function storewow(Request $request)
    {
        $user_from = Input::get('user_from');
        $user_to = Input::get('user_to');

        $wow = Input::get('wow');
        
          $users = User::find($user_to);
      
               
               if($users->wow==NULL)
               { 

                $users->wow = ','.$user_from.',';


               }

               else
               {
                $users->wow = $users->wow.$user_from.',';
               }
              
              $users->save();


        return Redirect::back();
    }

      public function storeyay(Request $request)
    {
        $user_from = Input::get('user_from');
        $user_to = Input::get('user_to');

        $yay = Input::get('yay');
        
          $users = User::find($user_to);
      
               
               if($users->yay==NULL)
               { 

                $users->yay = ','.$user_from.',';


               }

               else
               {
                $users->yay = $users->yay.$user_from.',';
               }
              
              $users->save();


        return Redirect::back();
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

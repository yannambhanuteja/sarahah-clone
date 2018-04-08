<?php

namespace App\Http\Controllers;

use App\Message;

use App\User;
use Auth;
use Input;
use Illuminate\Http\Request;
use Redirect;

class MessageController extends Controller
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
        

        $this->validate($request,array(


        'message'=>'required'


        ));
        $message = new Message();

      if(Auth::check())
        $message->user_id = Auth::user()->id;
     else
         $message->user_id = 0;


        $message->user_to = Input::get('user_to');

        $user = User::find(Input::get('user_to'));
  if($user->points == NULL)
        {
            $points = 0;
        }
        else
        {
            $points = $user->points;
        }

        $user->points = $points+5;

        $user->save();

        $message->message = $request->message;

        $message->save();

        return Redirect::back();


    }

   
    public function show($id)
    {

        $find = Message::find($id);



        if(Auth::check() && Auth::user()->id == $find->user_to)
        {

             $message = Message::find($id);

        

            return view('showmessage',compact('message'));



        }

        else 

        return Redirect('/');
        
       

         



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function favour()
    {
        $id = Input::get('messageid');
        $message = Message::find($id);
        $message->favorite = '1';
        $message->save();
        
        return Redirect::back();
    }

  public function unfavour()
  {
       $id = Input::get('messageid');
        $message = Message::find($id);
        $message->favorite = '0';
        $message->save();
        
        return Redirect::back();

  }

public function delete()
{

    $id = Input::get('messageid');
        $message = Message::find($id);
        
        $message->delete();
        
        return Redirect::back();
}

    public function inbox($id)
    {


        if(Auth::check()&&Auth::user()->id== $id)
        {


            $messages = Message::where('user_to',$id)->orderBy('created_at','desc')->get();

            $fav = Message::where('user_to',$id)->where('favorite','1')->orderBy('created_at','desc')->get();

            return view('inbox',compact('messages','fav'));
        }

        else

            return Redirect('/');
    }

 public function sent($id)
    {


        if(Auth::check()&&Auth::user()->id== $id)
        {


            $messages = Message::where('user_id',$id)->orderBy('created_at','desc')->get();
$fav = Message::where('user_to',$id)->where('favorite','1')->orderBy('created_at','desc')->get();

            

            return view('sent',compact('messages','fav'));
        }

        else

            return Redirect('/');
    }
}

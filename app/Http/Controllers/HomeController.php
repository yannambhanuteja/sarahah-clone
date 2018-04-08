<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;

use App\Message;

use Redirect;

use DB;

use Image;

use Input;

use Spatie\Browsershot\Browsershot;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::check())
        return view('home');
      else
        return Redirect::route('login');
    }


    public function profile($user)
    {

      
      $users = User::where('name',$user)->first();
      if($users)
      {


           $messages = Message::where('user_to',$users->id)->get();

     

      return view('profile',compact('users','messages'));

      }
      
     

      else

        $error = "no user found";

        return view('error',compact('error'));



    }


    public function updatename(Request $request)
    {

         $this->validate($request,array(


        'name'=>'required|unique:users|alpha_dash'


        ));

        $user = User::find(Auth::user()->id);

        $user->name = $request->name;

        $user->save();

        return Redirect::back();

    }

    public function editprofile($userid)
    {
      
      $user = User::find($userid);

      if($user->id == Auth::user()->id)

      return view('editprofile',compact('user'));

      else
    
      return Redirect::back();


    }

    public function fourvites($userid)

    {

        if($userid==Auth::user()->id)
        {
            $messages = Message::where('user_to',$userid)->where('favorite','1')->get();

        return view('/favourites',compact('messages'));

        }

        
      else
    
      return Redirect::back();
        
    }

    public function leaderboard()
    {

        $members =  DB::table('users')
                ->orderBy('points', 'desc')
                ->limit(2)
                ->get();
       
        return view('leaderboard',compact('members'));
    }


    public function updateprofile(Request $request,$userid)
    {

       $id = $userid;

       $user = User::find($id);

       $user->anonymous = $request->anonymous;
       $user->emotion_result = $request->emotion_result;
       if($request->hasFile('image'))
       {
        $image= $request->file('image');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $location=public_path('users/'.$filename);
        Image::make($image)->save($location);

        $user->avatar = $filename;
       }
       $user->save();
       return Redirect::back()->with('Message','Profile updated successfully');



    }

     

     public function screenshot()
     {


           $url ='http://blog.examhero.in/message/2';

         $browsershot = new Browsershot();

         

          $pathToImage = public_path('screenshots/');

         $browsershot->setURL($url)->save('screenshots/file.jpg');


         

     }
}

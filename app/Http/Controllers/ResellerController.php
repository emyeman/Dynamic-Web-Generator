<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\User;
use Session;
use Redirect;
use Crypt;
use Config;

class ResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users')->where('user_id',Auth::user()->id)->get();

        // for count unseen of ticket 
        $ticket_unseen=DB::table('tickets')->where('reseller_id',Auth::user()->id)->where('is_seen',false)->get();
        $count_unseen=count($ticket_unseen);

        return view('reseller.index', compact('users','count_unseen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // for count unseen of ticket 
        $ticket_unseen=DB::table('tickets')->where('reseller_id',Auth::user()->id)->where('is_seen',false)->get();
        $count_unseen=count($ticket_unseen);

        return view('reseller.create', compact('count_unseen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
           'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'mobile' => 'required|unique:users|regex:/^[0-9]{10}/',
        ]);

        $imagePath='/default.jpg';
        if(Input::hasFile('image')){
                $file = Input::file('image');
                $filename = Input::file('image')->getClientOriginalName(); 
                $file = $file->move(public_path().'/images/profile/',$filename);
                // $user->image = $file->getRealPath();
                  $imagePath = '/images/profile/'.$filename;
        }

        $user = new User($request->all());
        $user->image = $imagePath;
        $user->password = bcrypt($request['password']);
        $user->user_id = Auth::user()->id;
        if( $user->addUser($user))
        {
            Session::flash('insert_success', 'A new service has been added successfully');
            return redirect('/site/create')->with('id', $user->id);
        }else{
            abort(500);
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        Session::set('user_id', $id);
        
        // for count unseen of ticket 
        $ticket_unseen=DB::table('tickets')->where('reseller_id',Auth::user()->id)->where('is_seen',false)->get();
        $count_unseen=count($ticket_unseen);

        return redirect('/dashboard', compact('count_unseen'));
        // return Config::get('user.user');
        // Auth::logout();
        // Session::flush();
        // $user = DB::table('users')->where('id',$id)->first();
        // Crypt::setKey(Config::get('app.key'));
        // $value = Crypt::decrypt($user->password);
        // dd($value);
        // return redirect('login')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
            // for count unseen of ticket 
        $ticket_unseen=DB::table('tickets')->where('reseller_id',Auth::user()->id)->where('is_seen',false)->get();
        $count_unseen=count($ticket_unseen);

        return view('reseller.edit', compact('user','count_unseen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required',
            'mobile' => 'required|regex:/^[0-9]{10}/',
        ]);

       $old_imag_name = $user['attributes']['image'];
         $imagePath=$old_imag_name;
         // dd($imagePath);
       $has_new_file = 0;
       if(Input::hasFile('image')){
                $has_new_file = 1;
                $file = Input::file('image');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/images/profile/',time().'.'.$extension);
                // $user->image = $file->getRealPath();

                $imagePath = '/images/profile/'.time().'.'.$extension;
        }
        // dd($imagePath);
        if($user->update([
          'name'=>$request->all()['name'],
            'email' => $request->all()['email'],
          'mobile' => $request->all()['mobile'],
          'image' => $imagePath,
            ]))
        {
          if($has_new_file == 1 && $old_imag_name != '/default.jpg')
          {
                try
                {
                    unlink(public_path().$old_imag_name);    
                }
                catch (\Exception $e) {
                }
          }
          
            return redirect('/reseller');
        }
        else
        {
            return back();
        }

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

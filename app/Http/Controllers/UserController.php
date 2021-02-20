<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8'

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);


        $request->session()->flash('success', 'votre compte as bien été créer');
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.profil',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         $this->validate($request,
        [
            'name'=>'sometimes|nullable|max:255',
            'email'=>"sometimes|email|nullable|unique:users,email,$user->id",
            'password'=>'sometimes|min:8|nullable',
            'image'=>'sometimes|nullable|image|max:2048',
            'desc'=> 'sometimes|nullable'


        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $desc = $request->input('desc');


        $user->name = $name;
        $user->email = $email;
        $user->desc = $desc;
        if($request->has('password') && $password !== null)
        {
            $user->password = bcrypt($password);
        }
        if($request->hasFile('image'))
        {

            $file = $request->file('image');

            // Get filename with extension
            $filenameWithExt = $file->getClientOriginalName();

            // Get file path
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Remove unwanted characters
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);

            // Get the original image extension
            $extension = $file->getClientOriginalExtension();

            // Create unique file name
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $file->move('storage/user/',$fileNameToStore);
            $user->image = 'storage/user/' .$fileNameToStore;

        }
        $user->save();
        Session::flash('success', 'votre profil as bien été modifiée');
        return redirect()->route('profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user)
        {

            if(file_exists(public_path($user->image)))
            {
                unlink(public_path($user->image));
            }
            $user->delete();
            Session::flash('success', 'le compte as bien été suprimer');

        }
        return redirect('login');
    }

    public function profil()
    {
        $user = auth()->user();
        $user_img = auth()->user()->image_up;
        $urls = Storage::url($user_img);
        return view('admin.user.profil',compact('user'));
    }


}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teams;
use App\Http\Controllers\Auth;
use App\Http\Requests\ValidateRequest;
class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
            // $this->middleware('auth');
            // $this->middleware('checkAge');

    }

    public function index()

    {     
          $teams  = Teams::paginate(3);
        //   return response()->json([$teams],200);
        return view('display',compact('teams'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addTeams');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responsea
     */
    public function store(ValidateRequest $request)
    {
        $sql               = new Teams();
        $sql->name         = $request->get('txtName');
        $sql->description  = $request->get('txtDes');
        $sql->leader       = $request->get('txtLeader');
        if($request->hasFile ('txtLogo'))
        {
            $file          = $request->file('txtLogo');
            $file_name     = $file->getClientOriginalName();
            $image         = str_random(4)."_".$file_name;
            while(file_exists("images".$image))
            {
               $image      = str_random(4)."_".$file_name;
            }
            $file->move("images",$file_name);
            $sql->logo     = $file_name;
        }
       else
       {
            $sql->logo     = "";
       }
        $sql->save();    
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return "day la show: ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Teams::find($id);
        return view ('updateTeams',compact('detail'));
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
        $team                = Teams::find($id);
        $team->name          = $request->txtName;
        $team->description   = $request->txtDes;
        $team->leader        = $request->txtLeader;
    //     if($request->hasFile ('txtLogo'))
    //     {
    //         $file            = $request->file('txtLogo');
    //         $file_name       = $file->getClientOriginalName();
    //         $image           = str_random(4)."_".$file_name;
    //         while(file_exists("images".$image))
    //         {
    //            $image        = str_random(4)."_".$file_name;
    //         }
    //         $file->move("images",$file_name);
    //         $sql->logo       = $file_name;
    //     }
    //    else
    //    {
    //         $sql->logo       = "";
    //    }
        $team->save();
        return redirect('/teams');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  
        $delete = Teams::find($id);
        $delete ->delete();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers\CusBoards;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CusBoard;

class CusBoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cusboards = CusBoard::paginate(3);
        return view('cusboards.index', compact('cusboards'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('cusboards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)    {
        $this->validate($request, ['name' => 'required|unique:cusboards|max:255',
                                    'lastName' => 'required', 
                                    'email'=> 'required',
                                    'phone'=> 'required',
                                    'address'=> 'required',]);        
        CusBoard::create($request->all()); 
        return redirect('cusboards');
    }
 


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cusboard = CusBoard::findOrFail($id);
        return view('cusboards.show',compact('cusboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $cusboard = CusBoard::findOrFail($id);
        return view('cusboards.edit',compact('cusboard'));
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
        $this->validate($request, ['name' => 'required',]);
        $cusboard = CusBoard::findOrFail($id);
        $cusboard->update($request->all());
        return redirect('cusboards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        CusBoard::destroy($id);
        return redirect('cusboards'); 
    }
}  


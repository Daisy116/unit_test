<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Bulletin_Board;
// extends Controller

class Bulletin_BoardController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    function index($table) {
        // $bulletinList = Bulletin_Board::all();     // 呼叫員工全部的資料
        // return view('Bulletin_Board.index', compact('bulletinList'));   // 由employees.index的view秀出來
        
        if(!preg_match('/[0-9a-z]+/i', $table)) {
            throw new IllegalNameException('Illegal Table Name');
        }
        $this -> _table = $table;
        echo $this;
        return $this;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // return view("Bulletin_Board.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($cols) {
        $this ->_cols = (array) $cols;
        echo $this;
        return $this;

        $emp = new Bulletin_Board();
        $emp->title = $request->title;
        $emp->department = $request->department;

        if($request->release_time != ''){
            $emp->release_time = $request->release_time;
        }

        if($request->position_in != ''){
            $emp->position_in = $request->position_in;
        }

        if($request->quota != ''){
            $emp->quota = $request->quota;
        }

        $emp->qualifications = $request->qualifications;
        $emp->email = $request->email;

        $emp->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $emp = Bulletin_Board::find($id);
        return view('Bulletin_Board.edit', compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $emp = Bulletin_Board::find($id);
        $emp->title = $request->title;
        $emp->department = $request->department;
        $emp->release_time = $request->release_time;
        $emp->position_in = $request->position_in;        
        $emp->quota = $request->quota; 
        $emp->qualifications = $request->qualifications;
        $emp->email = $request->email;
        $emp->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $emp = Bulletin_Board::find($id);
        $emp->delete();
        return redirect("/");
    }

    function detail($id) {       
        $emp2 = Bulletin_Board::find($id);
        // return $emp2->id;
        $bulletinList = Bulletin_Board::all();
        // return $bulletinList->first()->id;
        return view("Bulletin_Board.detail", compact('bulletinList','emp2'));
    }
}

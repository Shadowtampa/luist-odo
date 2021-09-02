<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Todo;
use App\Models\Todo_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boards = Board::where('user_id', Auth::user()->id)->get();
        return view ('boards.index', compact('boards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('boards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $board = new Board();
        $board->title = $request->title;
        $board->user_id = BoardController::get_logged_user_ID();
        $board->save();
        return redirect('/boards');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $board = Board::findorfail($id);
        $board_lists = Todo_list::where('board_id', $board->id)->get();
        $todos = Todo::where('board_id', $board->id)->get();
        return view('boards.show', compact('board','board_lists', 'todos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $board = Board::findorfail($id);
        return view('boards.edit', compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $board = Board::findorfail($id);
        $board->title = $request->title;
        $board->save();
        return redirect('/boards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board = Board::findorfail($id);
        $board->delete();
        return redirect('/boards');
    }

    public static function get_logged_user_ID(){
        return Auth::user()->id;
    }
}

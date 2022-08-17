<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Tareas;

class TareasController extends Controller {

    private $tareas;

    // al menos creo 4 tareas
    public function __construct() { 
        $cantTareas = rand(3, 7); 
        for ($x = 0; $x <= $cantTareas; $x++) { 
            $this->tareas[$x][0] = \Uuid::generate()->string; 
            $this->tareas[$x][1] = Http::get('https://hipsum.co/api/?type=hipster-centric&sentences=1')[0];
        }
 
    }

    public function index() {
 
        return view('index', ['tareas' => $this->tareas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
         $tarea = new Tareas;
 
        $tarea->id = $request->id;
         $tarea->titulo = $request->texto;
 
        $tarea->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}

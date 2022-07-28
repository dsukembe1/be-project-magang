<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kelas6;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class Kelas6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Kelas6::all();
        return response()->json($data); 
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
        $validasi=$request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'nama_mapel'=>'required',
            'nh1'=>'',
            'nh2'=>'',
            'uts'=>'',
            'uas'=>'',
            'na'=>''
        ]);

        try {
            $response = Kelas6::create($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => 'Error',
                'errors' =>$e-> getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Kelas6::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Kelas6::find($id);
        return response()->json($data);
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
        $validasi=$request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'nama_mapel'=>'required',
            'nh1'=>'',
            'nh2'=>'',
            'uts'=>'',
            'uas'=>'',
            'na'=>''
            // 'nh1'=>'',
            // 'nh2'=>'',
            // 'uts'=>'',
            // 'uas'=>'',
            // 'na'=>''
        ]);

        try {
            $response = Kelas6::find($id);
            $response->update($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => 'Error',
                'errors' =>$e-> getMessage()
            ]);
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
        // Kelas6::destroy($id);
        try {
            $kelas6=Kelas6::find($id);
            $kelas6->delete();
            return response()->json([
                'success' => true,
                'message' => 'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => 'Error',
                'errors' =>$e-> getMessage()
            ]);
        }
    }
}

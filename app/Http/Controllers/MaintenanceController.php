<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use Illuminate\Support\Facades\Validator;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Maintenance::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Maintenance',
            'data' => $posts
            // 'data' => MaintenanceResource::collection($posts)
        ], 200); //http respondcode

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'tgl_mtc' => 'required',
            'no_mtc' => 'required',
            'client_slug' => 'required',
            'wajib_pajak_id' => 'required',
            'dev_id' => 'required',
            'kondisi_awal' => 'required',
            'penanganan' => 'required',
            'status_akhir' => 'required',
            'created_by' => auth()->user()->id,
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post = Maintenance::create([
            'tgl_mtc' => $request->tgl_mtc,
            'no_mtc' => $request->no_mtc,
            'client_slug' => $request->client_slug,
            'wajib_pajak_id' => $request->wajib_pajak_id,
            'dev_id' => $request->dev_id,
            'kondisi_awal' => $request->kondisi_awal,
            'penanganan' => $request->penanganan,
            'status_akhir' => $request->status_akhir,
            
        ]);

        if ($post) {


            return response()->json([
                'success' => true,
                'message' => 'Data Created',
                'data'    => $post
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data Failed to Save',
        ], 409);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Maintenance::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Maintenance',
            'data' => $post
        ], 200);
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
        $validator = Validator::make($request->all(), [
            'tgl_mtc' => 'required',
            'no_mtc' => 'required',
            'client_slug' => 'required',
            'wajib_pajak_id' => 'required',
            'dev_id' => 'required',
            'kondisi_awal' => 'required',
            'penanganan' => 'required',
            'status_akhir' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $post = Maintenance::findOrFail($id);

        if ($post) {

            $post->update([
                'tgl_mtc' => $request->tgl_mtc,
                'no_mtc' => $request->no_mtc,
                'client_slug' => $request->client_slug,
                'wajib_pajak_id' => $request->wajib_pajak_id,
                'dev_id' => $request->dev_id,
                'kondisi_awal' => $request->kondisi_awal,
                'penanganan' => $request->penanganan,
                'status_akhir' => $request->status_akhir,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data Updated',
                'data'    => $post
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data Not Found',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Maintenance::findOrfail($id);

        if ($post) {
            $post->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data Deleted',
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data Not Found',
        ], 404);
    }
}

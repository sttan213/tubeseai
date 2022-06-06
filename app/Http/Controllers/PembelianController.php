<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Validator;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Pembelian::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Pembelian',
            'data' => $posts
        ], 200); 
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
            'kd_prov' => 'required',
            'kd_kota' => 'required',
            'client_slug' => 'required',
            'project_year' => 'required',
            'batch' => 'required',
            'device_quantity' => 'required',
            'project_name' => 'required',
            'vendor' => 'required',
            'instansi' => 'required',
            'funded_by' => 'required',
            'spk_no' => 'required',
            'pks_no' => 'required',
            'pks_date' => 'required',
            'bast_date' => 'required',
            'metode' => 'required',
            'price_unit' => 'required',
            'price_total' => 'required',
            'duration' => 'required',
            'stage' => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post = Pembelian::create([
            'kd_prov' => $request->kd_prov,
            'kd_kota' => $request->kd_kota,
            'client_slug' => $request->client_slug,
            'project_year' => $request->project_year,
            'batch' => $request->batch,
            'device_quantity' => $request->device_quantity,
            'project_name' => $request->project_name,
            'vendor' => $request->vendor,
            'instansi' => $request->instansi,
            'funded_by' => $request->funded_by,
            'spk_no' => $request->spk_no,
            'pks_no' => $request->pks_no,
            'pks_date' => $request->pks_date,
            'bast_date' => $request->bast_date,
            'metode' => $request->metode,
            'price_unit' => $request->price_unit,
            'price_total' => $request->price_total,
            'duration' => $request->duration,
            'stage' => $request->stage,
            
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
        $post = Pembelian::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Data Pembelian',
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
            'kd_prov' => 'required',
            'kd_kota' => 'required',
            'client_slug' => 'required',
            'project_year' => 'required',
            'batch' => 'required',
            'device_quantity' => 'required',
            'project_name' => 'required',
            'vendor' => 'required',
            'instansi' => 'required',
            'funded_by' => 'required',
            'spk_no' => 'required',
            'pks_no' => 'required',
            'pks_date' => 'required',
            'bast_date' => 'required',
            'metode' => 'required',
            'price_unit' => 'required',
            'price_total' => 'required',
            'duration' => 'required',
            'stage' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $post = Pembelian::findOrFail($id);

        if ($post) {

            $post->update([
                'kd_prov' => $request->kd_prov,
                'kd_kota' => $request->kd_kota,
                'client_slug' => $request->client_slug,
                'project_year' => $request->project_year,
                'batch' => $request->batch,
                'device_quantity' => $request->device_quantity,
                'project_name' => $request->project_name,
                'vendor' => $request->vendor,
                'instansi' => $request->instansi,
                'funded_by' => $request->funded_by,
                'spk_no' => $request->spk_no,
                'pks_no' => $request->pks_no,
                'pks_date' => $request->pks_date,
                'bast_date' => $request->bast_date,
                'metode' => $request->metode,
                'price_unit' => $request->price_unit,
                'price_total' => $request->price_total,
                'duration' => $request->duration,
                'stage' => $request->stage,
            
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
        $post = Pembelian::findOrfail($id);

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

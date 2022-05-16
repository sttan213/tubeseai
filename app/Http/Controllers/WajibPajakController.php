<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WajibPajak;
use Illuminate\Support\Facades\Validator;

class WajibPajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = WajibPajak::latest()->get();

        // return response()->json([
        //     'success' => true,
        //     'message' => 'List Data Wajib Pajak',
        //     'data' => $posts
        // ], 200);

        $merchants = WajibPajak::with('device')->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data',
            'data' => $merchants,
            ], 200);
        //return response()->json($merchants, 200);

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
            'wp_id' => 'required',
            'npwpd' => 'required',
            'name' => 'required',
            'address' => 'required',
            'type' => 'required',
            'contact_name'  => 'required',
            'contact_phone' => 'required',
            'active' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post = WajibPajak::create([
            'kd_prov' => $request->kd_prov,
            'kd_kota' => $request->kd_kota,
            'client_slug' => $request->client_slug,
            'wp_id' => $request->wp_id,
            'npwpd' => $request->npwpd,
            'name' => $request->name,
            'address' => $request->address,
            'type' => $request->type,
            'contact_name'  => $request->contact_name,
            'contact_phone' => $request->contact_phone,
            'active' => $request->active,
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
        // kalau belum pakai relasi 
        // $post = WajibPajak::findOrFail($id);

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Detail Data Wajib Pajak',
        //     'data' => $post
        // ], 200);

        $merchants = WajibPajak::with('device')->where('id', $id)->first();
        return response()->json([
            'success' => true,
            'message' => 'Detail Data',
            'data' => $merchants,
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
            'wp_id' => 'required',
            'npwpd' => 'required',
            'name' => 'required',
            'address' => 'required',
            'type' => 'required',
            'contact_name'  => 'required',
            'contact_phone' => 'required',
            'active' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $post = WajibPajak::findOrFail($id);

        if ($post) {

            $post->update([
                'kd_prov' => $request->kd_prov,
                'kd_kota' => $request->kd_kota,
                'client_slug' => $request->client_slug,
                'wp_id' => $request->wp_id,
                'npwpd' => $request->npwpd,
                'name' => $request->name,
                'address' => $request->address,
                'type' => $request->type,
                'contact_name'  => $request->contact_name,
                'contact_phone' => $request->contact_phone,
                'active' => $request->active,
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
        $post = WajibPajak::findOrfail($id);

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

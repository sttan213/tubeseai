<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ketersediaan;
use Illuminate\Support\Facades\Validator;

class KetersediaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ketersediaan = Ketersediaan::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Ketersediaan',
            'data' => $ketersediaan
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
            'delivery_order' => 'required',
            'date_send' => 'required',
            'client_slug' => 'required',
            'quantity' => 'required',
            'kurir_agent' => 'required',
            'shipment_number' => 'required',
            'tracking' => 'required',
            'instansi' => 'required',
            'address' => 'required',
            'nama_penerima' => 'required',
            'no_hp' => 'required',
            'staff_user_id' => 'required',
            'sender_user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post = Ketersediaan::create(
        [
            'delivery_order' => $request->delivery_order,
            'date_send' => $request->date_send,
            'client_slug' => $request->client_slug,
            'quantity' => $request->quantity,
            'kurir_agent' => $request->kurir_agent,
            'shipment_number' => $request->shipment_number,
            'tracking' => $request->tracking,
            'instansi' => $request->instansi,
            'address' => $request->address,
            'nama_penerima' => $request->nama_penerima,
            'no_hp' => $request->no_hp,
            'staff_user_id' => $request->staff_user_id,
            'sender_user_id' => $request->sender_user_id,
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
        $post = Ketersediaan::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Ketersediaan',
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
            'delivery_order' => 'required',
            'date_send' => 'required',
            'client_slug' => 'required',
            'quantity' => 'required',
            'kurir_agent' => 'required',
            'shipment_number' => 'required',
            'tracking' => 'required',
            'instansi' => 'required',
            'address' => 'required',
            'nama_penerima' => 'required',
            'no_hp' => 'required',
            'staff_user_id' => 'required',
            'sender_user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $post = Ketersediaan::findOrFail($id);

        if ($post) {

            $post->update([
                'delivery_order' => $request->delivery_order,
                'date_send' => $request->date_send,
                'client_slug' => $request->client_slug,
                'quantity' => $request->quantity,
                'kurir_agent' => $request->kurir_agent,
                'shipment_number' => $request->shipment_number,
                'tracking' => $request->tracking,
                'instansi' => $request->instansi,
                'address' => $request->address,
                'nama_penerima' => $request->nama_penerima,
                'no_hp' => $request->no_hp,
                'staff_user_id' => $request->staff_user_id,
                'sender_user_id' => $request->sender_user_id,
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
        $post = Ketersediaan::findOrfail($id);

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

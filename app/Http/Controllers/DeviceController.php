<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeviceResource;
use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Validator;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Device::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Device',
            'data' => $posts
            // 'data' => DeviceResource::collection($posts)
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
            'client_slug' => 'required',
            // 'batch' => NULL,
            'wajib_pajak_id' => 'required',
            'dev_id' => 'required',
            'gsm' => 'required',
            'method' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post = Device::create([
            'client_slug' => $request->client_slug,
            // 'batch' => NULL,
            'wajib_pajak_id' => $request->wajib_pajak_id,
            'dev_id' => $request->dev_id,
            'gsm' => $request->gsm,
            'method' => $request->method,
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
        $post = Device::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Device',
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
            'client_slug' => 'required',
            // 'batch' => NULL,
            'wajib_pajak_id' => 'required',
            'dev_id' => 'required',
            'gsm' => 'required',
            'method' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $post = Device::findOrFail($id);

        if ($post) {

            $post->update([
            'client_slug' => $request->client_slug,
            // 'batch' => NULL,
            'wajib_pajak_id' => $request->wajib_pajak_id,
            'dev_id' => $request->dev_id,
            'gsm' => $request->gsm,
            'method' => $request->method,
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
        $post = Device::findOrfail($id);

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

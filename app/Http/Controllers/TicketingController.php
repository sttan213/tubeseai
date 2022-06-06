<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticketing;
use Illuminate\Support\Facades\Validator;

class TicketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Ticketing::latest()->get();

        // return response()->json([
        //     'success' => true,
        //     'message' => 'List Data Ticketing',
        //     'data' => $posts
        // ], 200); 

        $tiket = Ticketing::with('device')->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data',
            'data' => $tiket,
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
            'title' => 'required',
            'description' => 'required',
            'client_slug' => 'required',
            'category_id' => 'required',
            'product_id' => 'required',
            'capture_method_id' => 'required',
            'dev_id' => 'required',
            'request_by' => 'required',
            'assign_to' => 'required',
            'status' => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post = Ticketing::create([
            'title' => $request->title,
            'description' => $request->description,
            'client_slug' => $request->client_slug,
            'category_id' => $request->category_id,
            'product_id' => $request->product_id,
            'capture_method_id' => $request->capture_method_id,
            'dev_id' => $request->dev_id,
            'request_by' => $request->request_by,
            'assign_to' => $request->assign_to,
            'status' => $request->status,
            
            
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
        // $post = Ticketing::findOrFail($id);

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Data Ticketing',
        //     'data' => $post
        // ], 200);

        $tiket = Ticketing::with('device')->get();
        return response()->json([
            'success' => true,
            'message' => 'Detail Data',
            'data' => $tiket,
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
            'title' => 'required',
            'description' => 'required',
            'client_slug' => 'required',
            'category_id' => 'required',
            'product_id' => 'required',
            'capture_method_id' => 'required',
            'dev_id' => 'required',
            'request_by' => 'required',
            'assign_to' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $post = Ticketing::findOrFail($id);

        if ($post) {

            $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'client_slug' => $request->client_slug,
            'category_id' => $request->category_id,
            'product_id' => $request->product_id,
            'capture_method_id' => $request->capture_method_id,
            'dev_id' => $request->dev_id,
            'request_by' => $request->request_by,
            'assign_to' => $request->assign_to,
            'status' => $request->status,
            
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
        $post = Ticketing::findOrfail($id);

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

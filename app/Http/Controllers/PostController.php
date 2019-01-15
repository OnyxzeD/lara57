<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use \Validator;
use Response;
use App\Http\Requests;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate();
        return view('post.index', compact('post'));
    }

    public function listData()
    {
        return response()->json(Post::get()->toArray());
    }

    public function addPost(Request $request)
    {

        /*return response()->json([
            'tanggal'    => $request->tanggal,
            'mulai'      => $request->mulai,
            'selesai'    => $request->selesai,
            'pakai'      => $request->pakai,
            'cp'         => $request->cp,
            'product'    => $request->product,
            'priority'   => $request->priority,
            'status'     => $request->status,
            'topic'      => $request->topic,
            'issue_desc' => $request->issue_desc,
            'prob_solve' => $request->prob_solv,
            'tech'       => $request->tech
        ]);*/

        $validator = Validator::make($request->all(), [
            'tanggal'    => 'required',
            'mulai'      => 'required',
            'selesai'    => 'required',
            'pakai'      => 'required',
            'cp'         => 'required',
            'product'    => 'required',
            'priority'   => 'required',
            'status'     => 'required|numeric',
            'topic'      => 'required',
            'issue_desc' => 'required',
            'prob_solv'  => 'required',
            'tech'       => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => true, 'message' => $validator->errors()->all()]);
        }
        $post = new Post;
        $post->tanggal_lapor = $request->tanggal;
        $post->w_mulai = $request->mulai;
        $post->w_selesai = $request->selesai;
        $post->w_pakai = $request->pakai;
        $post->cp = $request->cp;
        $post->product = $request->product;
        $post->priority = $request->priority;
        $post->status = $request->status;
        $post->topic = $request->topic;
        $post->issue_desc = $request->issue_desc;
        $post->prob_solv = $request->prob_solv;
        $post->tech = $request->tech;
        $post->save();

        return response()->json(['errors' => false, 'message' => 'Data Saved!']);

    }

    public function editPost(Request $request)
    {
        $post = Post::find($request->id);
        $post->tanggal_lapor = $request->tanggal;
        $post->w_mulai = $request->mulai;
        $post->w_selesai = $request->selesai;
        $post->w_pakai = $request->pakai;
        $post->cp = $request->cp;
        $post->product = $request->product;
        $post->priority = $request->priority;
        $post->status = $request->status;
        $post->topic = $request->topic;
        $post->issue_desc = $request->issue_desc;
        $post->prob_solv = $request->prob_solv;
        $post->tech = $request->tech;
        $post->save();

        return response()->json(['errors' => false, 'message' => 'Data Updated!']);
    }

    public function editModal($id)
    {
        $data = Post::find($id);
//        return view('post.modal-edit', compact('data'));
        return response()->json($data->toArray());
    }

    public function deletePost($id)
    {
        $q = Post::find($id);
        if (!$q) {
            return response()->json(['errors' => true, 'message' => 'Data Not Found!']);
        }
        $q->delete();
        return response()->json(['errors' => false, 'message' => 'Data Deleted!']);
    }
}

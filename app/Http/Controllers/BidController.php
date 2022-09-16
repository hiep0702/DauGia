<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Supports\Responder;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bid::all();
        return Responder::success($data, 'Danh sách bids');
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
        $data = Bid::create($request->all());
        return Responder::success($data, 'Tạo bid thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bid::find($id);
        return Responder::success($data, 'Lấy bid thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bid::where('id', $id)->update($request->all());
        return Responder::success($data, 'Cập nhật bid thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Bid::where('id', $id)->delete();
        return Responder::success($data, 'Xóa bid thành công');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Supports\Responder;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $auctions = Auction::query()->orderByDesc('id')->get();
        return Responder::success($auctions, 'Danh sach phiên đấu giá');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= Auction::create($request->all());
        return Responder::success($data, 'Tạo phiên đấu giá thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auction = Auction::find($id);
        return Responder::success($auction, 'Lấy phiên đấu giá thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Auction::where('id',$id)->update($request->all());
        return Responder::success($data,'Cập nhật phiên đấu giá thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteAuction = Auction::query()->where('id',$id)->delete();
        return Responder::success($deleteAuction, 'Xóa đấu giá thành công');
    }
}

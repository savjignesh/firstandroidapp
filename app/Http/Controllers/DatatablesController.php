<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Datatables;
use App\Item;


class DatatablesController extends Controller
{
    //Get all Account Items
    public function ItemsListDatatable()
    {
        $items = Item::select(['account_id', 'user_id', 'category_id', 'name', 'description', 'type', 'created_at']);

        return Datatables::of($items)
            // ->addColumn('action', function ($item) {
            //     return '<a href="/'.session("domain").'/account/order/view/'.$order->order_id.'" class="btn btn-xs btn-order " style="padding: 3px 10px;">View Order </a>';
            // })
            ->editColumn('created_at', function ($item) {
                return date("m/d/Y", strtotime($item->created_at));
            })
            // ->filterColumn('created_at', function ($query, $keyword) {
            //     $query->whereRaw("DATE_FORMAT(created_at,'%m/%d/%Y') like ?", ["%$keyword%"]);
            // })
            ->make(true);
    }

}

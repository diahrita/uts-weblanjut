<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function Barang()
    {
        $data = [
            'barang' => Review::all()
        ];
        return view('uts.review', $data);
    }

    public function Detail($id)
    {
        $detail = Review::find($id);
        return view('uts.detail', compact('detail'));
    }
}

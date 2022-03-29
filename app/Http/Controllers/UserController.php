<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::select(
            'email',
            'address',
            'phone',
            'no_ktp',
            'nama_diri',
            'nama_brand',
            'alamat_tempat_usaha',
            'nomor_induk_berusaha',
            'get_data'
        )->where('get_data', '=', null)->where('nomor_induk_berusaha', '!=', null || '0')->get();
        return response()->json([
            'status' => true,
            'message' => 'hai guys',
            'Users' => $user
        ]);
    }
}

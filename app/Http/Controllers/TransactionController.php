<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        if ($transactions->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!",
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $transactions
        ]);
    }
}
 
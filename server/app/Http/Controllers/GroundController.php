<?php

namespace App\Http\Controllers;

use App\Models\Ground;
use Illuminate\Http\Request;

class GroundController extends Controller
{
    public function list(Request $req) {
        $sortMethod = "";
        return Ground::orderBy("created_at",$sortMethod)->get();
    }

    public function detail($id) {
        return Ground::where("id",$id)->first();
    }

    public function create(Request $req) {
        $groundData = json_decode($req->getContent());

        $ground = new Ground;

        $ground->common = $groundData->common;
        $ground->photo = $groundData->photo;
        $ground->dimension = $groundData->dimension;
        $ground->cadastral_sheet = $groundData->cadastral_sheet;
        $ground->cadastral_map = $groundData->cadastral_map;
        $ground->type_ground = $groundData->type_ground;
        $ground->irrigation = $groundData->irrigation;
        $ground->offer_type = $groundData->offer_type;
        $ground->offer_fee = $groundData->offer_fee;
        $ground->availability = $groundData->availability;
        
        $ground->save();

        return response()->json($ground,201);
    }

    public function edit(Request $req, $id) {
        $groundData = json_decode($req->getContent());

        $ground = Ground::where("id",$id)->first();

        $ground->common = $groundData->common;
        $ground->photo = $groundData->photo;
        $ground->dimension = $groundData->dimension;
        $ground->cadastral_sheet = $groundData->cadastral_sheet;
        $ground->cadastral_map = $groundData->cadastral_map;
        $ground->type_ground = $groundData->type_ground;
        $ground->irrigation = $groundData->irrigation;
        $ground->offer_type = $groundData->offer_type;
        $ground->offer_fee = $groundData->offer_fee;
        $ground->availability = $groundData->availability;
        
        $ground->save();

        return response()->json($ground,201);
    }
}

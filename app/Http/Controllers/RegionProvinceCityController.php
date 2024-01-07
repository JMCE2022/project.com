<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Province;
use App\Models\City;

class RegionProvinceCityController extends Controller
{
    public function region()
    {
        $data['region'] = Region::get(["name","id"]);
        return view('admin.childrens.add.addchildrens',$data);
    }
    public function getProvince(Request $request)
    {
        $data['provinces'] = Province::where("region_id",$request->region_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("province_id",$request->province_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
}

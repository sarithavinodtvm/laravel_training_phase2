<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Block;

class AjaxController extends Controller
{
    public function loadAjaxComboPage(){
        $district=District::all();
        return view('ajaxComboPage',['districtList'=>$district]);
    }

    public function loadBlocks($district){
        $blocks=Block::where('dist_id','=',$district)->get();
        return $blocks;
    }
}

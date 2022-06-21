<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        $stats = json_decode(config("dashboard_stats.stats"));    
        return view("dashboard_main",  ["stats"=> $stats]);
    }
    
    public function table_crud($tableName){
        
        return view("crud", ["tableName" => $tableName]);
    }
}

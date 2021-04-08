<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use DB;

class IndexController extends Controller
{
    public function dashboard_stats(Request $request){
        if (!empty($request->header()['x-access-key'])) {
            $store_access_key = $request->header()['x-access-key'][0];
            if (($store_access_key) !== "pNRq8BGvIHk/G9AwlBxKG5lz97eYDaxnWO0YYs+VrMY=") {
                $output =
                    [
                    'value' => "Please provide correct access key to get  details",
                ];
                return response()->json($output);
            }
        } 
        else {
            $output =
                [
                'value' => "Please provide  access key to get  details",
            ];
            return response()->json($output);
        }
        try 
        {
            $stock = [];
            $result = []; 
            $MSI = [];  // Most Sold Item
            $transaction = [];
            $totalStock  = Product::sum('quantity');
            $last7dayTransaction = Transaction::where('created_at', '>=', \Carbon\Carbon::today()->subDays(7))->sum('total');
            $transactionTotal = Transaction::where('created_at', '>=', \Carbon\Carbon::today()->subDays(7))->select('total','product_info')->get()->toArray();
            $MSI['ProdLastDay'] = array_search(max(json_decode($transactionTotal[0]['product_info'], true)),json_decode($transactionTotal[0]['product_info'], true));
            $MSI['Prod2ndDay'] = array_search(max(json_decode($transactionTotal[1]['product_info'], true)),json_decode($transactionTotal[1]['product_info'], true));
            $MSI['Prod3rdDay'] = array_search(max(json_decode($transactionTotal[2]['product_info'], true)),json_decode($transactionTotal[2]['product_info'], true));
            $MSI['Prod4thDay'] = array_search(max(json_decode($transactionTotal[3]['product_info'], true)),json_decode($transactionTotal[3]['product_info'], true));
            
            $today = date("Y-m-d"); $lastDay = date('Y-m-d',strtotime("-1 day"));  $thirdDay=date('Y-m-d',strtotime("-2 day"));
            $fouthDay = date('Y-m-d',strtotime("-3 day"));$fifthDay = date('Y-m-d',strtotime("-4 day"));$sixthDay = date('Y-m-d',strtotime("-5 day"));
            
            $transaction['TranslastDay'] = Transaction::whereBetween('created_at',[$today."00:00:00",$lastDay." 23:59:59"])->sum('total');
            $transaction['Trans2ndDay'] = Transaction::whereBetween('created_at',[$lastDay."00:00:00",$thirdDay." 23:59:59"])->sum('total');
            $transaction['Trans3rdDay'] = Transaction::whereBetween('created_at',[$thirdDay."00:00:00",$fouthDay." 23:59:59"])->sum('total');
            $transaction['Trans4thDay'] = Transaction::whereBetween('created_at',[$fouthDay."00:00:00",$fifthDay." 23:59:59"])->sum('total');
            $transaction['Trans5thDay'] = Transaction::whereBetween('created_at',[$fouthDay."00:00:00",$fifthDay." 23:59:59"])->sum('total');
            
            $last5Entry = Transaction::orderBy('id', 'desc')->select('customer_name','customer_email','total','created_at')->take(5)->get()->toArray();
            $transactionTotal = Transaction::orderBy('id', 'desc')->select('total','product_info')->get()->toArray();
            $transTotal['trLast'] = array_search(max(json_decode($transactionTotal[0]['product_info'], true)),json_decode($transactionTotal[0]['product_info'], true));
            $transTotal['tr2nd'] = array_search(max(json_decode($transactionTotal[1]['product_info'], true)),json_decode($transactionTotal[1]['product_info'], true));
            $transTotal['tr3rd'] = array_search(max(json_decode($transactionTotal[2]['product_info'], true)),json_decode($transactionTotal[2]['product_info'], true));
            $transTotal['tr4th'] = array_search(max(json_decode($transactionTotal[3]['product_info'], true)),json_decode($transactionTotal[3]['product_info'], true));

            $stock['totalStock'] = $totalStock;
            $stock['last7dayTransaction'] = $last7dayTransaction;
            $result = array($stock,$MSI,$transaction,$last5Entry,$transTotal);
            $output = 
            [
                'status'                 => 1,
                'Message'                => "Successfully Data Passed",
                'data'                   => $result
            ];
            return response()->json($output);  				
        }
        catch (\Exception $e) {
            $output  = 
    			[
					'status'                 => 0,
					'Message'                => "No Data Found",
					'data'                   => ''
				];  
            return response()->json($output);  	
      		// return $e->getMessage();
    	}
    }
    public function products(Request $request){
        if (!empty($request->header()['x-access-key'])) {
            $store_access_key = $request->header()['x-access-key'][0];
            if (($store_access_key) !== "pNRq8BGvIHk/G9AwlBxKG5lz97eYDaxnWO0YYs+VrMY=") {
                $output =
                    [
                    'value' => "Please provide correct access key to get  details",
                ];
                return response()->json($output);
            }
        } 
        else {
            $output =
                [
                'value' => "Please provide  access key to get  details",
            ];
            return response()->json($output);
        }
        try
        {
            $result=[];
            if(isset($request->header()['name'][0])) {
                $prod = $request->header()['name'][0];
                $data = Product::where('name','LIKE', "%$prod%")->take(5)->get();
            // dd($prod);
                if($data=="[]"){
                    $result  = [

                       'status'                 => 404,
                        'Message'                => "Data Not Found",
                        'data'                   => $data
                    ]; 
                    return response()->json($result);
                }
                $result  = 
                [
                    'status'                 => 200,
                    'Message'                => "Successfully Data Parsed",
                    'data'                   => $data
                ];
                } else {
                    $data = Product::paginate(10);
                    $result  = 
                    [
                        'status'                 => 200,
                        'Message'                => "Successfully Data Parsed",
                        'data'                   => $data
                    ];  
                }
            return response()->json($result);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}

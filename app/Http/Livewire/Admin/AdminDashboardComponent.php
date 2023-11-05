<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use Livewire\WithPagination;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Review;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminDashboardComponent extends Component
{
    use WithPagination;
    public function orderExport()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }
    public function render()
    {
        $products=Product::where('quantity',20)->paginate(12);
        $users=User::where('utype','USR')->get();
        $orders=Order::all();
        $sale=Order::sum('total');
        $ords=Order::where('status','pending')->orderBy('created_at','desc')->paginate(12);
        $today_revenue=Order::where('created_at',today())->sum('total');
        $month_sales=DB::table('orders')->select(DB::raw("DATE_FORMAT(created_at, '%M') as month"),DB::raw('SUM(total) as total_sale'))
        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M')"))->get();
        $weekly_sale=Order::whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('total');
        $monthly_rev = DB::table('orders')
        ->select(DB::raw('MONTH(created_at) as month'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->sum('total');
        $yearly_rev = DB::table('orders')
        ->select(DB::raw('Year(created_at) as year'))
        ->groupBy(DB::raw('Year(created_at)'))
        ->sum('total');
        $weekly_user=User::whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $monthly_user = DB::table('users')
        ->select(DB::raw('MONTH(created_at) as month'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->count();
        $yearly_user = DB::table('users')
        ->select(DB::raw('Year(created_at) as year'))
        ->groupBy(DB::raw('Year(created_at)'))
        ->count();
        $weekly_orders=Order::whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $monthly_orders = DB::table('orders')
        ->select(DB::raw('MONTH(created_at) as month'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->count();
        $yearly_orders = DB::table('orders')
        ->select(DB::raw('Year(created_at) as year'))
        ->groupBy(DB::raw('Year(created_at)'))
        ->count();
        $weekly_reviews=Review::whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $monthly_reviews = DB::table('reviews')
        ->select(DB::raw('MONTH(created_at) as month'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->count();
        $yearly_reviews = DB::table('reviews')
        ->select(DB::raw('Year(created_at) as year'))
        ->groupBy(DB::raw('Year(created_at)'))
        ->count();
        return view('livewire.admin.admin-dashboard-component',['ords'=>$ords,'users'=>$users,
        'products'=>$products,'orders'=>$orders,'sale'=>$sale,'today_revenue'=>$today_revenue,
        'month_sales'=>$month_sales,'weekly_sale'=>$weekly_sale,'monthly_rev'=>$monthly_rev,
        'weekly_user'=>$weekly_user,'monthly_user'=>$monthly_user,
        'weekly_orders'=>$weekly_orders,'monthly_orders'=>$monthly_orders,
        'weekly_reviews'=>$weekly_reviews,'monthly_reviews'=>$monthly_reviews,
        'yearly_reviews'=>$yearly_reviews,'yearly_orders'=>$yearly_orders,
        'yearly_user'=>$yearly_user,'yearly_rev'=>$yearly_rev])->layout('layouts.admin');
    }
}

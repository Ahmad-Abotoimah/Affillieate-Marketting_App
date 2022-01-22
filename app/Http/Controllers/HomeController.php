<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /* return home view */

    public function index()
    {
        return view('home');
    }

    /* return referrals list view with referrals data */
    public function showList()
    {
        $refferrels = auth()->user()->referrals;
        return view('referrers-list',['refferrels'=>$refferrels->reverse()]);
    }
    public function showReff()
    {
        /*
         *getting number of referrals each day in the last 14 days
         */
        $referrersArr = [];
        for($i=0;$i<15;$i++){
            $referrers = User::where('referrer_id',auth()->user()->id)
                ->whereDate('created_at',today()->subDays($i))
                ->get();
            $referrersArr[] = count($referrers);
        }
        /* chart generation using chart js */
        $chartjs = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['today',
                'yesterday',
                '2-DaysBefore',
                '3-DaysBefore',
                '4-DaysBefore',
                '5-DaysBefore',
                '6-DaysBefore',
                '7-DaysBefore',
                '8-DaysBefore',
                '9-DaysBefore',
                '10-DaysBefore',
                '11-DaysBefore',
                '12-DaysBefore',
                '13-DaysBefore',
                '14-DaysBefore',
                ])
            ->datasets([
                [
                    "label" => "Registered Users Last 14 Days",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $referrersArr,
                ]
            ])

            ->options([]);

        return view('referrers',['chartjs'=>$chartjs]);
    }
}

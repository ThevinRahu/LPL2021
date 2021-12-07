<?php

declare(strict_types = 1);

namespace App\Charts;
use App\Models\PlayerStats;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public ?string $name = '/index';

    /**
     * Determines the name suffix of the chart route.
     * This will also be used to get the chart URL
     * from the blade directrive. If null, the chart
     * name will be used.
     */
   

    /**
     * Determines the prefix that will be used by the chart
     * endpoint.
     */
   
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {   
        
        $match1=PlayerStats::where('bat','=', 1)->count();
        $match2=PlayerStats::where('bowl','=', 1)->count();
        return Chartisan::build()
            ->labels(['50+ Runs', '3+ Wickets'])
            ->dataset('Sample', [$match1,$match2]);
    }
}
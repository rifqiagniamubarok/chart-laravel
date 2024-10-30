<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $taskSummaryA = DB::table('Site as s')
            ->join('Task as t', 's.siteId', '=', 't.siteId')
            ->select('s.area as Area', 't.vendor as Vendor', DB::raw('COUNT(t.id) as Jumlah_Task'))
            ->groupBy('s.area', 't.vendor')
            ->orderBy('s.area', 'asc')
            ->orderBy('t.vendor', 'asc')
            ->get();

        $taskSummaryB = DB::table('Site as s')
            ->join('Task as t', 's.siteId', '=', 't.siteId')
            ->select(
                's.area as Area',
                DB::raw('SUM(CASE WHEN t.vendor = "AI" THEN 1 ELSE 0 END) AS AI'),
                DB::raw('SUM(CASE WHEN t.vendor = "BA" THEN 1 ELSE 0 END) AS BA'),
                DB::raw('SUM(CASE WHEN t.vendor = "BO" THEN 1 ELSE 0 END) AS BO'),
                DB::raw('SUM(CASE WHEN t.vendor = "NE" THEN 1 ELSE 0 END) AS NE'),
                DB::raw('SUM(CASE WHEN t.vendor = "O2" THEN 1 ELSE 0 END) AS O2')
            )
            ->groupBy('s.area')
            ->orderBy('s.area')
            ->get();

        $taskSummaryC = DB::table('Site as s')
            ->leftJoin('Task as t', 's.siteId', '=', 't.siteId')
            ->select('s.area as Area', DB::raw('COUNT(t.id) AS `All Task`'))
            ->groupBy('s.area')
            ->orderBy('s.area')
            ->get();

        return view('main', compact('taskSummaryA', 'taskSummaryB', 'taskSummaryC'));
    }
}

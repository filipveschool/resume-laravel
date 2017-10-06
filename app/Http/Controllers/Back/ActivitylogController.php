<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Spatie\Activitylog\Models\Activity;

class ActivitylogController extends Controller
{
    public function index()
    {
        $logItems = $this->getPaginatedActivityLogItems();

        return view('back.activitylog.index')->with(compact('logItems'));
    }

    protected function getPaginatedActivityLogItems()
    {
        return Activity::with('causer')
                       ->orderBy('created_at', 'DESC')
                       ->paginate(50);
    }
}

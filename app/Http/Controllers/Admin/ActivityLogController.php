<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;

class ActivityLogController extends Controller
{
    public function index()
    {
        $activities = ActivityLog::with('user')
            ->latest()
            ->paginate(20);

        return view('admin.activities.index', compact('activities'));
    }

    public function notifications()
    {
        $activities = ActivityLog::with('user')
            ->whereIn('activity', [
                'login',
                'material_finish',
                'quiz_finish'
            ])
            ->latest()
            ->take(10)
            ->get();

        return response()->json(
            $activities->map(function ($activity) {
                return [
                    'id' => $activity->id,
                    'student' => $activity->user->name ?? 'Siswa',
                    'activity' => $activity->activity,
                    'description' => $activity->description,
                    'time' => $activity->created_at->diffForHumans(),
                ];
            })
        );
    }
}
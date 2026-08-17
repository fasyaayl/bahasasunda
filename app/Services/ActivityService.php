<?php

namespace App\Services;

use App\Models\ActivityLog;

class ActivityService
{
    /**
     * Simpan aktivitas siswa
     */
    public static function log($userId, $activity, $description = null, $ip = null)
    {
        ActivityLog::create([
            'user_id'     => $userId,
            'activity'    => $activity,
            'description' => $description,
            'ip_address'  => $ip,
        ]);
    }
}
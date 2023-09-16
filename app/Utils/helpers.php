<?php

use Carbon\Carbon;

if (!function_exists('prevData')) {
    function prevData()
    {
        $page = (int)request()->query('page') ?? 0;

        $data = (int)request()->query('next') ?? 0;

        if ($page <= 1) {
            $data = 0;
        } else {
            $data = $data - 1;
        }

        $queryParams = request()->query();

        $allQuery = array_merge($queryParams, ['next' => $data]);

        return route('dashboard', $allQuery);
    }
}

if (!function_exists('nextData')) {
    function nextData()
    {
        $data = (int)request()->query('next') ?? 0;

        $queryParams = request()->query();

        $allQuery = array_merge($queryParams, ['next' => $data + 1]);

        return route('dashboard', $allQuery);
    }
}

if (!function_exists('convertBirthday')) {
    function convertBirthday($date)
    {
        $carbonDate = Carbon::parse($date);

        $years = $carbonDate->diffInYears();
        $months = $carbonDate->diffInMonths() % 12;
        $days = $carbonDate->diffInDays() % 30;

        return "$years Year $months Month $days Day";
    }
}

if (!function_exists('addNextData')) {
    function addNextData($data)
    {
        // $next =  (int)request()->query('next') ?? 0;
        $next =   0;

        return $next + $data;
    }
}

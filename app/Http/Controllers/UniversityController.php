<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Course;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /** SPBU Detail Page */
    public function spbu()
    {
        $university = University::where('slug', 'spbu')->firstOrFail();
        $courses    = $university->courses()->orderBy('start_date')->get();
        return view('pages.spbu', compact('university', 'courses'));
    }

    /** GNC Detail Page */
    public function gnc()
    {
        $university = University::where('slug', 'gnc')->firstOrFail();
        $courses    = $university->courses()->orderBy('start_date')->get();
        return view('pages.gnc', compact('university', 'courses'));
    }

    /** Course Catalog (unistry) with GET-param filters + server-side pagination */
    public function catalog(Request $request)
    {
        $perPage = 6;

        $query = Course::with('university');

        // Keyword search
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('desc',  'like', "%{$search}%");
            });
        }

        // University filter
        if ($univ = $request->input('univ')) {
            $query->whereHas('university', fn($q) => $q->where('slug', $univ));
        }

        // Language filter
        if ($lang = $request->input('lang')) {
            $query->where('language', $lang);
        }

        // Certification type filter
        if ($type = $request->input('type')) {
            $query->where('type', $type);
        }

        // Country filter
        if ($country = $request->input('country')) {
            $countryCode = $country === 'India' ? 'IN' : ($country === 'Russia' ? 'RU' : null);
            if ($countryCode) {
                $query->whereHas('university', fn($q) => $q->where('country', $countryCode));
            }
        }

        // City filter
        if ($city = $request->input('city')) {
            $cityMap = [
                'New Delhi'       => ['new delhi'],
                'Chandigarh'      => ['chandigarh', 'rajpura', 'punjab'],
                'Mumbai'          => ['mumbai'],
                'Moscow'          => ['moscow'],
                'Saint Petersburg'=> ['st. petersburg', 'saint petersburg'],
                'Kazan'           => ['kazan'],
            ];
            if (isset($cityMap[$city])) {
                $keywords = $cityMap[$city];
                $query->whereHas('university', function ($q) use ($keywords) {
                    $q->where(function ($sub) use ($keywords) {
                        foreach ($keywords as $kw) {
                            $sub->orWhere('location', 'like', "%{$kw}%");
                        }
                    });
                });
            }
        }

        // Sort
        $sort = $request->input('sort', 'default');
        if ($sort === 'title-asc')  $query->orderBy('title', 'asc');
        elseif ($sort === 'title-desc') $query->orderBy('title', 'desc');
        elseif ($sort === 'start-asc')  $query->orderBy('start_date', 'asc');

        $courses      = $query->paginate($perPage)->withQueryString();
        $universities = University::all();
        $filters      = $request->only(['search', 'univ', 'lang', 'type', 'sort', 'country', 'city']);

        return view('pages.unistry', compact('courses', 'universities', 'filters'));
    }
}

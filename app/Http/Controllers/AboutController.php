<?php

namespace App\Http\Controllers;

use App\Mail\CareersEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Pagination\LengthAwarePaginator;

class AboutController extends Controller
{
    public function index()
    {
        $trustedPartnerItems = [
            'partner1.webp',
            'partner2.webp',
            'partner3.webp',
            'partner4.webp',
            'partner5.webp',
            'partner6.webp',
            'partner7.webp',
            'partner8.webp',
        ];
        return view("pages.about.index", [
            "trustedPartnerItems"=> $trustedPartnerItems,
        ]);
    }

    public function workplaceSafety()
    {
        return view('pages.about.workplaceSafety');
    }

    public function environmental()
    {
        $environmentalItems = [
            [
                'title' => 'Avvanz Charity Movement to Tahanan ng Pagmamahal',
                'image' => 'environment1.webp',
                'created_at' => 'May 2, 2023',
                'link'=> 'https://www.avvanz.com/avvanz-charity-movement-to-tahanan-ng-pagmamahal/',
            ], 
        ];

        usort($environmentalItems, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });

        $collection = collect($environmentalItems);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $environmentalItemsPaginated = new LengthAwarePaginator($currentItems, $collection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view("pages.about.environmental", [
            "environmentalItems" => $environmentalItemsPaginated,
        ]);
    }

    public function careers()
    {
        return view('pages.about.careers');
    }

    public function send(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string',
            'country' => 'required|string',
            'experience' => 'required|integer',
            'position' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx',
        ]);
        
        $experienceValue = (int) $request->experience;

        $experience = match ($experienceValue) {
            0 => 'Fresher',
            1 => '1+ Year',
            2 => '2+ Years',
            3 => '3+ Years',
            4 => '4+ Years',
            default => '5 and Above',
        };

        $position = match ($request->position) {
            'BS' => 'Business Consultant',
            'SEC' => 'Software Engineer Consultant',
            'ME' => 'Marketing Executive',
            'JSE' => 'Junior Software Engineer',
            'VA' => 'Verification Associate',
            'LGS' => 'Lead Generation Specialist',
            'TLC' => 'Team Leader For Client Success',
            'CO' => 'Compliance Officer',
            'CSE' => 'Client Services Executive',
            default => 'Unknown Position',
        };
        
        if ($request->hasFile('cv')) {
            $originalName = pathinfo($request->file('cv')->getClientOriginalName(), PATHINFO_FILENAME);
            $newName = str_replace(' ', '_', $originalName) . '.' . $request->file('cv')->getClientOriginalExtension();
            $filePath = $request->file('cv')->storeAs('uploads/cvs', $newName);
        }

        $data = array_merge($request->all(), [
            'experience' => $experience,
            'position' => $position,
        ]);
    
        Mail::to($request->email)
            ->cc(env('ADMIN_EMAIL'))
            ->send(new CareersEmail($data, $filePath));

        return response()->json(['success' => 'Inquiry sent successfully!']);
    }
}

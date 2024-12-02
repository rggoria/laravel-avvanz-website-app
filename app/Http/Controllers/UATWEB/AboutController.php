<?php

namespace App\Http\Controllers\UATWEB;

use App\Http\Controllers\Controller;
use App\Mail\CareersEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

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
        $awardItems = [
            [
                'title' => 'Executive of the Year - HR Technology',
                'image' => 'award1.webp',
                'description' => 'Avvanz’s Managing Director, Kannan Chettiar, has been awarded EXECUTIVE OF THE YEAR – HR TECHNOLOGY by the very prestigious Singapore Business Review.',
                'link' => 'https://www.avvanz.com/avvanz-managing-director-is-executive-of-the-year-hr-technology/',
            ], [
                'title' => 'Best Training Provider (Sales)',
                'image' => 'award2.webp',
                'description' => 'HumanResources Magazine, a leading magazine for HR Community in Asia, awarded Avvanz GOLD MEDAL for BEST BACKGROUND SCREENING PROVIDER & Finalist for BEST TRAINING PROVIDER (SALES) for 2018.',
                'link' => 'https://www.avvanz.com/avvanz-wins-gold-medal-for-best-background-screening-provider/',
            ], [
                'title' => 'Best Background Screening Provider',
                'image' => 'award3.webp',
                'description' => 'HumanResources Magazine, a leading magazine for HR Community in Asia, has nominated Avvanz as the BEST BACKGROUND SCREENING PROVIDER.',
                'link' => 'https://www.avvanz.com/avvanz-best-background-screening-provider/',
            ],
        ];
        return view("UATWEB.pages.about.index", [
            "trustedPartnerItems"=> $trustedPartnerItems,
            "awardItems"=> $awardItems,
        ]);
    }

    public function aboutUsItem($title){
        if ($title === 'executive-of-the-year-hr-technology') {
            return view('UATWEB.partials.award_1');
        } elseif ($title === 'best-training-provider-sales') {
            return view('UATWEB.partials.award_2');
        } elseif ($title === 'best-background-screening-provider') {
            return view('UATWEB.partials.award_3');
        } else {
            return back();
        }
    }

    public function workplaceSafety()
    {
        return view('UATWEB.pages.about.workplaceSafety');
    }

    public function environmental()
    {
        $environmentalItems = [
            [
                'title' => 'Avvanz Charity Movement to Tahanan ng Pagmamahal',
                'image' => 'environment1.webp',
                'created_at' => 'May 2, 2023',
                'link'=> 'https://www.avvanz.com/avvanz-charity-movement-to-tahanan-ng-pagmamahal/',
                'description'=> '[
                    "Hi",
                    "Hello",
                ]',
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

        return view("UATWEB.pages.about.environmental", [
            "environmentalItems" => $environmentalItemsPaginated,
        ]);
    }

    public function environmentalItem1($title)
    {
        $environmentalItems = [
            [
                'title' => 'Avvanz Charity Movement to Tahanan ng Pagmamahal',
                'image' => 'environment1.webp',
                'created_at' => 'May 2, 2023',
                'link'=> 'https://www.avvanz.com/avvanz-charity-movement-to-tahanan-ng-pagmamahal/',
                'description'=> [
                    "Avvanz is a Singapore-based company that has been known for its exceptional expertise in background screening, company due diligence, employee development, and corporate training. The company has always been focused on making a positive impact in society, not just through its services, but also through charitable initiatives that benefit underprivileged communities. One such initiative was their collaboration with Tahanan ng Pagmamahal, a non-profit organization that provides care and shelter for abandoned, abused, and neglected children in the Philippines.",
                    "Tahanan ng Pagmamahal has been operating since 1991 and has been providing a home for children who have been left alone on the streets, or those who have experienced violence and abuse in their families. The organization is run by volunteers and relies on donations and support from various groups and individuals to sustain its operations. With children under its care, Tahanan ng Pagmamahal is in constant need of assistance to provide for their daily needs, including food, clothing, shelter, and education.",
                    "Avvanz was one of the companies that saw the value of supporting Tahanan ng Pagmamahal and its mission to help children in need. On April 19, 2023, the company chose Tahanan ng Pagmamahal as its beneficiary. The program aimed to provide in-kind donations like infant milk, diapers, clothes, bottles, hygiene products, school supplies, snacks, safety kits and other resources that would help improve the quality of life for the children in the shelter.",
                    "Aside from the donations, Avvanz also organized various activities that the children enjoyed, such as games, storytelling, and arts and crafts. The employees also prepared food and refreshments for the children, which they shared with them during the event. It was a heartwarming experience for everyone involved, and the smiles on the children’s faces were priceless.",
                    "The charity event was just the beginning of Avvanz’s commitment to supporting non-profit organizations like Tahanan ng Pagmamahal. In the following months and years, the company will continue to make a positive impact on society through this kind of activity.",
                    "In conclusion, Avvanz’s collaboration with Tahanan ng Pagmamahal was an excellent example of how corporate social responsibility can make a meaningful difference in people’s lives. The company’s commitment to supporting the organization and its mission to provide care and shelter for abandoned, abused, and neglected children was commendable. Avvanz’s CSR program was not only a testament to its values as a company but also a reminder of the importance of giving back to society.",
                ],
            ],
        ];

        $item = collect($environmentalItems)->firstWhere(function ($item) use ($title) {
            return Str::slug($item['title']) === $title;
        });

        return view('UATWEB.partials.environment_template_1', [
            'title' => $item['title'],
            'item' => $item,
            'description' => $item['description'],
        ]);
    }

    public function careers()
    {
        return view('UATWEB.pages.about.careers');
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

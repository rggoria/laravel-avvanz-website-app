<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class ResourcesController extends Controller
{
    public function blog(Request $request)
    {
        $blogItems = [
            [
                'title' => 'Choosing the Best Corporate Training Companies',
                'image' => 'blog1.webp',
                'created_at' => 'September 4, 2024',
                'link' => 'https://www.avvanz.com/choosing-the-best-corporate-training-companies/',
            ], [
                'title' => 'Unlocking Opportunities: How Enhanced DBS Checks Open Doors for Job Seekers',
                'image' => 'blog2.webp',
                'created_at' => 'May 14, 2024',
                'link' => 'https://www.avvanz.com/unlocking-opportunities-how-enhanced-dbs-checks-open-doors-for-job-seekers/',
            ], [
                'title' => 'Demystifying the DBS Check Application: Your Path to Employment',
                'image' => 'blog3.webp',
                'created_at' => 'May 10, 2024',
                'link' => 'https://www.avvanz.com/demystifying-the-dbs-check-application-your-path-to-employment/',
            ], [
                'title' => 'The Essential Background Check: Unveiling the Basics of DBS Checks',
                'image' => 'blog4.webp',
                'created_at' => 'May 7, 2024',
                'link' => 'https://www.avvanz.com/the-essential-background-check-unveiling-the-basics-of-dbs-checks/',
            ], [
                'title' => 'The Key to Confidence: Following a Proven Financial Due Diligence Checklist',
                'image' => 'blog5.webp',
                'created_at' => 'May 2, 2024',
                'link' => 'https://www.avvanz.com/the-key-to-confidence-following-a-proven-financial-due-diligence-checklist/',
            ], [
                'title' => 'Navigating Success: Your Guide to Corporate Training Programs in Singapore',
                'image' => 'blog6.webp',
                'created_at' => 'April 30, 2024',
                'link' => 'https://www.avvanz.com/navigating-success-your-guide-to-corporate-training-programs-in-singapore/',
            ],
        ];

        $perPage = 3;
        $currentPage = $request->get('page', 1);
        $offset = ($currentPage - 1) * $perPage;

        $currentItems = array_slice($blogItems, $offset, $perPage);

        $blogItemsPaginated = new LengthAwarePaginator(
            $currentItems,
            count($blogItems),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );

        if ($request->ajax()) {
            return view('partials.blog_items', [
                'blogItems' => $blogItemsPaginated,
            ]);
        }

        return view("pages.resources.blog", [
            "blogItems" => $blogItemsPaginated,
        ]);
    }

    public function newsletter()
    {
        $newsletterItems = [
            [
                'title' => 'Q3 Newsletter',
                'description' => 'Welcome to our Q3 edition of Avvanz’s newsletter! We are thrilled to share with you the latest developments and insights in background screening, human resource solutions and workforce optimization.',
                'image' => 'newsletter1.webp',
                'created_at' => 'September 17, 2024',
                'link' => 'https://www.avvanz.com/q3-newsletter/',
            ],
        ];
        return view("pages.resources.newsletter", [
            "newsletterItems" => $newsletterItems,
        ]);
    }

    public function industry()
    {
        $industryItems = [
            [
                'title' => 'Background Verification Service in Asia',
                'description' => 'Background Verification Service in Asia Background verification services play a crucial role in the hiring process across industries in Asia. Employers are increasingly recognizing the importance of thorough background checks to',
                'image' => 'industry1.webp',
                'created_at' => 'January 18, 2024',
                'link' => 'https://www.avvanz.com/industry-report/',
            ],
        ];
        return view("pages.resources.industry", [
            "industryItems" => $industryItems,
        ]);
    }

    public function webinar()
    {
        $webinarItems = [
            [
                'title' => 'Singtel Learning Fiesta',
                'image' => 'webinar1.webp',
                'created_at' => 'June 10, 2014',
                'link'=> 'https://www.avvanz.com/singtel-learning-fiesta/',
            ], [
                'title' => 'Singapore Human Resources Institute',
                'image' => 'webinar2.webp',
                'created_at' => 'February 27, 2015 ',
                'link'=> 'https://www.avvanz.com/singapore-human-resources-institute/',
            ], [
                'title' => 'Crown International: Effective Talent Recruitment And Retention Strategies',
                'image' => 'webinar3.webp',
                'created_at' => 'October 6, 2015 ',
                'link'=> 'https://www.avvanz.com/crown-international-effective-talent-recruitment-and-retention-strategies/',
            ], [
                'title' => 'Singapore HR Congress: Sieving Out RIGHT And SAFE Multi-Generational Talents',
                'image' => 'webinar4.webp',
                'created_at' => 'November 8, 2016',
                'link'=> 'https://www.avvanz.com/singapore-hr-congress-sieving-out-right-and-safe-multi-generational-talents/',
            ], [
                'title' => 'Webinar: Safeguarding And Child Protection Part 1',
                'image' => 'webinar5.webp',
                'created_at' => 'February 19, 2020',
                'link'=> 'https://www.avvanz.com/webinar-safeguarding-and-child-protection-part-1/',
            ], [
                'title' => 'Recruitment Masterclass: Employer Branding, Candidate Engagement And Background Screening During COVID-19',
                'image' => 'webinar6.webp',
                'created_at' => 'May 6, 2020',
                'link'=> 'https://www.avvanz.com/recruitment-masterclass-employer-branding-candidate-engagement-and-background-screening-during-covid-19/',
            ], [
                'title' => 'Webinar: Know Who You Hire',
                'image' => 'webinar7.webp',
                'created_at' => 'May 11, 2020',
                'link'=> 'https://www.avvanz.com/webinar-know-who-you-hire/',
            ], [
                'title' => 'Webinar: Safeguarding And Child Protection Part 2',
                'image' => 'webinar8.webp',
                'created_at' => 'May 13, 2020',
                'link'=> 'https://www.avvanz.com/webinar-safeguarding-and-child-protection-part-2/',
            ], [
                'title' => 'Webinar: Safeguarding And Child Protection Part 3',
                'image' => 'webinar9.webp',
                'created_at' => 'July 17, 2020',
                'link'=> 'https://www.avvanz.com/webinar-safeguarding-and-child-protection-part-3/',
            ], [
                'title' => 'Special APAC COVID-19 Webinar Panel Discussion',
                'image' => 'webinar10.webp',
                'created_at' => 'July 25, 2020',
                'link'=> 'https://www.avvanz.com/special-apac-covid-19-webinar-panel-discussion/'
            ], [
                'title' => 'Webinar: Safeguarding And Child Protection Part 4',
                'image' => 'webinar11.webp',
                'created_at' => 'August 11, 2020',
                'link'=> 'https://www.avvanz.com/webinar-safeguarding-and-child-protection-part-4/'
            ], [
                'title' => 'IHRP Tech Talk Series-Leveraging HR Tech To Create Best In Class Candidate Experience',
                'image' => 'webinar12.webp',
                'created_at' => 'August 28, 2020',
                'link'=> 'https://www.avvanz.com/ihrp-tech-talk-series-leveraging-hr-tech-to-create-best-in-class-candidate-experience/'
            ], [
                'title' => 'Caribbean Webinar: How And Why To Hire The Best Background Check Company',
                'image' => 'webinar13.webp',
                'created_at' => 'October 28, 2020',
                'link'=> 'https://www.avvanz.com/caribbean-webinar-how-and-why-to-hire-the-best-background-check-company/'
            ], [
                'title' => 'Joint Webinar: The 4th Industrial Revolution – How To Adapt Your Business To The Inevitable Digital Transformation',
                'image' => 'webinar14.webp',
                'created_at' => 'November 11, 2020',
                'link'=> 'https://www.avvanz.com/joint-webinar-the-4th-industrial-revolution-how-to-adapt-your-business-to-the-inevitable-digital-transformation/'
            ], [
                'title' => 'Panel Discussion: Talent Acquisition And Engagement Challenges Amidst The Pandemic',
                'image' => 'webinar15.webp',
                'created_at' => 'November 26, 2020',
                'link'=> 'https://www.avvanz.com/panel-discussion-talent-acquisition-and-engagement-challenges-amidst-the-pandemic/'
            ], [
                'title' => 'Avvanz At Singapore FinTech Festival 2020 (7-11 Dec)',
                'image' => 'webinar16.webp',
                'created_at' => 'December 7, 2020',
                'link'=> 'https://www.avvanz.com/avvanz-at-singapore-fintech-festival-2020-7-11-dec/'
            ], [
                'title' => 'Digital Transformation For The Maritime Industry – Demystifying The Process',
                'image' => 'webinar17.webp',
                'created_at' => 'January 21, 2021',
                'link'=> 'https://www.avvanz.com/digital-transformation-for-the-maritime-industry-demystifying-the-process/'
            ], [
                'title' => 'Quickiebinar Part 1: How Avvanz Weathered Covid-19',
                'image' => 'webinar18.webp',
                'created_at' => 'January 29, 2021',
                'link'=> 'https://www.avvanz.com/quickiebinar-part-1-how-avvanz-weathered-covid-19/'
            ], [
                'title' => 'Avvanz Techstival 7 April',
                'image' => 'webinar19.webp',
                'created_at' => 'April 7, 2021',
                'link'=> 'https://www.avvanz.com/avvanz-techstival-7-april/'
            ], [
                'title' => 'Managing Your Employee Lifecycle From Background Screening To Onboarding To Learning',
                'image' => 'webinar20.webp',
                'created_at' => 'June 1, 2021',
                'link'=> 'https://www.avvanz.com/managing-your-employee-lifecycle-from-background-screening-to-onboarding-to-learning/'
            ], [
                'title' => 'Education Industry: Overcoming Leadership And HR Challenges',
                'image' => 'webinar21.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/education-industry-overcoming-leadership-and-hr-challenges/'
            ], [
                'title' => 'Achieving 60% Hiring ROI Through AI And Background Screening',
                'image' => 'webinar22.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'title' => 'Leadership in Education: In what areas schools can leverage disruptive technologies?',
                'image' => 'webinar23.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'title' => 'Avvanz Webcafe: Monetary Authority of Singapore (MAS) Mandatory Reference Checks',
                'image' => 'webinar24.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'title' => 'AVVANZ WEBCAFE: The Great Resignation vs. The Great Retention',
                'image' => 'webinar25.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'title' => 'Avvanz Techstival 2023 Philippine Edition',
                'image' => 'webinar26.webp',
                'created_at' => 'May 2, 2023',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'title' => 'Quickiebinar Part 1: Leadership – with Zubin Zack',
                'image' => 'webinar27.webp',
                'created_at' => 'June 2, 2023',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'title' => 'Quickiebinar Part 2: Leadership – with Ariya Chittasy',
                'image' => 'webinar28.webp',
                'created_at' => 'June 6, 2023',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ],
        ];
        $webinarVideosItems = [
            [
                'title' => 'Achieving 60% Hiring ROI Through AI And Background Screening - Avvanz',
                'code' => 'ZHSO3zmg--4',
                'duration' => '59:58',
            ],[
                'title' => 'Quickiebinar Part 1: How Avvanz Weathered Covid-19',
                'code' => 'D3TZyD3K4XA',
                'duration' => '5:45',
            ],[
                'title' => 'Digital Transformation For The Maritime Industry – Demystifying The Process - Avvanz',
                'code' => 'mXFEU_D4vf0',
                'duration' => '57:13',
            ],[
                'title' => 'Panel Discussion: Talent Acquisition And Engagement Challenges Amidst The Pandemic - Avvanz',
                'code' => 'mnvRWKK4IoQ',
                'duration' => '1:04:54',
            ],[
                'title' => 'IHRP Tech Talk Series-Leveraging HR Tech To Create Best In Class Candidate Experience - Avvanz',
                'code' => 'TkvNaY6oLI4',
                'duration' => '1:25:58',
            ],[
                'title' => 'Webinar: Safeguarding And Child Protection Part 1',
                'code' => 'mgAi8BGoeVs',
                'duration' => '15:38',
            ],[
                'title' => 'Webinar: Know Who You Hire - Avvanz',
                'code' => 'kkh5h7ATWw0',
                'duration' => '13:38',
            ],[
                'title' => 'Webinar: Safeguarding And Child Protection Part 2 - Avvanz',
                'code' => 'B6i7BiIYsj0',
                'duration' => '20:49',
            ],[
                'title' => 'Webinar: Safeguarding And Child Protection Part 3 - Avvanz',
                'code' => 'WXF5b8RZ7oI',
                'duration' => '1:02:13',
            ],[
                'title' => 'Quickiebinar Episode 1: Leadership - with Zubin Zack',
                'code' => 'RU09DnNEWlw',
                'duration' => '14:57',
            ],[
                'title' => 'Quickiebinar Episode 2: Leadership - with Ariya Chittasy',
                'code' => 'B3ejjezuYfg',
                'duration' => '10:12',
            ],[
                'title' => 'Webinar Series: MOM Requirement',
                'code' => 'kDHof_DqDXo',
                'duration' => '22:24',
            ],[
                'title' => 'Avvanz HR Leader Series 2023: The 5 Stages of Creating a Strong Risk Culture with Francesca Dickson',
                'code' => 'JeTyvirtjK4',
                'duration' => '50:16',
            ],[
                'title' => 'Avvanz Webinar 2023: Fast and Effective Due Diligence on any Individual or Company',
                'code' => '89IEb3oL-N4',
                'duration' => '29:36',
            ],[
                'title' => 'Avvanz HR Leader Series 2023: Security of Critical Infrastructure',
                'code' => '7lTwSfQEkQE',
                'duration' => '50:54',
            ],
        ];
        $eventVideosItems = [
            [
                'title' => 'AVVANZ TECHSTIVAL 2023 (PH Edition)',
                'code' => 'NG_TPQDh6dE',
                'duration' => '1:40',
            ],[
                'title' => 'Avvanz Charity Movement to Tahanan ng Pagmamahal',
                'code' => 'MTc4MDUz',
                'duration' => '1:40',
            ],[
                'title' => 'Avvanz\'s 7th Anniversary Dinner Party',
                'code' => 'C43kglKA84Q',
                'duration' => '1:43',
            ],[
                'title' => 'Mother\'s Day Tribute  - Avvanz',
                'code' => 'WgfAXj2MC3Q',
                'duration' => '0:54',
            ],
        ];
        $companyVideosItems = [
            [
                'title' => 'MOM Video Guide',
                'code' => 'NoQk6ka-tCI',
                'duration' => '6:05',
            ],[
                'title' => 'AFP Check Demo Guide',
                'code' => '5eJqLw6jRsk',
                'duration' => '2:34',
            ],[
                'title' => 'Avvanz & IDPartner - Partnership Discussion',
                'code' => 'OdZLuKhu3tg',
                'duration' => '8:55',
            ],[
                'title' => 'Avvanz & OneID - Partnership Discussion',
                'code' => 'Gvy9kq3MJ-k',
                'duration' => '4:43',
            ],[
                'title' => 'How to Log-in and Use Avvanz CDDGlobal',
                'code' => '3IsG7ctuZ1A',
                'duration' => '2:10',
            ],
        ];

        usort($webinarItems, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });

        $collection = collect($webinarItems);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $webinarItemsPaginated = new LengthAwarePaginator($currentItems, $collection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view("pages.resources.webinar", [
            "webinarItems" => $webinarItemsPaginated,
            "webinarVideosItems" => $webinarVideosItems,
            "eventVideosItems" => $eventVideosItems,
            "companyVideosItems" => $companyVideosItems,
        ]);
    }

    public function press()
    {
        $pressItems = [
            [
                'title' => 'Avvanz Tackles Employee Screening Challenges: Affordable, Compliant, and Comprehensive Background Checks Now Available In India',
                'image' => 'press1.webp',
                'created_at' => 'June 21, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-tackles-employee-screening-challenges-affordable-compliant-and-comprehensive-background-checks-now-available-in-india/',
            ], [
                'title' => 'Avvanz Pte ltd Expands its Global Reach with New Office Opening in Bengaluru, India',
                'image' => 'press2.webp',
                'created_at' => 'May 13, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-expands-global-reach/',
            ], [
                'title' => 'More companies doing background checks for employment pass applicants',
                'image' => 'press3.webp',
                'created_at' => 'March 1, 2024',
                'link'=> 'https://www.avvanz.com/more-companies-doing-background-checks-for-employment-pass-applicants/',
            ],[
                'title' => 'Avvanz Announces Partnership With Dauntless Technology Solutions',
                'image' => 'press4.webp',
                'created_at' => 'February 29, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-announces-partnership-with-dauntless-technology-solutions/',
            ],[
                'title' => 'CNA Explains: How does Singapore screen adults who work with kids?',
                'image' => 'press5.webp',
                'created_at' => 'January 30, 2024',
                'link'=> 'https://www.avvanz.com/cna-explains-how-does-singapore-screen-adults-who-work-with-kids/',
            ],[
                'title' => 'Golf club managers to meet over money laundering concerns amid S$1 billion probe',
                'image' => 'press6.webp',
                'created_at' => 'September 4, 2023',
                'link'=> 'https://www.avvanz.com/golf-club-managers-to-meet-over-money-laundering-concerns-amid-s1-billion-probe/',
            ],
        ];
        return view("pages.resources.press", [
            "pressItems" => $pressItems,
        ]);
    }
}

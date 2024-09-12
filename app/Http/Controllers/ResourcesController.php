<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function blog()
    {
        $blogItems = [
            [
                'title' => 'Choosing the Best Corporate Training Companies',
                'image' => 'blog1.webp',
                'created_at' => 'September 4, 2024',
                'link' => 'https://www.avvanz.com/choosing-the-best-corporate-training-companies/',
            ],
            [
                'title' => 'Unlocking Opportunities: How Enhanced DBS Checks Open Doors for Job Seekers',
                'image' => 'blog2.jpg',
                'created_at' => 'May 14, 2024',
                'link' => 'https://www.avvanz.com/unlocking-opportunities-how-enhanced-dbs-checks-open-doors-for-job-seekers/',
            ],
            [
                'title' => 'Demystifying the DBS Check Application: Your Path to Employment',
                'image' => 'blog3.png',
                'created_at' => 'May 10, 2024',
                'link' => 'https://www.avvanz.com/demystifying-the-dbs-check-application-your-path-to-employment/',
            ],
            [
                'title' => 'The Essential Background Check: Unveiling the Basics of DBS Checks',
                'image' => 'blog4.png',
                'created_at' => 'May 7, 2024',
                'link' => 'https://www.avvanz.com/the-essential-background-check-unveiling-the-basics-of-dbs-checks/',
            ],
            [
                'title' => 'The Key to Confidence: Following a Proven Financial Due Diligence Checklist',
                'image' => 'blog5.jpg',
                'created_at' => 'May 2, 2024',
                'link' => 'https://www.avvanz.com/the-key-to-confidence-following-a-proven-financial-due-diligence-checklist/',
            ],
            [
                'title' => 'Navigating Success: Your Guide to Corporate Training Programs in Singapore',
                'image' => 'blog6.png',
                'created_at' => 'April 30, 2024',
                'link' => 'https://www.avvanz.com/navigating-success-your-guide-to-corporate-training-programs-in-singapore/',
            ],
        ];
        return view("pages.resources.blog", [
            "blogItems" => $blogItems,
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
                'title' => 'Quickiebinar Part 2: Leadership – with Ariya Chittasy',
                'image' => 'webinar1.png',
                'created_at' => 'June 6, 2023',
                'link'=> 'https://www.avvanz.com/quickiebinar-part-2-leadership-with-ariya-chittasy/',
            ],
            [
                'title' => 'Quickiebinar Part 1: Leadership – with Zubin Zack',
                'image' => 'webinar2.png',
                'created_at' => 'June 2, 2023',
                'link'=> 'https://www.avvanz.com/quickiebinar-part-1-leadership-with-zubin-zack/',
            ],
            [
                'title' => 'Avvanz Techstival 2023 Philippine Edition',
                'image' => 'webinar3.png',
                'created_at' => 'May 2, 2023',
                'link'=> 'https://www.avvanz.com/avvanz-techstival-2023-philippine-edition/',
            ],
            [
                'title' => 'AVVANZ WEBCAFE: The Great Resignation vs. The Great Retention',
                'image' => 'webinar4.png',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/avvanz-webcafe-the-great-resignation-vs-the-great-retention/',
            ],
            [
                'title' => 'Avvanz Webcafe: Monetary Authority of Singapore (MAS) Mandatory Reference Checks',
                'image' => 'webinar5.png',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/avvanz-webcafe-monetary-authority-of-singapore-mas-mandatory-reference-checks/',
            ],
            [
                'title' => 'Leadership in Education: In what areas schools can leverage disruptive technologies?',
                'image' => 'webinar6.png',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening-2/',
            ],
        ];
        return view("pages.resources.webinar", [
            "webinarItems" => $webinarItems,
        ]);
    }

    public function press()
    {
        $pressItems = [
            [
                'title' => 'Avvanz Tackles Employee Screening Challenges: Affordable, Compliant, and Comprehensive Background Checks Now Available In India',
                'image' => 'press1.jpg',
                'created_at' => 'June 21, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-tackles-employee-screening-challenges-affordable-compliant-and-comprehensive-background-checks-now-available-in-india/',
            ],
            [
                'title' => 'Avvanz Pte ltd Expands its Global Reach with New Office Opening in Bengaluru, India',
                'image' => 'press2.jpg',
                'created_at' => 'May 13, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-expands-global-reach/',
            ],
            [
                'title' => 'More companies doing background checks for employment pass applicants',
                'image' => 'press3.jpg',
                'created_at' => 'March 1, 2024',
                'link'=> 'https://www.avvanz.com/more-companies-doing-background-checks-for-employment-pass-applicants/',
            ],
            [
                'title' => 'Avvanz Announces Partnership With Dauntless Technology Solutions',
                'image' => 'press4.jpg',
                'created_at' => 'February 29, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-announces-partnership-with-dauntless-technology-solutions/',
            ],
            [
                'title' => 'CNA Explains: How does Singapore screen adults who work with kids?',
                'image' => 'press5.webp',
                'created_at' => 'January 30, 2024',
                'link'=> 'https://www.avvanz.com/cna-explains-how-does-singapore-screen-adults-who-work-with-kids/',
            ],
            [
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

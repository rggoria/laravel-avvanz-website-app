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
                'id'=> '2',
                'title' => 'Tips To Have An Effective Teacher Hiring Strategy',
                'image' => 'blog1.webp',
                'created_at' => 'June 21, 2021',
                'link' => 'https://www.avvanz.com/tips-to-have-an-effective-teacher-hiring-strategy/',
            ], [
                'id'=> '2',
                'title' => 'How To Prepare Your School For Opening And Reopening During The COVID Crisis',
                'image' => 'blog2.webp',
                'created_at' => 'June 23, 2021',
                'link' => 'https://www.avvanz.com/how-to-prepare-your-school-for-opening-and-reopening-during-the-covid-crisis/',
            ], [
                'id'=> '3',
                'title' => 'How Fintech Is Transforming The Underwriting Process',
                'image' => 'blog3.webp',
                'created_at' => 'June 24, 2021',
                'link' => 'https://www.avvanz.com/how-fintech-is-transforming-the-underwriting-process/',
            ], [
                'id'=> '4',
                'title' => 'The Hidden Risks Of Hiring Remotely',
                'image' => 'blog4.webp',
                'created_at' => 'June 30, 2021',
                'link' => 'https://www.avvanz.com/the-hidden-risks-of-hiring-remotely/',
            ], [
                'id'=> '5',
                'title' => 'Green Finance May Pave A New Way For The Sustainable Development Of The Banking Industry',
                'image' => 'blog5.webp',
                'created_at' => 'July 5, 2021',
                'link' => 'https://www.avvanz.com/green-finance-may-pave-a-new-way-for-the-sustainable-development-of-the-banking-industry/',
            ], [
                'id'=> '6',
                'title' => 'Digital Transformation Brings New Opportunities For Healthcare',
                'image' => 'blog6.webp',
                'created_at' => 'July 9, 2021',
                'link' => 'https://www.avvanz.com/digital-transformation-brings-new-opportunities-for-healthcare/',
            ], [
                'id'=> '7',
                'title' => 'AVVANZ is awarded as HR Technology Company of the Year 2021',
                'image' => 'blog7.webp',
                'created_at' => 'July 12, 2021',
                'link' => 'https://www.avvanz.com/avvanz-is-awarded-as-hr-technology-company-of-the-year-2021/',
            ], [
                'id'=> '8',
                'title' => 'Creating a Strong, Collaborative Multi-Generational Workforce: 4 Must-Do Steps',
                'image' => 'blog8.webp',
                'created_at' => 'August 30, 2021',
                'link' => 'https://www.avvanz.com/creating-a-strong-collaborative-multi-generational-workforce-4-must-do-steps/',
            ], [
                'id'=> '9',
                'title' => 'Diamond Rules of Entrepreneurship',
                'image' => 'blog9.webp',
                'created_at' => 'December 15, 2021',
                'link' => 'https://www.avvanz.com/diamond-rules-of-entrepreneurship/',
            ], [
                'id'=> '10',
                'title' => 'MYTH OR FACT? Digital Transformation Is Costly And Faces Many Uncertainties',
                'image' => 'blog10.webp',
                'created_at' => 'January 6, 2022',
                'link' => 'https://www.avvanz.com/back-myth-or-fact-digital-transformation-is-costly-and-faces-many-uncertainties/',
            ], [
                'id'=> '11',
                'title' => 'How To Spot Red Flags When Interviewing A Candidate',
                'image' => 'blog11.webp',
                'created_at' => 'January 6, 2022',
                'link' => 'https://www.avvanz.com/how-to-spot-red-flags-when-interviewing-a-candidate/',
            ], [
                'id'=> '12',
                'title' => 'Back Digital Transformation Brings New Opportunities For Healthcare',
                'image' => 'blog12.webp',
                'created_at' => 'January 6, 2022',
                'link' => 'https://www.avvanz.com/back-digital-transformation-brings-new-opportunities-for-healthcare/',
            ], [
                'id'=> '13',
                'title' => 'All you need to know about the British Standard for Security Screening',
                'image' => 'blog13.webp',
                'created_at' => 'March 10, 2023',
                'link' => 'https://www.avvanz.com/all-you-need-to-know-about-the-british-standard-for-security-screening/',
            ], [
                'id'=> '14',
                'title' => 'Introduction to US Screening requirements',
                'image' => 'blog14.webp',
                'created_at' => 'March 10, 2023',
                'link' => 'https://www.avvanz.com/introduction-to-us-screening-requirements/',
            ], [
                'id'=> '15',
                'title' => 'All you need to know about the NEW Workforce Screening Standard in Australia',
                'image' => 'blog15.webp',
                'created_at' => 'March 10, 2023',
                'link' => 'https://www.avvanz.com/all-you-need-to-know-about-the-new-workforce-screening-standard-in-australia/',
            ], [
                'id'=> '16',
                'title' => 'AFP Checks',
                'image' => 'blog16.webp',
                'created_at' => 'May 9, 2023',
                'link' => 'https://www.avvanz.com/afp-checks/',
            ], [
                'id'=> '17',
                'title' => 'APRA Checks',
                'image' => 'blog17.webp',
                'created_at' => 'May 9, 2023',
                'link' => 'https://www.avvanz.com/apra-checks/',
            ], [
                'id'=> '18',
                'title' => 'UK DBS Checks',
                'image' => 'blog18.webp',
                'created_at' => 'May 31, 2023',
                'link' => 'https://www.avvanz.com/uk-dbs-checks/',
            ], [
                'id'=> '19',
                'title' => '1st ever “Amazonified” Company Due Diligence (CDD) Platform',
                'image' => 'blog19.webp',
                'created_at' => 'May 31, 2023',
                'link' => 'https://www.avvanz.com/1st-ever-amazonified-company-due-diligence-cdd-platform/',
            ], [
                'id'=> '20',
                'title' => 'Navigating the Business World Management Training Courses in Singapore Unveiled',
                'image' => 'blog20.webp',
                'created_at' => 'April 25, 2024',
                'link' => 'https://www.avvanz.com/navigating-the-business-world-management-training-courses-in-singapore-unveiled/',
            ], [
                'id'=> '21',
                'title' => 'Delighting Customers: Elevate Your Service with Customer Service Training in Singapore',
                'image' => 'blog21.webp',
                'created_at' => 'April 26, 2024',
                'link' => 'https://www.avvanz.com/delighting-customers-elevate-your-service-with-customer-service-training-in-singapore/',
            ], [
                'id'=> '22',
                'title' => 'Safeguarding Your Future: Essential Steps in the Company Due Diligence Process',
                'image' => 'blog22.webp',
                'created_at' => 'April 29, 2024',
                'link' => 'https://www.avvanz.com/safeguarding-your-future-essential-steps-in-the-company-due-diligence-process/',
            ], [
                'id'=> '23',
                'title' => 'Navigating Success: Your Guide to Corporate Training Programs in Singapore',
                'image' => 'blog23.webp',
                'created_at' => 'April 30, 2024',
                'link' => 'https://www.avvanz.com/navigating-success-your-guide-to-corporate-training-programs-in-singapore/',
            ], [
                'id'=> '24',
                'title' => 'The Key to Confidence: Following a Proven Financial Due Diligence Checklist',
                'image' => 'blog24.webp',
                'created_at' => 'May 2, 2024',
                'link' => 'https://www.avvanz.com/the-key-to-confidence-following-a-proven-financial-due-diligence-checklist/',
            ], [
                'id'=> '25',
                'title' => 'The Essential Background Check: Unveiling the Basics of DBS Checks',
                'image' => 'blog25.webp',
                'created_at' => 'May 7, 2024',
                'link' => 'https://www.avvanz.com/the-essential-background-check-unveiling-the-basics-of-dbs-checks/',
            ], [
                'id'=> '26',
                'title' => 'Demystifying the DBS Check Application: Your Path to Employment',
                'image' => 'blog26.webp',
                'created_at' => 'May 10, 2024',
                'link' => 'https://www.avvanz.com/demystifying-the-dbs-check-application-your-path-to-employment/',
            ], [
                'id'=> '27',
                'title' => 'Unlocking Opportunities: How Enhanced DBS Checks Open Doors for Job Seekers',
                'image' => 'blog27.webp',
                'created_at' => 'May 14, 2024',
                'link' => 'https://www.avvanz.com/unlocking-opportunities-how-enhanced-dbs-checks-open-doors-for-job-seekers/',
            ], [
                'id'=> '28',
                'title' => 'Choosing the Best Corporate Training Companies',
                'image' => 'blog28.webp',
                'created_at' => 'September 4, 2024',
                'link' => 'https://www.avvanz.com/choosing-the-best-corporate-training-companies/',
            ], [
                'id'=> '29',
                'title' => 'Customized Corporate Training Programs for Employees',
                'image' => 'blog29.webp',
                'created_at' => 'September 9, 2024',
                'link' => 'https://www.avvanz.com/customized-corporate-training-programs-for-employees/',
            ], [
                'id'=> '30',
                'title' => 'The Importance of Corporate Training in Today’s Business Landscape',
                'image' => 'blog30.webp',
                'created_at' => 'September 12, 2024',
                'link' => 'https://avvanz.com/the-importance-of-corporate-training-in-todays-business-landscape/',
            ], [
                'id'=> '31',
                'title' => 'Enhancing Corporate Culture Through Effective Training Programs',
                'image' => 'blog31.webp',
                'created_at' => 'September 13, 2024',
                'link' => 'https://avvanz.com/enhancing-corporate-culture-through-effective-training-programs/',
            ], [
                'id'=> '32',
                'title' => 'Corporate Leadership Training: Developing Future Leaders',
                'image' => 'blog32.webp',
                'created_at' => 'September 14, 2024',
                'link' => 'https://avvanz.com/corporate-leadership-training-developing-future-leaders/',
            ], [
                'id'=> '33',
                'title' => 'From Application to Approval: Navigating the DBS Check Process',
                'image' => 'blog33.webp',
                'created_at' => 'September 16, 2024',
                'link' => 'https://avvanz.com/from-application-to-approval-navigating-the-dbs-check-process/',
            ], [
                'id'=> '34',
                'title' => 'Boost Business Performance: Communication Skills Training in Singapore',
                'image' => 'blog34.webp',
                'created_at' => 'September 17, 2024',
                'link' => 'https://avvanz.com/boost-business-performance-communication-skills-training-in-singapore/',
            ], [
                'id'=> '35',
                'title' => 'The Role of Technology in Modern Corporate Training Programs',
                'image' => 'blog35.webp',
                'created_at' => 'September 18, 2024',
                'link' => 'https://www.avvanz.com/the-role-of-technology-in-modern-corporate-training-programs',
            ], [
                'id'=> '36',
                'title' => 'Unlocking Opportunities: Streamline Your Application with a DBS Check Online',
                'image' => 'blog36.webp',
                'created_at' => 'September 18, 2024',
                'link' => 'https://avvanz.com/unlocking-opportunities-streamline-your-application-with-a-dbs-check-online/',
            ], [
                'id'=> '37',
                'title' => 'The Benefits of Corporate Learning for Businesses',
                'image' => 'blog37.webp',
                'created_at' => 'September 19, 2024',
                'link' => 'https://avvanz.com/the-benefits-of-corporate-learning-for-businesses/',
            ], [
                'id'=> '38',
                'title' => 'Empowering Excellence: Enhance Your Team with Soft Skills Training in Singapore',
                'image' => 'blog38.webp',
                'created_at' => 'September 23, 2024',
                'link' => 'https://avvanz.com/empowering-excellence-enhance-your-team-with-soft-skills-training-in-singapore/',
            ], [
                'id'=> '39',
                'title' => 'Elevate Your Business: Uncover the Power of Executive Coaching in Singapore',
                'image' => 'blog39.webp',
                'created_at' => 'September 24, 2024',
                'link' => 'https://avvanz.com/elevate-your-business-uncover-the-power-of-executive-coaching-in-singapore/',
            ], [
                'id'=> '40',
                'title' => 'The Ultimate Guide to the Background Verification Process',
                'image' => '',
                'created_at' => 'October 16, 2024',
                'link' => 'https://avvanz.com/background-verification-process/',
            ], [
                'id'=> '41',
                'title' => 'How Long Does a Criminal Background Verification Check Take?',
                'image' => '',
                'created_at' => 'October 16, 2024',
                'link' => 'https://avvanz.com/how-long-does-a-criminal-background-verification-check-take/',
            ], [
                'id'=> '42',
                'title' => 'Will Pending Criminal Charges Show Up in a Background Verification Check?',
                'image' => '',
                'created_at' => 'October 16, 2024',
                'link' => 'https://avvanz.com/will-pending-criminal-charges-show-up-in-a-background-verification-check/',
            ], [
                'id'=> '43',
                'title' => 'What is Background Verification? The Ultimate Guide to Safe Hiring',
                'image' => '',
                'created_at' => 'October 16, 2024',
                'link' => 'https://avvanz.com/what-is-background-verification/',
            ], [
                'id'=> '44',
                'title' => 'The Complete Guide to the Background Verification Process for Experienced Professionals',
                'image' => '',
                'created_at' => 'October 16, 2024',
                'link' => 'https://avvanz.com/background-verification-process-for-experienced/',
            ], [
                'id'=> '45',
                'title' => 'How Companies Do Background Verification: A Comprehensive Guide',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/how-companies-do-background-verification/',
            ], [
                'id'=> '46',
                'title' => 'How Background Verification Is Done: A Complete Guide for Employers',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/how-background-verification-is-done/',
            ], [
                'id'=> '47',
                'title' => 'Top 5 Background Verification Companies in India (2024)',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/top-5-background-verification-companies-in-india/',
            ], [
                'id'=> '48',
                'title' => 'Do Arrests Show Up on Criminal Background Verification Checks?',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/do-arrests-show-up-on-criminal-background-verification-checks/',
            ], [
                'id'=> '49',
                'title' => 'Background Verification Process in MNC: A Complete Guide',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/background-verification-process-in-mnc/',
            ], [
                'id'=> '50',
                'title' => 'What is the Background Verification Process in HR? A Comprehensive Guide',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/what-is-the-background-verification-process-in-hr/',
            ], [
                'id'=> '51',
                'title' => 'How Does Companies Do Background Verification Check in India?',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/how-does-companies-do-background-verification-check-in-india/',
            ], [
                'id'=> '52',
                'title' => 'How to Read a Background Verification Check: A Comprehensive Guide',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/how-to-read-a-background-verification-check/',
            ], [
                'id'=> '53',
                'title' => 'How Far Back Do Criminal Background Verification Checks Go?',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/how-far-back-do-criminal-background-verification-checks-go/',
            ], [
                'id'=> '54',
                'title' => 'How to Check Someone’s Criminal Background Verification: A Comprehensive Guide',
                'image' => '',
                'created_at' => 'October 21, 2024',
                'link' => 'https://avvanz.com/how-to-check-someones-criminal-background-verification/',
            ], [
                'id'=> '55',
                'title' => 'How Long Does a Background Verification Check Take?',
                'image' => '',
                'created_at' => 'October 25, 2024',
                'link' => 'https://avvanz.com/how-long-does-a-background-verification-check-take/',
            ], [
                'id'=> '56',
                'title' => 'Smart Background Verification Check: A Comprehensive Guide for Employers',
                'image' => '',
                'created_at' => 'October 25, 2024',
                'link' => 'https://avvanz.com/smart-background-verification-check/',
            ], [
                'id'=> '57',
                'title' => 'What Does a Background Verification Check Show? A Complete Guide for Employers',
                'image' => '',
                'created_at' => 'October 25, 2024',
                'link' => 'https://avvanz.com/what-does-a-background-verification-check-show/',
            ], [
                'id'=> '58',
                'title' => 'The Complete Guide to Employment Background Verification Check: Why It Matters for Your Business',
                'image' => '',
                'created_at' => 'October 25, 2024',
                'link' => 'https://avvanz.com/employment-background-verification-check/',
            ], [
                'id'=> '59',
                'title' => 'Personal Background Verification Check: Why It’s Essential and How to Do It Right',
                'image' => '',
                'created_at' => 'October 25, 2024',
                'link' => 'https://avvanz.com/personal-background-verification-check/',
            ], [
                'id'=> '60',
                'title' => 'How to Do a Background Verification Check on Someone: A Complete Guide',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/how-to-do-a-background-verification-check-on-someone/',
            ], [
                'id'=> '61',
                'title' => 'How Do I Find My Employment History for Free? A Complete Guide',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/how-do-i-find-my-employment-history-for-free/',
            ], [
                'id'=> '62',
                'title' => 'How to Do Employee Background Verification: A Comprehensive Guide',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/how-to-do-employee-background-verification/',
            ], [
                'id'=> '63',
                'title' => 'How to Get a Background Verification Check: A Comprehensive Guide',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/how-to-get-a-background-verification-check/',
            ], [
                'id'=> '64',
                'title' => 'How Much Does a Background Verification Check Cost?',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/how-much-does-a-background-verification-check-cost/',
            ], [
                'id'=> '65',
                'title' => 'How to Do a Background Verification Check on Yourself',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/how-to-do-a-background-verification-check-on-yourself/',
            ], [
                'id'=> '66',
                'title' => 'Does a Background Verification Check Show Employment History? Everything You Need to Know',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/does-a-background-verification-check-show-employment-history/',
            ], [
                'id'=> '67',
                'title' => 'A Comprehensive Guide to Self Background Verification Check for Job Seekers',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/self-background-verification-check/',
            ], [
                'id'=> '68',
                'title' => 'Why Is My Background Verification Check Taking So Long?',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/why-is-my-background-verification-check-taking-so-long/',
            ], [
                'id'=> '69',
                'title' => 'What Do Employers Look For in a Background Verification Check: Essential Factors Every Employer Must Know',
                'image' => '',
                'created_at' => 'October 28, 2024',
                'link' => 'https://avvanz.com/what-do-employers-look-for-in-a-background-verification-check/',
            ], [
                'id'=> '70',
                'title' => 'What is a Background Verification Check for a Job?',
                'image' => '',
                'created_at' => 'October 29, 2024',
                'link' => 'https://avvanz.com/what-is-a-background-verification-check-for-a-job/',
            ], [
                'id'=> '71',
                'title' => 'What’s a Background Verification Check? A Comprehensive Guide for Employers',
                'image' => '',
                'created_at' => 'October 29, 2024',
                'link' => 'https://avvanz.com/whats-a-background-verification-check/',
            ], [
                'id'=> '72',
                'title' => 'What Comes Up on a Background Verification Check for a Job?',
                'image' => '',
                'created_at' => 'October 29, 2024',
                'link' => 'https://avvanz.com/what-comes-up-on-a-background-verification-check-for-a-job/',
            ], [
                'id'=> '73',
                'title' => 'Comprehensive Guide to Employer Background Verification Check: Why It’s Essential for Your Business',
                'image' => '',
                'created_at' => 'October 29, 2024',
                'link' => 'https://avvanz.com/employer-background-verification-check/',
            ], [
                'id'=> '74',
                'title' => 'How to Run a Background Verification Check on Yourself for Free',
                'image' => '',
                'created_at' => 'October 29, 2024',
                'link' => 'https://avvanz.com/how-to-run-a-background-verification-check-on-yourself-for-free/',
            ],
        ];

        usort($blogItems, function ($a, $b) {
            return (int)$b['id'] - (int)$a['id'];
        });

        $collection = collect($blogItems);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $blogItemsPaginated = new LengthAwarePaginator($currentItems, $collection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view("pages.resources.blog", [
            "blogItems" => $blogItemsPaginated,
        ]);
    }

    public function blogItem($title) {
        return match ($title) {
            'tips-to-have-an-effective-teacher-hiring-strategy' => view('partials.resources.blog.blog_1'),
            'how-to-prepare-your-school-for-opening-and-reopening-during-the-covid-crisis' => view('partials.resources.blog.blog_2'),
            'how-fintech-is-transforming-the-underwriting-process' => view('partials.resources.blog.blog_3'),
            'the-hidden-risks-of-hiring-remotely' => view('partials.resources.blog.blog_4'),
            'green-finance-may-pave-a-new-way-for-the-sustainable-development-of-the-banking-industry' => view('partials.resources.blog.blog_5'),
            'digital-transformation-brings-new-opportunities-for-healthcare' => view('partials.resources.blog.blog_6'),
            'avvanz-is-awarded-as-hr-technology-company-of-the-year-2021' => view('partials.resources.blog.blog_7'),
            'creating-a-strong-collaborative-multi-generational-workforce-4-must-do-steps' => view('partials.resources.blog.blog_8'),
            'diamond-rules-of-entrepreneurship' => view('partials.resources.blog.blog_9'),
            'myth-or-fact-digital-transformation-is-costly-and-faces-many-uncertainties' => view('partials.resources.blog.blog_10'),
            'how-to-spot-red-flags-when-interviewing-a-candidate' => view('partials.resources.blog.blog_11'),
            'back-digital-transformation-brings-new-opportunities-for-healthcare' => view('partials.resources.blog.blog_12'),
            'all-you-need-to-know-about-the-british-standard-for-security-screening' => view('partials.resources.blog.blog_13'),
            'introduction-to-us-screening-requirements' => view('partials.resources.blog.blog_14'),
            'all-you-need-to-know-about-the-new-workforce-screening-standard-in-australia' => view('partials.resources.blog.blog_15'),
            'afp-checks' => view('partials.resources.blog.blog_16'),
            'apra-checks' => view('partials.resources.blog.blog_17'),
            'uk-dbs-checks' => view('partials.resources.blog.blog_18'),
            '1st-ever-amazonified-company-due-diligence-cdd-platform' => view('partials.resources.blog.blog_19'),
            'navigating-the-business-world-management-training-courses-in-singapore-unveiled' => view('partials.resources.blog.blog_20'),
            'delighting-customers-elevate-your-service-with-customer-service-training-in-singapore' => view('partials.resources.blog.blog_21'),
            'safeguarding-your-future-essential-steps-in-the-company-due-diligence-process' => view('partials.resources.blog.blog_22'),
            'navigating-success-your-guide-to-corporate-training-programs-in-singapore' => view('partials.resources.blog.blog_23'),
            'the-key-to-confidence-following-a-proven-financial-due-diligence-checklist' => view('partials.resources.blog.blog_24'),
            'the-essential-background-check-unveiling-the-basics-of-dbs-checks' => view('partials.resources.blog.blog_25'),
            'demystifying-the-dbs-check-application-your-path-to-employment' => view('partials.resources.blog.blog_26'),
            'unlocking-opportunities-how-enhanced-dbs-checks-open-doors-for-job-seekers' => view('partials.resources.blog.blog_27'),
            'choosing-the-best-corporate-training-companies' => view('partials.resources.blog.blog_28'),
            'customized-corporate-training-programs-for-employees' => view('partials.resources.blog.blog_29'),
            'the-importance-of-corporate-training-in-todays-business-landscape' => view('partials.resources.blog.blog_30'),
            'enhancing-corporate-culture-through-effective-training-programs' => view('partials.resources.blog.blog_31'),
            'corporate-leadership-training-developing-future-leaders' => view('partials.resources.blog.blog_32'),
            'from-application-to-approval-navigating-the-dbs-check-process' => view('partials.resources.blog.blog_33'),
            'boost-business-performance-communication-skills-training-in-singapore' => view('partials.resources.blog.blog_34'),
            'the-role-of-technology-in-modern-corporate-training-programs' => view('partials.resources.blog.blog_35'),
            'unlocking-opportunities-streamline-your-application-with-a-dbs-check-online' => view('partials.resources.blog.blog_36'),
            'the-benefits-of-corporate-learning-for-businesses' => view('partials.resources.blog.blog_37'),
            'empowering-excellence-enhance-your-team-with-soft-skills-training-in-singapore' => view('partials.resources.blog.blog_38'),
            'elevate-your-business-uncover-the-power-of-executive-coaching-in-singapore' => view('partials.resources.blog.blog_39'),
            'the-ultimate-guide-to-the-background-verification-process' => view('partials.resources.blog.blog_40'),
            'how-long-does-a-criminal-background-verification-check-take' => view('partials.resources.blog.blog_41'),
            'will-pending-criminal-charges-show-up-in-a-background-verification-check' => view('partials.resources.blog.blog_42'),
            'what-is-background-verification-the-ultimate-guide-to-safe-hiring' => view('partials.resources.blog.blog_43'),
            'the-complete-guide-to-the-background-verification-process-for-experienced-professionals' => view('partials.resources.blog.blog_44'),
            'how-companies-do-background-verification-a-comprehensive-guide' => view('partials.resources.blog.blog_45'),
            'how-background-verification-is-done-a-complete-guide-for-employers' => view('partials.resources.blog.blog_46'),
            'top-5-background-verification-companies-in-india-2024' => view('partials.resources.blog.blog_47'),
            'do-arrests-show-up-on-criminal-background-verification-checks' => view('partials.resources.blog.blog_48'),
            'background-verification-process-in-mnc-a-complete-guide' => view('partials.resources.blog.blog_49'),
            'what-is-the-background-verification-process-in-hr-a-comprehensive-guide' => view('partials.resources.blog.blog_50'),
            'how-does-companies-do-background-verification-check-in-india' => view('partials.resources.blog.blog_51'),
            'how-to-read-a-background-verification-check-a-comprehensive-guide' => view('partials.resources.blog.blog_52'),
            'how-far-back-do-criminal-background-verification-checks-go' => view('partials.resources.blog.blog_53'),
            'how-to-check-someones-criminal-background-verification-a-comprehensive-guide' => view('partials.resources.blog.blog_54'),
            'how-long-does-a-background-verification-check-take' => view('partials.resources.blog.blog_55'),
            'smart-background-verification-check-a-comprehensive-guide-for-employers' => view('partials.resources.blog.blog_56'),
            'what-does-a-background-verification-check-show-a-complete-guide-for-employers' => view('partials.resources.blog.blog_57'),
            'the-complete-guide-to-employment-background-verification-check-why-it-matters-for-your-business' => view('partials.resources.blog.blog_58'),
            'personal-background-verification-check-why-its-essential-and-how-to-do-it-right' => view('partials.resources.blog.blog_59'),
            'how-to-do-a-background-verification-check-on-someone-a-complete-guide' => view('partials.resources.blog.blog_60'),
            'how-do-i-find-my-employment-history-for-free-a-complete-guide' => view('partials.resources.blog.blog_61'),
            'how-to-do-employee-background-verification-a-comprehensive-guide' => view('partials.resources.blog.blog_62'),
            'how-to-get-a-background-verification-check-a-comprehensive-guide' => view('partials.resources.blog.blog_63'),
            'how-much-does-a-background-verification-check-cost' => view('partials.resources.blog.blog_64'),
            'how-to-do-a-background-verification-check-on-yourself' => view('partials.resources.blog.blog_65'),
            'does-a-background-verification-check-show-employment-history-everything-you-need-to-know' => view('partials.resources.blog.blog_66'),
            'a-comprehensive-guide-to-self-background-verification-check-for-job-seekers' => view('partials.resources.blog.blog_67'),
            'why-is-my-background-verification-check-taking-so-long' => view('partials.resources.blog.blog_68'),
            'what-do-employers-look-for-in-a-background-verification-check-essential-factors-every-employer-must-know' => view('partials.resources.blog.blog_69'),
            'what-is-a-background-verification-check-for-a-job' => view('partials.resources.blog.blog_70'),
            'whats-a-background-verification-check-a-comprehensive-guide-for-employers' => view('partials.resources.blog.blog_71'),
            'what-comes-up-on-a-background-verification-check-for-a-job' => view('partials.resources.blog.blog_72'),
            'comprehensive-guide-to-employer-background-verification-check-why-its-essential-for-your-business' => view('partials.resources.blog.blog_73'),
            'how-to-run-a-background-verification-check-on-yourself-for-free' => view('partials.resources.blog.blog_74'),
            // default => back(),
        };
    }

    public function newsletter()
    {
        $newsletterItems = [
            [
                'id'=> '1',
                'title' => 'Q3 Newsletter',
                'description' => 'Welcome to our Q3 edition of Avvanz’s newsletter! We are thrilled to share with you the latest developments and insights in background screening, human resource solutions and workforce optimization.',
                'image' => 'newsletter1.webp',
                'created_at' => 'September 17, 2024',
                'link' => 'https://www.avvanz.com/q3-newsletter/',
            ],
        ];

        usort($newsletterItems, function ($a, $b) {
            return (int)$b['id'] - (int)$a['id'];
        });

        $collection = collect($newsletterItems);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $newsletterItemsPaginated = new LengthAwarePaginator($currentItems, $collection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view("pages.resources.newsletter", [
            "newsletterItems" => $newsletterItemsPaginated,
        ]);
    }

    public function newsletterItem($title){
        if ($title === 'q3-newsletter') {
            $checkItems = [
                [
                    'title' => 'Safeguard Your Company’s Reputation',
                    'icon' => 'fa-user-lock',
                    'description' => 'Your employees represent your brand. Given that 3 to 4 of every resumes pose some form of discrepancies, wrongful hires can lead to reputational, financial and security damages to your organization.',
                ], [
                    'title' => 'Mitigate Security Risks',
                    'icon' => 'fa-clipboard-check',
                    'description' => 'With cyber threats and internal security breaches on the rise, verifying an employee’s past can protect your company from insider threats. A robust background check will help identify any red flags, such as criminal activity, that could compromise your business’s security.',
                ], [
                    'title' => 'Ensure a Safe Work Environment',
                    'icon' => 'fa-users',
                    'description' => 'A key part of building a safe and productive workplace is ensuring that employees do not have a history of violence or harassment. Background checks help create a secure environment for all employees, which in turn boosts morale and productivity.',
                ], [
                    'title' => 'Verify Qualifications and Skills',
                    'icon' => 'fa-user-check',
                    'description' => 'Misrepresenting qualifications on resumes is more common than one might think. Background checks allow you to verify an applicant\'s education, certifications, and past employment to ensure they have the skills required for the role.',
                ], [
                    'title' => 'Reduce Turnover and Hiring Costs',
                    'icon' => 'fa-search-dollar',
                    'description' => 'Hiring the wrong person is costly. Background checks help you hire candidates with a proven track record, leading to higher employee retention and reducing the need for frequent rehiring, which can drain resources.',
                ],  [
                    'title' => 'Compliance with Industry Regulations',
                    'icon' => 'fa-globe',
                    'description' => 'Many industries, such as finance and healthcare, have strict regulatory requirements that mandate thorough background checks. Failure to comply with these regulations can result in fines or legal penalties.',
                ], [
                    'title' => 'Safeguard Your Company’s Reputation',
                    'icon' => 'fa-user-lock',
                    'description' => 'Your employees represent your brand. Hiring someone without proper vetting can lead to reputational damage if they have a history of misconduct. Background checks ensure that you bring in individuals whose values align with your company\'s.',
                ],
            ];
            return view('partials.resources.newsletter.newsletter_1', [
                'checkItems' => $checkItems,
            ]);
        } else {
            return back();
        }
    }

    public function industry()
    {
        $industryItems = [
            [
                'id'=> '1',
                'title' => 'Background Verification Service in Asia',
                'description' => 'Background Verification Service in Asia Background verification services play a crucial role in the hiring process across industries in Asia. Employers are increasingly recognizing the importance of thorough background checks to',
                'image' => 'industry1.webp',
                'created_at' => 'January 18, 2024',
                'link' => 'https://www.avvanz.com/industry-report/',
            ],
        ];

        usort($industryItems, function ($a, $b) {
            return (int)$b['id'] - (int)$a['id'];
        });

        $collection = collect($industryItems);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $industryItemsPaginated = new LengthAwarePaginator($currentItems, $collection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view("pages.resources.industry", [
            "industryItems" => $industryItemsPaginated,
        ]);
    }

    public function industryItem($title) {
        if ($title === 'background-verification-service-in-asia') {
            return view('partials.resources.industry.industry_1');
        } else {
            return back();
        }
    }

    public function webinar()
    {
        $webinarItems = [
            [   
                'id'=> '1',
                'title' => 'Singtel Learning Fiesta',
                'image' => 'webinar1.webp',
                'created_at' => 'June 10, 2014',
                'link'=> 'https://www.avvanz.com/singtel-learning-fiesta/',
            ], [
                'id'=> '2',
                'title' => 'Singapore Human Resources Institute',
                'image' => 'webinar2.webp',
                'created_at' => 'February 27, 2015 ',
                'link'=> 'https://www.avvanz.com/singapore-human-resources-institute/',
            ], [
                'id'=> '3',
                'title' => 'Crown International: Effective Talent Recruitment And Retention Strategies',
                'image' => 'webinar3.webp',
                'created_at' => 'October 6, 2015 ',
                'link'=> 'https://www.avvanz.com/crown-international-effective-talent-recruitment-and-retention-strategies/',
            ], [
                'id'=> '4',
                'title' => 'Singapore HR Congress: Sieving Out RIGHT And SAFE Multi-Generational Talents',
                'image' => 'webinar4.webp',
                'created_at' => 'November 8, 2016',
                'link'=> 'https://www.avvanz.com/singapore-hr-congress-sieving-out-right-and-safe-multi-generational-talents/',
            ], [
                'id'=> '5',
                'title' => 'Webinar: Safeguarding And Child Protection Part 1',
                'image' => 'webinar5.webp',
                'created_at' => 'February 19, 2020',
                'link'=> 'https://www.avvanz.com/webinar-safeguarding-and-child-protection-part-1/',
            ], [
                'id'=> '6',
                'title' => 'Recruitment Masterclass: Employer Branding, Candidate Engagement And Background Screening During COVID-19',
                'image' => 'webinar6.webp',
                'created_at' => 'May 6, 2020',
                'link'=> 'https://www.avvanz.com/recruitment-masterclass-employer-branding-candidate-engagement-and-background-screening-during-covid-19/',
            ], [
                'id'=> '7',
                'title' => 'Webinar: Know Who You Hire',
                'image' => 'webinar7.webp',
                'created_at' => 'May 11, 2020',
                'link'=> 'https://www.avvanz.com/webinar-know-who-you-hire/',
            ], [
                'id'=> '8',
                'title' => 'Webinar: Safeguarding And Child Protection Part 2',
                'image' => 'webinar8.webp',
                'created_at' => 'May 13, 2020',
                'link'=> 'https://www.avvanz.com/webinar-safeguarding-and-child-protection-part-2/',
            ], [
                'id'=> '9',
                'title' => 'Webinar: Safeguarding And Child Protection Part 3',
                'image' => 'webinar9.webp',
                'created_at' => 'July 17, 2020',
                'link'=> 'https://www.avvanz.com/webinar-safeguarding-and-child-protection-part-3/',
            ], [
                'id'=> '10',
                'title' => 'Special APAC COVID-19 Webinar Panel Discussion',
                'image' => 'webinar10.webp',
                'created_at' => 'July 25, 2020',
                'link'=> 'https://www.avvanz.com/special-apac-covid-19-webinar-panel-discussion/'
            ], [
                'id'=> '11',
                'title' => 'Webinar: Safeguarding And Child Protection Part 4',
                'image' => 'webinar11.webp',
                'created_at' => 'August 11, 2020',
                'link'=> 'https://www.avvanz.com/webinar-safeguarding-and-child-protection-part-4/'
            ], [
                'id'=> '12',
                'title' => 'IHRP Tech Talk Series-Leveraging HR Tech To Create Best In Class Candidate Experience',
                'image' => 'webinar12.webp',
                'created_at' => 'August 28, 2020',
                'link'=> 'https://www.avvanz.com/ihrp-tech-talk-series-leveraging-hr-tech-to-create-best-in-class-candidate-experience/'
            ], [
                'id'=> '13',
                'title' => 'Caribbean Webinar: How And Why To Hire The Best Background Check Company',
                'image' => 'webinar13.webp',
                'created_at' => 'October 28, 2020',
                'link'=> 'https://www.avvanz.com/caribbean-webinar-how-and-why-to-hire-the-best-background-check-company/'
            ], [
                'id'=> '14',
                'title' => 'Joint Webinar: The 4th Industrial Revolution – How To Adapt Your Business To The Inevitable Digital Transformation',
                'image' => 'webinar14.webp',
                'created_at' => 'November 11, 2020',
                'link'=> 'https://www.avvanz.com/joint-webinar-the-4th-industrial-revolution-how-to-adapt-your-business-to-the-inevitable-digital-transformation/'
            ], [
                'id'=> '15',
                'title' => 'Panel Discussion: Talent Acquisition And Engagement Challenges Amidst The Pandemic',
                'image' => 'webinar15.webp',
                'created_at' => 'November 26, 2020',
                'link'=> 'https://www.avvanz.com/panel-discussion-talent-acquisition-and-engagement-challenges-amidst-the-pandemic/'
            ], [
                'id'=> '16',
                'title' => 'Avvanz At Singapore FinTech Festival 2020 (7-11 Dec)',
                'image' => 'webinar16.webp',
                'created_at' => 'December 7, 2020',
                'link'=> 'https://www.avvanz.com/avvanz-at-singapore-fintech-festival-2020-7-11-dec/'
            ], [
                'id'=> '17',
                'title' => 'Digital Transformation For The Maritime Industry – Demystifying The Process',
                'image' => 'webinar17.webp',
                'created_at' => 'January 21, 2021',
                'link'=> 'https://www.avvanz.com/digital-transformation-for-the-maritime-industry-demystifying-the-process/'
            ], [
                'id'=> '18',
                'title' => 'Quickiebinar Part 1: How Avvanz Weathered Covid-19',
                'image' => 'webinar18.webp',
                'created_at' => 'January 29, 2021',
                'link'=> 'https://www.avvanz.com/quickiebinar-part-1-how-avvanz-weathered-covid-19/'
            ], [
                'id'=> '19',
                'title' => 'Avvanz Techstival 7 April',
                'image' => 'webinar19.webp',
                'created_at' => 'April 7, 2021',
                'link'=> 'https://www.avvanz.com/avvanz-techstival-7-april/'
            ], [
                'id'=> '20',
                'title' => 'Managing Your Employee Lifecycle From Background Screening To Onboarding To Learning',
                'image' => 'webinar20.webp',
                'created_at' => 'June 1, 2021',
                'link'=> 'https://www.avvanz.com/managing-your-employee-lifecycle-from-background-screening-to-onboarding-to-learning/'
            ], [
                'id'=> '21',
                'title' => 'Education Industry: Overcoming Leadership And HR Challenges',
                'image' => 'webinar21.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/education-industry-overcoming-leadership-and-hr-challenges/'
            ], [
                'id'=> '22',
                'title' => 'Achieving 60% Hiring ROI Through AI And Background Screening',
                'image' => 'webinar22.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'id'=> '23',
                'title' => 'Leadership in Education: In what areas schools can leverage disruptive technologies?',
                'image' => 'webinar23.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'id'=> '24',
                'title' => 'Avvanz Webcafe: Monetary Authority of Singapore (MAS) Mandatory Reference Checks',
                'image' => 'webinar24.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'id'=> '25',
                'title' => 'AVVANZ WEBCAFE: The Great Resignation vs. The Great Retention',
                'image' => 'webinar25.webp',
                'created_at' => 'January 6, 2022',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'id'=> '26',
                'title' => 'Avvanz Techstival 2023 Philippine Edition',
                'image' => 'webinar26.webp',
                'created_at' => 'May 2, 2023',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'id'=> '27',
                'title' => 'Quickiebinar Part 1: Leadership – with Zubin Zack',
                'image' => 'webinar27.webp',
                'created_at' => 'June 2, 2023',
                'link'=> 'https://www.avvanz.com/achieving-60-hiring-roi-through-ai-and-background-screening/'
            ], [
                'id'=> '28',
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
            return (int)$b['id'] - (int)$a['id'];
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

    public function webinarItem($title) {
        return match ($title) {
            'singtel-learning-fiesta' => view('partials.resources.webinar.webinar_1'),
            'singapore-human-resources-institute' => view('partials.resources.webinar.webinar_2'),
            'crown-international-effective-talent-recruitment-and-retention-strategies' => view('partials.resources.webinar.webinar_3'),
            'singapore-hr-congress-sieving-out-right-and-safe-multi-generational-talents' => view('partials.resources.webinar.webinar_4'),
            'webinar-safeguarding-and-child-protection-part-1' => view('partials.resources.webinar.webinar_5'),
            'recruitment-masterclass-employer-branding-candidate-engagement-and-background-screening-during-covid-19' => view('partials.resources.webinar.webinar_6'),
            'webinar-know-who-you-hire' => view('partials.resources.webinar.webinar_7'),
            'webinar-safeguarding-and-child-protection-part-2' => view('partials.resources.webinar.webinar_8'),
            'webinar-safeguarding-and-child-protection-part-3' => view('partials.resources.webinar.webinar_9'),
            'special-apac-covid-19-webinar-panel-discussion' => view('partials.resources.webinar.webinar_10'),
            'webinar-safeguarding-and-child-protection-part-4' => view('partials.resources.webinar.webinar_11'),
            'ihrp-tech-talk-series-leveraging-hr-tech-to-create-best-in-class-candidate-experience' => view('partials.resources.webinar.webinar_12'),
            'caribbean-webinar-how-and-why-to-hire-the-best-background-check-company' => view('partials.resources.webinar.webinar_13'),
            'joint-webinar-the-4th-industrial-revolution-how-to-adapt-your-business-to-the-inevitable-digital-transformation' => view('partials.resources.webinar.webinar_14'),
            'panel-discussion-talent-acquisition-and-engagement-challenges-amidst-the-pandemic' => view('partials.resources.webinar.webinar_15'),
            'avvanz-at-singapore-fintech-festival-2020-7-11-dec' => view('partials.resources.webinar.webinar_16'),
            'digital-transformation-for-the-maritime-industry-demystifying-the-process' => view('partials.resources.webinar.webinar_17'),
            'quickiebinar-part-1-how-avvanz-weathered-covid-19' => view('partials.resources.webinar.webinar_18'),
            'avvanz-techstival-7-april' => view('partials.resources.webinar.webinar_19'),
            'managing-your-employee-lifecycle-from-background-screening-to-onboarding-to-learning' => view('partials.resources.webinar.webinar_20'),
            'education-industry-overcoming-leadership-and-hr-challenges' => view('partials.resources.webinar.webinar_21'),
            'achieving-60-hiring-roi-through-ai-and-background-screening' => view('partials.resources.webinar.webinar_22'),
            'leadership-in-education-in-what-areas-schools-can-leverage-disruptive-technologies' => view('partials.resources.webinar.webinar_23'),
            'avvanz-webcafe-monetary-authority-of-singapore-mas-mandatory-reference-checks' => view('partials.resources.webinar.webinar_24'),
            'avvanz-webcafe-the-great-resignation-vs-the-great-retention' => view('partials.resources.webinar.webinar_25'),
            'avvanz-techstival-2023-philippine-edition' => view('partials.resources.webinar.webinar_26'),
            'quickiebinar-part-1-leadership-with-zubin-zack' => view('partials.resources.webinar.webinar_27'),
            'quickiebinar-part-2-leadership-with-ariya-chittasy' => view('partials.resources.webinar.webinar_28'),
            default => back(),
        };
    }

    public function press()
    {
        $pressItems = [
            [
                'id' => '1',
                'title' => 'Drug Testing and Health Screening',
                'image' => 'press1.webp',
                'created_at' => 'February 20, 2020',
                'link'=> 'https://www.avvanz.com/drug-testing-and-health-screening/',
            ], [
                'id' => '2',
                'title' => 'Avvanz partners Epic Concepts',
                'image' => 'press2.webp',
                'created_at' => 'May 1, 2020',
                'link'=> 'https://www.avvanz.com/avvanz-partners-epic-concepts/',
            ], [
                'id' => '3',
                'title' => 'View From The Top: How to build a stronger business magnet',
                'image' => 'press3.webp',
                'created_at' => 'June 29, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-how-to-build-a-stronger-business-magnet/',
            ], [
                'id' => '4',
                'title' => 'View From The Top: No room for complacency',
                'image' => 'press4.webp',
                'created_at' => 'July 6, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-no-room-for-complacency/',
            ], [
                'id' => '5',
                'title' => 'View From The Top: Disparity between the stock markets and the economy',
                'image' => 'press5.webp',
                'created_at' => 'July 13, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-disparity-between-the-stock-markets-and-the-economy/',
            ], [
                'id' => '6',
                'title' => 'View From The Top: Emerging stronger from the storm',
                'image' => 'press6.webp',
                'created_at' => 'July 27, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-emerging-stronger-from-the-storm/',
            ], [
                'id' => '7',
                'title' => 'Avvanz Becomes FinTech Certified',
                'image' => 'press7.webp',
                'created_at' => 'July 28, 2020',
                'link'=> 'https://www.avvanz.com/avvanz-becomes-fintech-certified/',
            ], [
                'id' => '8',
                'title' => 'View From The Top: Rediscovering Singapore',
                'image' => 'press8.webp',
                'created_at' => 'August 3, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-rediscovering-singapore/',
            ], [
                'id' => '9',
                'title' => 'More Detailed Background Checks Needed Before Hiring',
                'image' => 'press9.webp',
                'created_at' => 'August 5, 2020',
                'link'=> 'https://www.avvanz.com/more-detailed-background-checks-needed-before-hiring/',
            ], [
                'id' => '10',
                'title' => 'View From The Top: Responsible Retrenchment',
                'image' => 'press10.webp',
                'created_at' => 'August 17, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-responsible-retrenchment/',
            ], [
                'id' => '11',
                'title' => 'View From The Top: Incentive Or Disincentive',
                'image' => 'press11.webp',
                'created_at' => 'September 7, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-incentive-or-disincentive/',
            ], [
                'id' => '12',
                'title' => 'View From The Top: A Special Exception',
                'image' => 'press12.webp',
                'created_at' => 'September 21, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-a-special-exception/',
            ], [
                'id' => '13',
                'title' => 'Avvanz Partners ACI To Enter The Caribbean Region',
                'image' => 'press13.webp',
                'created_at' => 'October 28, 2020',
                'link'=> 'https://www.avvanz.com/avvanz-partners-aci-to-enter-the-caribbean-region/',
            ], [
                'id' => '14',
                'title' => 'Gearing Up For The Unexpected: What Has Changed For Your Business This Year?',
                'image' => 'press14.webp',
                'created_at' => 'November 30, 2020',
                'link'=> 'https://www.avvanz.com/gearing-up-for-the-unexpected-what-has-changed-for-your-business-this-year/',
            ], [
                'id' => '15',
                'title' => 'Moving Up The Value Chain',
                'image' => 'press15.webp',
                'created_at' => 'February 1, 2021',
                'link'=> 'https://www.avvanz.com/moving-up-the-value-chain/',
            ], [
                'id' => '16',
                'title' => 'Gear Up For A Digital Future',
                'image' => 'press16.webp',
                'created_at' => 'February 8, 2021',
                'link'=> 'https://www.avvanz.com/gear-up-for-a-digital-future/',
            ], [
                'id' => '17',
                'title' => 'Why Firms Fall Prey To Dishonest Job Seekers',
                'image' => 'press17.webp',
                'created_at' => 'March 1, 2021',
                'link'=> 'https://www.avvanz.com/why-firms-fall-prey-to-dishonest-job-seekers/',
            ], [
                'id' => '18',
                'title' => 'Gender Parity More Than Workplace Flexibility Required',
                'image' => 'press18.webp',
                'created_at' => 'March 8, 2021',
                'link'=> 'https://www.avvanz.com/gender-parity-more-than-workplace-flexibility-required/',
            ], [
                'id' => '19',
                'title' => 'Avvanz Has Been Chosen And Appointed By The Ministry Of Manpower (MOM) Work Pass Division As An Approved Global Background Screening Company',
                'image' => 'press19.webp',
                'created_at' => 'March 9, 2021',
                'link'=> 'https://www.avvanz.com/avvanz-has-been-chosen-and-appointed-by-the-ministry-of-manpower-mom-work-pass-division-as-an-approved-global-background-screening-company/',
            ], [
                'id' => '20',
                'title' => 'Avvanz Partners ACCA Singapore',
                'image' => 'press20.webp',
                'created_at' => 'March 22, 2021',
                'link'=> 'https://www.avvanz.com/avvanz-partners-acca-singapore/',
            ], [
                'id' => '21',
                'title' => 'Ensuring That Shareholders Are Heard',
                'image' => 'press21.webp',
                'created_at' => 'March 29, 2021',
                'link'=> 'https://www.avvanz.com/ensuring-that-shareholders-are-heard/',
            ], [
                'id' => '22',
                'title' => 'Continuous monitoring in Healthcare Employees can save more lives',
                'image' => 'press22.webp',
                'created_at' => 'June 14, 2021',
                'link'=> 'https://www.avvanz.com/continuous-monitoring-in-healthcare-employees-can-save-more-lives/',
            ], [
                'id' => '23',
                'title' => 'Affinidi and Avvanz Sign MOU to Streamline Employment Background Checks in Singapore',
                'image' => 'press23.webp',
                'created_at' => 'August 5, 2022',
                'link'=> 'https://www.avvanz.com/affinidi-and-avvanz-sign-mou-to-streamline-employment-background-checks-in-singapore/',
            ], [
                'id' => '24',
                'title' => 'Applicants for a new employment pass must have academic qualifications from September',
                'image' => 'press24.webp',
                'created_at' => 'May 2, 2023',
                'link'=> 'https://www.avvanz.com/applicants-for-a-new-employment-pass-must-have-academic-qualifications-from-september/',
            ], [
                'id' => '25',
                'title' => 'Golf club managers to meet over money laundering concerns amid S$1 billion probe',
                'image' => 'press25.webp',
                'created_at' => 'September 4, 2023',
                'link'=> 'https://www.avvanz.com/golf-club-managers-to-meet-over-money-laundering-concerns-amid-s1-billion-probe/',
            ], [
                'id' => '26',
                'title' => 'CNA Explains: How does Singapore screen adults who work with kids?',
                'image' => 'press26.webp',
                'created_at' => 'January 30, 2024',
                'link'=> 'https://www.avvanz.com/cna-explains-how-does-singapore-screen-adults-who-work-with-kids/',
            ], [
                'id' => '27',
                'title' => 'Avvanz Announces Partnership With Dauntless Technology Solutions',
                'image' => 'press27.webp',
                'created_at' => 'February 29, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-announces-partnership-with-dauntless-technology-solutions/',
            ], [
                'id' => '28',
                'title' => 'More companies doing background checks for employment pass applicants',
                'image' => 'press28.webp',
                'created_at' => 'March 1, 2024',
                'link'=> 'https://www.avvanz.com/more-companies-doing-background-checks-for-employment-pass-applicants/',
            ], [
                'id' => '29',
                'title' => 'Avvanz Pte ltd Expands its Global Reach with New Office Opening in Bengaluru, India',
                'image' => 'press29.webp',
                'created_at' => 'May 13, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-expands-global-reach/',
            ], [
                'id' => '30',
                'title' => 'Avvanz Tackles Employee Screening Challenges: Affordable, Compliant, and Comprehensive Background Checks Now Available In India',
                'image' => 'press30.webp',
                'created_at' => 'June 21, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-tackles-employee-screening-challenges-affordable-compliant-and-comprehensive-background-checks-now-available-in-india/',
            ]
        ];

        usort($pressItems, function ($a, $b) {
            return (int)$b['id'] - (int)$a['id'];
        });

        $collection = collect($pressItems);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $pressItemsPaginated = new LengthAwarePaginator($currentItems, $collection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view("pages.resources.press", [
            "pressItems" => $pressItemsPaginated,
        ]);
    }

    public function pressItem($title) {
        if ($title === 'drug-testing-and-health-screening') {
            return view('partials.resources.press.press_1');
        } elseif ($title === 'avvanz-partners-epic-concepts') {
            return view('partials.resources.press.press_2');
        } elseif ($title === 'view-from-the-top-how-to-build-a-stronger-business-magnet') {
            return view('partials.resources.press.press_3');
        } elseif ($title === 'view-from-the-top-no-room-for-complacency') {
            return view('partials.resources.press.press_4');
        } elseif ($title === 'view-from-the-top-disparity-between-the-stock-markets-and-the-economy') {
            return view('partials.resources.press.press_5');
        } elseif ($title === 'view-from-the-top-emerging-stronger-from-the-storm') {
            return view('partials.resources.press.press_6');
        }  elseif ($title === 'avvanz-becomes-fintech-certified') {
            return view('partials.resources.press.press_7');
        } elseif ($title === 'view-from-the-top-rediscovering-singapore') {
            return view('partials.resources.press.press_8');
        } elseif ($title === 'more-detailed-background-checks-needed-before-hiring') {
            return view('partials.resources.press.press_9');
        } elseif ($title === 'view-from-the-top-responsible-retrenchment') {
            return view('partials.resources.press.press_10');
        } elseif ($title === 'view-from-the-top-incentive-or-disincentive') {
            return view('partials.resources.press.press_11');
        } elseif ($title === 'view-from-the-top-a-special-exception') {
            return view('partials.resources.press.press_12');
        } elseif ($title === 'avvanz-partners-aci-to-enter-the-caribbean-region') {
            return view('partials.resources.press.press_13');
        } elseif ($title === 'gearing-up-for-the-unexpected-what-has-changed-for-your-business-this-year') {
            return view('partials.resources.press.press_14');
        } elseif ($title === 'moving-up-the-value-chain') {
            return view('partials.resources.press.press_15');
        } elseif ($title === 'gear-up-for-a-digital-future') {
            return view('partials.resources.press.press_16');
        } elseif ($title === 'why-firms-fall-prey-to-dishonest-job-seekers') {
            return view('partials.resources.press.press_17');
        } elseif ($title === 'gender-parity-more-than-workplace-flexibility-required') {
            return view('partials.resources.press.press_18');
        } elseif ($title === 'avvanz-has-been-chosen-and-appointed-by-the-ministry-of-manpower-mom-work-pass-division-as-an-approved-global-background-screening-company') {
            return view('partials.resources.press.press_19');
        } elseif ($title === 'avvanz-partners-acca-singapore') {
            return view('partials.resources.press.press_20');
        } elseif ($title === 'ensuring-that-shareholders-are-heard') {
            return view('partials.resources.press.press_21');
        } elseif ($title === 'continuous-monitoring-in-healthcare-employees-can-save-more-lives') {
            return view('partials.resources.press.press_22');
        } elseif ($title === 'affinidi-and-avvanz-sign-mou-to-streamline-employment-background-checks-in-singapore') {
            return view('partials.resources.press.press_23');
        } elseif ($title === 'applicants-for-a-new-employment-pass-must-have-academic-qualifications-from-september') {
            return view('partials.resources.press.press_24');
        } elseif ($title === 'golf-club-managers-to-meet-over-money-laundering-concerns-amid-s1-billion-probe') {
            return view('partials.resources.press.press_25');
        } elseif ($title === 'cna-explains-how-does-singapore-screen-adults-who-work-with-kids') {
            return view('partials.resources.press.press_26');
        } elseif ($title === 'avvanz-announces-partnership-with-dauntless-technology-solutions') {
            return view('partials.resources.press.press_27');
        } elseif ($title === 'more-companies-doing-background-checks-for-employment-pass-applicants') {
            return view('partials.resources.press.press_28');
        } elseif ($title === 'avvanz-pte-ltd-expands-its-global-reach-with-new-office-opening-in-bengaluru-india') {
            return view('partials.resources.press.press_29');
        } elseif ($title === 'avvanz-tackles-employee-screening-challenges-affordable-compliant-and-comprehensive-background-checks-now-available-in-india') {
            return view('partials.resources.press.press_30');
        } else {
            return back();
        }
    }
}

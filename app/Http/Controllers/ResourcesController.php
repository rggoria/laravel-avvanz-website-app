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
                'title' => 'Tips To Have An Effective Teacher Hiring Strategy',
                'image' => 'blog1.webp',
                'created_at' => 'June 21, 2021',
                'link' => 'https://www.avvanz.com/tips-to-have-an-effective-teacher-hiring-strategy/',
            ], [
                'title' => 'How To Prepare Your School For Opening And Reopening During The COVID Crisis',
                'image' => 'blog2.webp',
                'created_at' => 'June 23, 2021',
                'link' => 'https://www.avvanz.com/how-to-prepare-your-school-for-opening-and-reopening-during-the-covid-crisis/',
            ], [
                'title' => 'How Fintech Is Transforming The Underwriting Process',
                'image' => 'blog3.webp',
                'created_at' => 'June 24, 2021',
                'link' => 'https://www.avvanz.com/how-fintech-is-transforming-the-underwriting-process/',
            ], [
                'title' => 'The Hidden Risks Of Hiring Remotely',
                'image' => 'blog4.webp',
                'created_at' => 'June 30, 2021',
                'link' => 'https://www.avvanz.com/the-hidden-risks-of-hiring-remotely/',
            ], [
                'title' => 'Green Finance May Pave A New Way For The Sustainable Development Of The Banking Industry',
                'image' => 'blog5.webp',
                'created_at' => 'July 5, 2021',
                'link' => 'https://www.avvanz.com/green-finance-may-pave-a-new-way-for-the-sustainable-development-of-the-banking-industry/',
            ], [
                'title' => 'Digital Transformation Brings New Opportunities For Healthcare',
                'image' => 'blog6.webp',
                'created_at' => 'July 9, 2021',
                'link' => 'https://www.avvanz.com/digital-transformation-brings-new-opportunities-for-healthcare/',
            ], [
                'title' => 'AVVANZ is awarded as HR Technology Company of the Year 2021',
                'image' => 'blog7.webp',
                'created_at' => 'July 12, 2021',
                'link' => 'https://www.avvanz.com/avvanz-is-awarded-as-hr-technology-company-of-the-year-2021/',
            ], [
                'title' => 'Creating a Strong, Collaborative Multi-Generational Workforce: 4 Must-Do Steps',
                'image' => 'blog8.webp',
                'created_at' => 'August 30, 2021',
                'link' => 'https://www.avvanz.com/creating-a-strong-collaborative-multi-generational-workforce-4-must-do-steps/',
            ], [
                'title' => 'Diamond Rules of Entrepreneurship',
                'image' => 'blog9.webp',
                'created_at' => 'December 15, 2021',
                'link' => 'https://www.avvanz.com/diamond-rules-of-entrepreneurship/',
            ], [
                'title' => 'MYTH OR FACT? Digital Transformation Is Costly And Faces Many Uncertainties',
                'image' => 'blog20.webp',
                'created_at' => 'January 6, 2022',
                'link' => 'https://www.avvanz.com/back-myth-or-fact-digital-transformation-is-costly-and-faces-many-uncertainties/',
            ], [
                'title' => 'How To Spot Red Flags When Interviewing A Candidate',
                'image' => 'blog11.webp',
                'created_at' => 'January 6, 2022',
                'link' => 'https://www.avvanz.com/how-to-spot-red-flags-when-interviewing-a-candidate/',
            ], [
                'title' => 'Digital Transformation Brings New Opportunities For Healthcare',
                'image' => 'blog12.webp',
                'created_at' => 'January 6, 2022',
                'link' => 'https://www.avvanz.com/back-digital-transformation-brings-new-opportunities-for-healthcare/',
            ], [
                'title' => 'All you need to know about the British Standard for Security Screening',
                'image' => 'blog13.webp',
                'created_at' => 'March 10, 2023',
                'link' => 'https://www.avvanz.com/all-you-need-to-know-about-the-british-standard-for-security-screening/',
            ], [
                'title' => 'Introduction to US Screening requirements',
                'image' => 'blog14.webp',
                'created_at' => 'March 10, 2023',
                'link' => 'https://www.avvanz.com/introduction-to-us-screening-requirements/',
            ], [
                'title' => 'All you need to know about the NEW Workforce Screening Standard in Australia',
                'image' => 'blog15.webp',
                'created_at' => 'March 10, 2023',
                'link' => 'https://www.avvanz.com/all-you-need-to-know-about-the-new-workforce-screening-standard-in-australia/',
            ], [
                'title' => 'AFP Checks',
                'image' => 'blog16.webp',
                'created_at' => 'May 9, 2023',
                'link' => 'https://www.avvanz.com/afp-checks/',
            ], [
                'title' => 'APRA Checks',
                'image' => 'blog17.webp',
                'created_at' => 'May 9, 2023',
                'link' => 'https://www.avvanz.com/apra-checks/',
            ], [
                'title' => 'UK DBS Checks',
                'image' => 'blog18.webp',
                'created_at' => 'May 31, 2023',
                'link' => 'https://www.avvanz.com/uk-dbs-checks/',
            ], [
                'title' => '1st ever “Amazonified” Company Due Diligence (CDD) Platform',
                'image' => 'blog19.webp',
                'created_at' => 'May 31, 2023',
                'link' => 'https://www.avvanz.com/1st-ever-amazonified-company-due-diligence-cdd-platform/',
            ], [
                'title' => 'Navigating the Business World Management Training Courses in Singapore Unveiled',
                'image' => 'blog20.webp',
                'created_at' => 'April 25, 2024',
                'link' => 'https://www.avvanz.com/navigating-the-business-world-management-training-courses-in-singapore-unveiled/',
            ], [
                'title' => 'Delighting Customers: Elevate Your Service with Customer Service Training in Singapore',
                'image' => 'blog21.webp',
                'created_at' => 'April 26, 2024',
                'link' => 'https://www.avvanz.com/delighting-customers-elevate-your-service-with-customer-service-training-in-singapore/',
            ], [
                'title' => 'Safeguarding Your Future: Essential Steps in the Company Due Diligence Process',
                'image' => 'blog22.webp',
                'created_at' => 'April 29, 2024',
                'link' => 'https://www.avvanz.com/safeguarding-your-future-essential-steps-in-the-company-due-diligence-process/',
            ], [
                'title' => 'Navigating Success: Your Guide to Corporate Training Programs in Singapore',
                'image' => 'blog23.webp',
                'created_at' => 'April 30, 2024',
                'link' => 'https://www.avvanz.com/navigating-success-your-guide-to-corporate-training-programs-in-singapore/',
            ], [
                'title' => 'The Key to Confidence: Following a Proven Financial Due Diligence Checklist',
                'image' => 'blog24.webp',
                'created_at' => 'May 2, 2024',
                'link' => 'https://www.avvanz.com/the-key-to-confidence-following-a-proven-financial-due-diligence-checklist/',
            ], [
                'title' => 'The Essential Background Check: Unveiling the Basics of DBS Checks',
                'image' => 'blog25.webp',
                'created_at' => 'May 7, 2024',
                'link' => 'https://www.avvanz.com/the-essential-background-check-unveiling-the-basics-of-dbs-checks/',
            ], [
                'title' => 'Demystifying the DBS Check Application: Your Path to Employment',
                'image' => 'blog26.webp',
                'created_at' => 'May 10, 2024',
                'link' => 'https://www.avvanz.com/demystifying-the-dbs-check-application-your-path-to-employment/',
            ], [
                'title' => 'Unlocking Opportunities: How Enhanced DBS Checks Open Doors for Job Seekers',
                'image' => 'blog27.webp',
                'created_at' => 'May 14, 2024',
                'link' => 'https://www.avvanz.com/unlocking-opportunities-how-enhanced-dbs-checks-open-doors-for-job-seekers/',
            ], [
                'title' => 'Choosing the Best Corporate Training Companies',
                'image' => 'blog28.webp',
                'created_at' => 'September 4, 2024',
                'link' => 'https://www.avvanz.com/choosing-the-best-corporate-training-companies/',
            ], [
                'title' => 'Customized Corporate Training Programs for Employees',
                'image' => 'blog29.webp',
                'created_at' => 'September 9, 2024',
                'link' => 'https://www.avvanz.com/customized-corporate-training-programs-for-employees/',
            ], [
                'title' => 'The Role of Technology in Modern Corporate Training Programs',
                'image' => 'blog30.webp',
                'created_at' => 'September 18, 2024',
                'link' => 'https://www.avvanz.com/the-role-of-technology-in-modern-corporate-training-programs/',
            ],
        ];

        usort($blogItems, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
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

        usort($newsletterItems, function ($a, $b) {
            return strtotime(datetime: $b['created_at']) - strtotime($a['created_at']);
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
                'title' => 'Background Verification Service in Asia',
                'description' => 'Background Verification Service in Asia Background verification services play a crucial role in the hiring process across industries in Asia. Employers are increasingly recognizing the importance of thorough background checks to',
                'image' => 'industry1.webp',
                'created_at' => 'January 18, 2024',
                'link' => 'https://www.avvanz.com/industry-report/',
            ],
        ];

        usort($industryItems, function ($a, $b) {
            return strtotime(datetime: $b['created_at']) - strtotime($a['created_at']);
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
                'title' => 'Drug Testing and Health Screening',
                'image' => 'press1.webp',
                'created_at' => 'February 20, 2020',
                'link'=> 'https://www.avvanz.com/drug-testing-and-health-screening/',
            ], [
                'title' => 'Avvanz partners Epic Concepts',
                'image' => 'press2.webp',
                'created_at' => 'May 1, 2020',
                'link'=> 'https://www.avvanz.com/avvanz-partners-epic-concepts/',
            ], [
                'title' => 'View From The Top: How to build a stronger business magnet',
                'image' => 'press3.webp',
                'created_at' => 'June 29, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-how-to-build-a-stronger-business-magnet/',
            ], [
                'title' => 'View From The Top: No room for complacency',
                'image' => 'press4.webp',
                'created_at' => 'July 6, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-no-room-for-complacency/',
            ], [
                'title' => 'View From The Top: Disparity between the stock markets and the economy',
                'image' => 'press5.webp',
                'created_at' => 'July 13, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-disparity-between-the-stock-markets-and-the-economy/',
            ], [
                'title' => 'View From The Top: Emerging stronger from the storm',
                'image' => 'press6.webp',
                'created_at' => 'July 27, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-emerging-stronger-from-the-storm/',
            ], [
                'title' => 'Avvanz Becomes FinTech Certified',
                'image' => 'press7.webp',
                'created_at' => 'July 28, 2020',
                'link'=> 'https://www.avvanz.com/avvanz-becomes-fintech-certified/',
            ], [
                'title' => 'View From The Top: Rediscovering Singapore',
                'image' => 'press8.webp',
                'created_at' => 'August 3, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-rediscovering-singapore/',
            ], [
                'title' => 'More Detailed Background Checks Needed Before Hiring',
                'image' => 'press9.webp',
                'created_at' => 'August 5, 2020',
                'link'=> 'https://www.avvanz.com/more-detailed-background-checks-needed-before-hiring/',
            ], [
                'title' => 'View From The Top: Responsible Retrenchment',
                'image' => 'press10.webp',
                'created_at' => 'August 17, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-responsible-retrenchment/',
            ], [
                'title' => 'View From The Top: Incentive Or Disincentive',
                'image' => 'press11.webp',
                'created_at' => 'September 7, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-incentive-or-disincentive/',
            ], [
                'title' => 'View From The Top: A Special Exception',
                'image' => 'press12.webp',
                'created_at' => 'September 21, 2020',
                'link'=> 'https://www.avvanz.com/view-from-the-top-a-special-exception/',
            ], [
                'title' => 'Avvanz Partners ACI To Enter The Caribbean Region',
                'image' => 'press13.webp',
                'created_at' => 'October 28, 2020',
                'link'=> 'https://www.avvanz.com/avvanz-partners-aci-to-enter-the-caribbean-region/',
            ], [
                'title' => 'Gearing Up For The Unexpected: What Has Changed For Your Business This Year?',
                'image' => 'press14.webp',
                'created_at' => 'November 30, 2020',
                'link'=> 'https://www.avvanz.com/gearing-up-for-the-unexpected-what-has-changed-for-your-business-this-year/',
            ], [
                'title' => 'Moving Up The Value Chain',
                'image' => 'press15.webp',
                'created_at' => 'February 1, 2021',
                'link'=> 'https://www.avvanz.com/moving-up-the-value-chain/',
            ], [
                'title' => 'Gear Up For A Digital Future',
                'image' => 'press16.webp',
                'created_at' => 'February 8, 2021',
                'link'=> 'https://www.avvanz.com/gear-up-for-a-digital-future/',
            ], [
                'title' => 'Why Firms Fall Prey To Dishonest Job Seekers',
                'image' => 'press17.webp',
                'created_at' => 'March 1, 2021',
                'link'=> 'https://www.avvanz.com/why-firms-fall-prey-to-dishonest-job-seekers/',
            ], [
                'title' => 'Gender Parity More Than Workplace Flexibility Required',
                'image' => 'press18.webp',
                'created_at' => 'March 8, 2021',
                'link'=> 'https://www.avvanz.com/gender-parity-more-than-workplace-flexibility-required/',
            ], [
                'title' => 'Avvanz Has Been Chosen And Appointed By The Ministry Of Manpower (MOM) Work Pass Division As An Approved Global Background Screening Company',
                'image' => 'press19.webp',
                'created_at' => 'March 9, 2021',
                'link'=> 'https://www.avvanz.com/avvanz-has-been-chosen-and-appointed-by-the-ministry-of-manpower-mom-work-pass-division-as-an-approved-global-background-screening-company/',
            ], [
                'title' => 'Avvanz Partners ACCA Singapore',
                'image' => 'press20.webp',
                'created_at' => 'March 22, 2021',
                'link'=> 'https://www.avvanz.com/avvanz-partners-acca-singapore/',
            ], [
                'title' => 'Ensuring That Shareholders Are Heard',
                'image' => 'press21.webp',
                'created_at' => 'March 29, 2021',
                'link'=> 'https://www.avvanz.com/ensuring-that-shareholders-are-heard/',
            ], [
                'title' => 'Continuous monitoring in Healthcare Employees can save more lives',
                'image' => 'press22.webp',
                'created_at' => 'June 14, 2021',
                'link'=> 'https://www.avvanz.com/continuous-monitoring-in-healthcare-employees-can-save-more-lives/',
            ], [
                'title' => 'Affinidi and Avvanz Sign MOU to Streamline Employment Background Checks in Singapore',
                'image' => 'press23.webp',
                'created_at' => 'August 5, 2022',
                'link'=> 'https://www.avvanz.com/affinidi-and-avvanz-sign-mou-to-streamline-employment-background-checks-in-singapore/',
            ], [
                'title' => 'Applicants for a new employment pass must have academic qualifications from September',
                'image' => 'press24.webp',
                'created_at' => 'May 2, 2023',
                'link'=> 'https://www.avvanz.com/applicants-for-a-new-employment-pass-must-have-academic-qualifications-from-september/',
            ], [
                'title' => 'Golf club managers to meet over money laundering concerns amid S$1 billion probe',
                'image' => 'press25.webp',
                'created_at' => 'September 4, 2023',
                'link'=> 'https://www.avvanz.com/golf-club-managers-to-meet-over-money-laundering-concerns-amid-s1-billion-probe/',
            ], [
                'title' => 'CNA Explains: How does Singapore screen adults who work with kids?',
                'image' => 'press26.webp',
                'created_at' => 'January 30, 2024',
                'link'=> 'https://www.avvanz.com/cna-explains-how-does-singapore-screen-adults-who-work-with-kids/',
            ], [
                'title' => 'Avvanz Announces Partnership With Dauntless Technology Solutions',
                'image' => 'press27.webp',
                'created_at' => 'February 29, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-announces-partnership-with-dauntless-technology-solutions/',
            ], [
                'title' => 'More companies doing background checks for employment pass applicants',
                'image' => 'press28.webp',
                'created_at' => 'March 1, 2024',
                'link'=> 'https://www.avvanz.com/more-companies-doing-background-checks-for-employment-pass-applicants/',
            ], [
                'title' => 'Avvanz Pte ltd Expands its Global Reach with New Office Opening in Bengaluru, India',
                'image' => 'press29.webp',
                'created_at' => 'May 13, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-expands-global-reach/',
            ], [
                'title' => 'Avvanz Tackles Employee Screening Challenges: Affordable, Compliant, and Comprehensive Background Checks Now Available In India',
                'image' => 'press30.webp',
                'created_at' => 'June 21, 2024',
                'link'=> 'https://www.avvanz.com/avvanz-tackles-employee-screening-challenges-affordable-compliant-and-comprehensive-background-checks-now-available-in-india/',
            ]
        ];

        usort($pressItems, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
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
        }
        // else {
        //     return back();
        // }
    }
}

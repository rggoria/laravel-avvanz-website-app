<?php

namespace App\Http\Controllers\UATWEB;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class ResourcesController extends Controller
{
    public function blog(Request $request)
    {
        $jsonFilePath = resource_path('json/UATWEB/resources/blogItems.json');
        $jsonContent = File::get($jsonFilePath);
        
        $blogItems = json_decode($jsonContent, true);

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

        return view("UATWEB.pages.resources.blog", [
            "blogItems" => $blogItemsPaginated,
        ]);
    }

    public function blogItem($title) {
        return match ($title) {
            'tips-to-have-an-effective-teacher-hiring-strategy' => view('UATWEB.partials.resources.blog.blog_1'),
            'how-to-prepare-your-school-for-opening-and-reopening-during-the-covid-crisis' => view('UATWEB.partials.resources.blog.blog_2'),
            'how-fintech-is-transforming-the-underwriting-process' => view('UATWEB.partials.resources.blog.blog_3'),
            'the-hidden-risks-of-hiring-remotely' => view('UATWEB.partials.resources.blog.blog_4'),
            'green-finance-may-pave-a-new-way-for-the-sustainable-development-of-the-banking-industry' => view('UATWEB.partials.resources.blog.blog_5'),
            'digital-transformation-brings-new-opportunities-for-healthcare' => view('UATWEB.partials.resources.blog.blog_6'),
            'avvanz-is-awarded-as-hr-technology-company-of-the-year-2021' => view('UATWEB.partials.resources.blog.blog_7'),
            'creating-a-strong-collaborative-multi-generational-workforce-4-must-do-steps' => view('UATWEB.partials.resources.blog.blog_8'),
            'diamond-rules-of-entrepreneurship' => view('UATWEB.partials.resources.blog.blog_9'),
            'myth-or-fact-digital-transformation-is-costly-and-faces-many-uncertainties' => view('UATWEB.partials.resources.blog.blog_10'),
            'how-to-spot-red-flags-when-interviewing-a-candidate' => view('UATWEB.partials.resources.blog.blog_11'),
            'back-digital-transformation-brings-new-opportunities-for-healthcare' => view('UATWEB.partials.resources.blog.blog_12'),
            'all-you-need-to-know-about-the-british-standard-for-security-screening' => view('UATWEB.partials.resources.blog.blog_13'),
            'introduction-to-us-screening-requirements' => view('UATWEB.partials.resources.blog.blog_14'),
            'all-you-need-to-know-about-the-new-workforce-screening-standard-in-australia' => view('UATWEB.partials.resources.blog.blog_15'),
            'afp-checks' => view('UATWEB.partials.resources.blog.blog_16'),
            'apra-checks' => view('UATWEB.partials.resources.blog.blog_17'),
            'uk-dbs-checks' => view('UATWEB.partials.resources.blog.blog_18'),
            '1st-ever-amazonified-company-due-diligence-cdd-platform' => view('UATWEB.partials.resources.blog.blog_19'),
            'navigating-the-business-world-management-training-courses-in-singapore-unveiled' => view('UATWEB.partials.resources.blog.blog_20'),
            'delighting-customers-elevate-your-service-with-customer-service-training-in-singapore' => view('UATWEB.partials.resources.blog.blog_21'),
            'safeguarding-your-future-essential-steps-in-the-company-due-diligence-process' => view('UATWEB.partials.resources.blog.blog_22'),
            'navigating-success-your-guide-to-corporate-training-programs-in-singapore' => view('UATWEB.partials.resources.blog.blog_23'),
            'the-key-to-confidence-following-a-proven-financial-due-diligence-checklist' => view('UATWEB.partials.resources.blog.blog_24'),
            'the-essential-background-check-unveiling-the-basics-of-dbs-checks' => view('UATWEB.partials.resources.blog.blog_25'),
            'demystifying-the-dbs-check-application-your-path-to-employment' => view('UATWEB.partials.resources.blog.blog_26'),
            'unlocking-opportunities-how-enhanced-dbs-checks-open-doors-for-job-seekers' => view('UATWEB.partials.resources.blog.blog_27'),
            'choosing-the-best-corporate-training-companies' => view('UATWEB.partials.resources.blog.blog_28'),
            'customized-corporate-training-programs-for-employees' => view('UATWEB.partials.resources.blog.blog_29'),
            'the-importance-of-corporate-training-in-todays-business-landscape' => view('UATWEB.partials.resources.blog.blog_30'),
            'enhancing-corporate-culture-through-effective-training-programs' => view('UATWEB.partials.resources.blog.blog_31'),
            'corporate-leadership-training-developing-future-leaders' => view('UATWEB.partials.resources.blog.blog_32'),
            'from-application-to-approval-navigating-the-dbs-check-process' => view('UATWEB.partials.resources.blog.blog_33'),
            'boost-business-performance-communication-skills-training-in-singapore' => view('UATWEB.partials.resources.blog.blog_34'),
            'the-role-of-technology-in-modern-corporate-training-programs' => view('UATWEB.partials.resources.blog.blog_35'),
            'unlocking-opportunities-streamline-your-application-with-a-dbs-check-online' => view('UATWEB.partials.resources.blog.blog_36'),
            'the-benefits-of-corporate-learning-for-businesses' => view('UATWEB.partials.resources.blog.blog_37'),
            'empowering-excellence-enhance-your-team-with-soft-skills-training-in-singapore' => view('UATWEB.partials.resources.blog.blog_38'),
            'elevate-your-business-uncover-the-power-of-executive-coaching-in-singapore' => view('UATWEB.partials.resources.blog.blog_39'),
            'the-ultimate-guide-to-the-background-verification-process' => view('UATWEB.partials.resources.blog.blog_40'),
            'how-long-does-a-criminal-background-verification-check-take' => view('UATWEB.partials.resources.blog.blog_41'),
            'will-pending-criminal-charges-show-up-in-a-background-verification-check' => view('UATWEB.partials.resources.blog.blog_42'),
            'what-is-background-verification-the-ultimate-guide-to-safe-hiring' => view('UATWEB.partials.resources.blog.blog_43'),
            'the-complete-guide-to-the-background-verification-process-for-experienced-professionals' => view('UATWEB.partials.resources.blog.blog_44'),
            'how-companies-do-background-verification-a-comprehensive-guide' => view('UATWEB.partials.resources.blog.blog_45'),
            'how-background-verification-is-done-a-complete-guide-for-employers' => view('UATWEB.partials.resources.blog.blog_46'),
            'top-5-background-verification-companies-in-india-2024' => view('UATWEB.partials.resources.blog.blog_47'),
            'do-arrests-show-up-on-criminal-background-verification-checks' => view('UATWEB.partials.resources.blog.blog_48'),
            'background-verification-process-in-mnc-a-complete-guide' => view('UATWEB.partials.resources.blog.blog_49'),
            'what-is-the-background-verification-process-in-hr-a-comprehensive-guide' => view('UATWEB.partials.resources.blog.blog_50'),
            'how-does-companies-do-background-verification-check-in-india' => view('UATWEB.partials.resources.blog.blog_51'),
            'how-to-read-a-background-verification-check-a-comprehensive-guide' => view('UATWEB.partials.resources.blog.blog_52'),
            'how-far-back-do-criminal-background-verification-checks-go' => view('UATWEB.partials.resources.blog.blog_53'),
            'how-to-check-someones-criminal-background-verification-a-comprehensive-guide' => view('UATWEB.partials.resources.blog.blog_54'),
            'how-long-does-a-background-verification-check-take' => view('UATWEB.partials.resources.blog.blog_55'),
            'smart-background-verification-check-a-comprehensive-guide-for-employers' => view('UATWEB.partials.resources.blog.blog_56'),
            'what-does-a-background-verification-check-show-a-complete-guide-for-employers' => view('UATWEB.partials.resources.blog.blog_57'),
            'the-complete-guide-to-employment-background-verification-check-why-it-matters-for-your-business' => view('UATWEB.partials.resources.blog.blog_58'),
            'personal-background-verification-check-why-its-essential-and-how-to-do-it-right' => view('UATWEB.partials.resources.blog.blog_59'),
            'how-to-do-a-background-verification-check-on-someone-a-complete-guide' => view('UATWEB.partials.resources.blog.blog_60'),
            'how-do-i-find-my-employment-history-for-free-a-complete-guide' => view('UATWEB.partials.resources.blog.blog_61'),
            'how-to-do-employee-background-verification-a-comprehensive-guide' => view('UATWEB.partials.resources.blog.blog_62'),
            'how-to-get-a-background-verification-check-a-comprehensive-guide' => view('UATWEB.partials.resources.blog.blog_63'),
            'how-much-does-a-background-verification-check-cost' => view('UATWEB.partials.resources.blog.blog_64'),
            'how-to-do-a-background-verification-check-on-yourself' => view('UATWEB.partials.resources.blog.blog_65'),
            'does-a-background-verification-check-show-employment-history-everything-you-need-to-know' => view('UATWEB.partials.resources.blog.blog_66'),
            'a-comprehensive-guide-to-self-background-verification-check-for-job-seekers' => view('UATWEB.partials.resources.blog.blog_67'),
            'why-is-my-background-verification-check-taking-so-long' => view('UATWEB.partials.resources.blog.blog_68'),
            'what-do-employers-look-for-in-a-background-verification-check-essential-factors-every-employer-must-know' => view('UATWEB.partials.resources.blog.blog_69'),
            'what-is-a-background-verification-check-for-a-job' => view('UATWEB.partials.resources.blog.blog_70'),
            'whats-a-background-verification-check-a-comprehensive-guide-for-employers' => view('UATWEB.partials.resources.blog.blog_71'),
            'what-comes-up-on-a-background-verification-check-for-a-job' => view('UATWEB.partials.resources.blog.blog_72'),
            'comprehensive-guide-to-employer-background-verification-check-why-its-essential-for-your-business' => view('UATWEB.partials.resources.blog.blog_73'),
            'how-to-run-a-background-verification-check-on-yourself-for-free' => view('UATWEB.partials.resources.blog.blog_74'),
            'why-conducting-a-criminal-background-verification-check-for-employment-is-crucial-for-every-business' => view('UATWEB.partials.resources.blog.blog_75'),
            'how-do-background-verification-checks-work-a-complete-guide-for-employers' => view('UATWEB.partials.resources.blog.blog_76'),
            'how-to-do-a-background-verification-check-a-complete-guide-for-employers' => view('UATWEB.partials.resources.blog.blog_77'),
            'how-to-run-a-background-verification-check-on-someone-for-free' => view('UATWEB.partials.resources.blog.blog_78'),
            'what-does-consider-mean-on-a-background-verification-check' => view('UATWEB.partials.resources.blog.blog_79'),
            'how-to-check-criminal-record-by-name-a-comprehensive-guide' => view('UATWEB.partials.resources.blog.blog_80'),
            'the-importance-of-background-verification-jobs-in-todays-hiring-process' => view('UATWEB.partials.resources.blog.blog_81'),
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

        return view("UATWEB.pages.resources.newsletter", [
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
            return view('UATWEB.partials.resources.newsletter.newsletter_1', [
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

        return view("UATWEB.pages.resources.industry", [
            "industryItems" => $industryItemsPaginated,
        ]);
    }

    public function industryItem($title) {
        if ($title === 'background-verification-service-in-asia') {
            return view('UATWEB.partials.resources.industry.industry_1');
        } else {
            return back();
        }
    }

    public function webinar()
    {
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

        $jsonFilePath = resource_path('json/UATWEB/resources/webinarItems.json');
        $jsonContent = File::get($jsonFilePath);
        
        $webinarItems = json_decode($jsonContent, true);

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

        return view("UATWEB.pages.resources.webinar", [
            "webinarItems" => $webinarItemsPaginated,
            "webinarVideosItems" => $webinarVideosItems,
            "eventVideosItems" => $eventVideosItems,
            "companyVideosItems" => $companyVideosItems,
        ]);
    }

    public function webinarItem($title) {
        return match ($title) {
            'singtel-learning-fiesta' => view('UATWEB.partials.resources.webinar.webinar_1'),
            'singapore-human-resources-institute' => view('UATWEB.partials.resources.webinar.webinar_2'),
            'crown-international-effective-talent-recruitment-and-retention-strategies' => view('UATWEB.partials.resources.webinar.webinar_3'),
            'singapore-hr-congress-sieving-out-right-and-safe-multi-generational-talents' => view('UATWEB.partials.resources.webinar.webinar_4'),
            'webinar-safeguarding-and-child-protection-part-1' => view('UATWEB.partials.resources.webinar.webinar_5'),
            'recruitment-masterclass-employer-branding-candidate-engagement-and-background-screening-during-covid-19' => view('UATWEB.partials.resources.webinar.webinar_6'),
            'webinar-know-who-you-hire' => view('UATWEB.partials.resources.webinar.webinar_7'),
            'webinar-safeguarding-and-child-protection-part-2' => view('UATWEB.partials.resources.webinar.webinar_8'),
            'webinar-safeguarding-and-child-protection-part-3' => view('UATWEB.partials.resources.webinar.webinar_9'),
            'special-apac-covid-19-webinar-panel-discussion' => view('UATWEB.partials.resources.webinar.webinar_10'),
            'webinar-safeguarding-and-child-protection-part-4' => view('UATWEB.partials.resources.webinar.webinar_11'),
            'ihrp-tech-talk-series-leveraging-hr-tech-to-create-best-in-class-candidate-experience' => view('UATWEB.partials.resources.webinar.webinar_12'),
            'caribbean-webinar-how-and-why-to-hire-the-best-background-check-company' => view('UATWEB.partials.resources.webinar.webinar_13'),
            'joint-webinar-the-4th-industrial-revolution-how-to-adapt-your-business-to-the-inevitable-digital-transformation' => view('UATWEB.partials.resources.webinar.webinar_14'),
            'panel-discussion-talent-acquisition-and-engagement-challenges-amidst-the-pandemic' => view('UATWEB.partials.resources.webinar.webinar_15'),
            'avvanz-at-singapore-fintech-festival-2020-7-11-dec' => view('UATWEB.partials.resources.webinar.webinar_16'),
            'digital-transformation-for-the-maritime-industry-demystifying-the-process' => view('UATWEB.partials.resources.webinar.webinar_17'),
            'quickiebinar-part-1-how-avvanz-weathered-covid-19' => view('UATWEB.partials.resources.webinar.webinar_18'),
            'avvanz-techstival-7-april' => view('UATWEB.partials.resources.webinar.webinar_19'),
            'managing-your-employee-lifecycle-from-background-screening-to-onboarding-to-learning' => view('UATWEB.partials.resources.webinar.webinar_20'),
            'education-industry-overcoming-leadership-and-hr-challenges' => view('UATWEB.partials.resources.webinar.webinar_21'),
            'achieving-60-hiring-roi-through-ai-and-background-screening' => view('UATWEB.partials.resources.webinar.webinar_22'),
            'leadership-in-education-in-what-areas-schools-can-leverage-disruptive-technologies' => view('UATWEB.partials.resources.webinar.webinar_23'),
            'avvanz-webcafe-monetary-authority-of-singapore-mas-mandatory-reference-checks' => view('UATWEB.partials.resources.webinar.webinar_24'),
            'avvanz-webcafe-the-great-resignation-vs-the-great-retention' => view('UATWEB.partials.resources.webinar.webinar_25'),
            'avvanz-techstival-2023-philippine-edition' => view('UATWEB.partials.resources.webinar.webinar_26'),
            'quickiebinar-part-1-leadership-with-zubin-zack' => view('UATWEB.partials.resources.webinar.webinar_27'),
            'quickiebinar-part-2-leadership-with-ariya-chittasy' => view('UATWEB.partials.resources.webinar.webinar_28'),
            default => back(),
        };
    }

    public function press()
    {
        $jsonFilePath = resource_path('json/UATWEB/resources/pressItems.json');
        $jsonContent = File::get($jsonFilePath);
        
        $pressItems = json_decode($jsonContent, true);

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

        return view("UATWEB.pages.resources.press", [
            "pressItems" => $pressItemsPaginated,
        ]);
    }

    public function pressItem($title) {
        if ($title === 'drug-testing-and-health-screening') {
            return view('UATWEB.partials.resources.press.press_1');
        } elseif ($title === 'avvanz-partners-epic-concepts') {
            return view('UATWEB.partials.resources.press.press_2');
        } elseif ($title === 'view-from-the-top-how-to-build-a-stronger-business-magnet') {
            return view('UATWEB.partials.resources.press.press_3');
        } elseif ($title === 'view-from-the-top-no-room-for-complacency') {
            return view('UATWEB.partials.resources.press.press_4');
        } elseif ($title === 'view-from-the-top-disparity-between-the-stock-markets-and-the-economy') {
            return view('UATWEB.partials.resources.press.press_5');
        } elseif ($title === 'view-from-the-top-emerging-stronger-from-the-storm') {
            return view('UATWEB.partials.resources.press.press_6');
        }  elseif ($title === 'avvanz-becomes-fintech-certified') {
            return view('UATWEB.partials.resources.press.press_7');
        } elseif ($title === 'view-from-the-top-rediscovering-singapore') {
            return view('UATWEB.partials.resources.press.press_8');
        } elseif ($title === 'more-detailed-background-checks-needed-before-hiring') {
            return view('UATWEB.partials.resources.press.press_9');
        } elseif ($title === 'view-from-the-top-responsible-retrenchment') {
            return view('UATWEB.partials.resources.press.press_10');
        } elseif ($title === 'view-from-the-top-incentive-or-disincentive') {
            return view('UATWEB.partials.resources.press.press_11');
        } elseif ($title === 'view-from-the-top-a-special-exception') {
            return view('UATWEB.partials.resources.press.press_12');
        } elseif ($title === 'avvanz-partners-aci-to-enter-the-caribbean-region') {
            return view('UATWEB.partials.resources.press.press_13');
        } elseif ($title === 'gearing-up-for-the-unexpected-what-has-changed-for-your-business-this-year') {
            return view('UATWEB.partials.resources.press.press_14');
        } elseif ($title === 'moving-up-the-value-chain') {
            return view('UATWEB.partials.resources.press.press_15');
        } elseif ($title === 'gear-up-for-a-digital-future') {
            return view('UATWEB.partials.resources.press.press_16');
        } elseif ($title === 'why-firms-fall-prey-to-dishonest-job-seekers') {
            return view('UATWEB.partials.resources.press.press_17');
        } elseif ($title === 'gender-parity-more-than-workplace-flexibility-required') {
            return view('UATWEB.partials.resources.press.press_18');
        } elseif ($title === 'avvanz-has-been-chosen-and-appointed-by-the-ministry-of-manpower-mom-work-pass-division-as-an-approved-global-background-screening-company') {
            return view('UATWEB.partials.resources.press.press_19');
        } elseif ($title === 'avvanz-partners-acca-singapore') {
            return view('UATWEB.partials.resources.press.press_20');
        } elseif ($title === 'ensuring-that-shareholders-are-heard') {
            return view('UATWEB.partials.resources.press.press_21');
        } elseif ($title === 'continuous-monitoring-in-healthcare-employees-can-save-more-lives') {
            return view('UATWEB.partials.resources.press.press_22');
        } elseif ($title === 'affinidi-and-avvanz-sign-mou-to-streamline-employment-background-checks-in-singapore') {
            return view('UATWEB.partials.resources.press.press_23');
        } elseif ($title === 'applicants-for-a-new-employment-pass-must-have-academic-qualifications-from-september') {
            return view('UATWEB.partials.resources.press.press_24');
        } elseif ($title === 'golf-club-managers-to-meet-over-money-laundering-concerns-amid-s1-billion-probe') {
            return view('UATWEB.partials.resources.press.press_25');
        } elseif ($title === 'cna-explains-how-does-singapore-screen-adults-who-work-with-kids') {
            return view('UATWEB.partials.resources.press.press_26');
        } elseif ($title === 'avvanz-announces-partnership-with-dauntless-technology-solutions') {
            return view('UATWEB.partials.resources.press.press_27');
        } elseif ($title === 'more-companies-doing-background-checks-for-employment-pass-applicants') {
            return view('UATWEB.partials.resources.press.press_28');
        } elseif ($title === 'avvanz-pte-ltd-expands-its-global-reach-with-new-office-opening-in-bengaluru-india') {
            return view('UATWEB.partials.resources.press.press_29');
        } elseif ($title === 'avvanz-tackles-employee-screening-challenges-affordable-compliant-and-comprehensive-background-checks-now-available-in-india') {
            return view('UATWEB.partials.resources.press.press_30');
        } else {
            return back();
        }
    }
}

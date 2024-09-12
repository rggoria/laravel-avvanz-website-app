<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenController extends Controller
{
    public function index()
    {
        return view('pages.screen.index');
    }

    public function backgroundScreening()
    {
        return view('pages.screen.backgroundScreening');
    }

    public function avvanzScreen()
    {
        return view('pages.screen.avvanzScreen');
    }
    public function backgroundCheck()
    {
        $dueDiligenceItems = [
            [
                'icon' => 'fa-film',
                'title' => 'Adverse Media Check',
                'description' => 'We deliver negative media insights from thousands of global sources, spanning back to the early 1900s. Its not just about names, its about behavior.'
            ],[
                'icon' => 'fa-globe',
                'title' => 'Global Watchlist and Sanctions',
                'description' => 'Elevate global compliance with our thorough due diligence solution. Screen 45+ regulatory bodies, 1600+ Watch Lists, covering AML, KYC, terrorism, and corruption.'
            ],[
                'icon' => 'fa-newspaper',
                'title' => 'Office of Foreign Assets Control',
                'description' => 'Stay compliant, mitigate risk. We monitor OFAC\'s list to prevent hiring threats to national security or engaging in illicit activities.'
            ],[
                'icon' => 'fa-desktop',
                'title' => 'Social Media Screening',
                'description' => 'Peace of mind through thorough online vetting. We ensure safety and compliance without compromising privacy.'
            ],[
                'icon' => 'fa-lock',
                'title' => 'Sex Offenderd Registry',
                'description' => 'Ensure safety with thorough checks for any history of sexual violations.'
            ],[
                'icon' => 'fa-times',
                'title' => 'Criminal or Criminality Check',
                'description' => 'Ensure safety with thorough checks for any history of sexual violations.'
            ],[
                'icon' => 'fa-check-double',
                'title' => 'Civil Litigation Check',
                'description' => 'Scouring through commercial and civil court sources for a comprehensive background check wherever the subject has been.'
            ],[
                'icon' => 'fa-user-check',
                'title' => 'Conflict of Interest/ Directorship',
                'description' => 'Discover past and present directorships while uncovering any disqualifications.'
            ],[
                'icon' => 'fa-hospital',
                'title' => 'Drug Testing',
                'description' => 'Empower drug testing panels for thorough subject assessments.'
            ],
        ];
        $identityCheck = [
            [
                'icon' => 'fa-id-card-alt',
                'title' => 'Identity Check - ID Validation',
                'description' => 'We verify documents from official sources, including governmental agencies and embassies, across 200+ countries.'
            ],[
                'icon' => 'fa-globe',
                'title' => 'Identity Check - Passport MRZ',
                'description' => 'This check determines the validity of a passport\'s machine readable zone (MRZ) code.'
            ],[
                'icon' => 'fa-address-book',
                'title' => 'Address Check',
                'description' => 'This check will validate if the poof of residency or addresses provided by the candidate is verified true.'
            ],[
                'icon' => 'fa-file-signature',
                'title' => 'Legal Right to Work',
                'description' => 'This check verifies the legality of the subject to work in the particular country.'
            ],[
                'icon' => 'fa-id-card',
                'title' => 'Driving License',
                'description' => 'This check will verify if the Driving License is valid.'
            ],
        ];
        $financialCheck = [
            [
                'icon' => 'fa-credit-card ',
                'title' => 'Credit Check',
                'description' => 'Offers information about Subject\'s borrowing history and financial indebtedness. May also include payment defaults or delinquencies.'
            ],[
                'icon' => 'fa-file-invoice-dollar',
                'title' => 'Financial Regulatory Check',
                'description' => 'Verify regulatory compliance for subjects: Screening for disqualifications and disciplinary actions.'
            ],[
                'icon' => 'fa-money-check-alt',
                'title' => 'Bankruptcy Check',
                'description' => 'Bankruptcy Check is to check if Subject is declared bankrupt and recorded with insolvency or is facing a bankrupt petition.'
            ],
        ];
        $integrityCheck = [
            [
                'icon' => 'fa-graduation-cap',
                'title' => 'Education Verification',
                'description' => 'We verify attendance, graduation, and certification. If no centralized databases, agents may visit for a fee.'
            ],[
                'icon' => 'fa-university',
                'title' => 'Institution Accreditation Check',
                'description' => 'We ensure educational quality through accreditation checks. Accredited degrees are esteemed, so it\'s crucial to verify institution status to steer clear of diploma mills.'
            ], [
                'icon' => 'fa-file-alt ',
                'title' => 'Professional Qualifications/ Memberships',
                'description' => 'We validate the dates, levels, and authenticity of professional certifications/licenses, as well as details regarding trade memberships.'
            ],[
                'icon' => 'fa-users',
                'title' => 'Employment Details Verification with HR',
                'description' => 'We verify key details including dates, positions, responsibilities, reasons for leaving, and rehire eligibility.'
            ],[
                'icon' => 'fa-briefcase',
                'title' => 'Employment Performance Check with Supervisor/ HR',
                'description' => 'Thorough interviews with supervisors evaluate performance and behavior against KPIs'
            ],[
                'icon' => 'fa-paste',
                'title' => 'Resume or CV Comparison Check',
                'description' => 'This check verifies the candidate\'s resume against the information provided in the application form or the Candidate Data page on the ScreenGlobal platform.'
            ],
        ];
        return view('pages.screen.backgroundCheck',[
            'dueDiligenceItems'=> $dueDiligenceItems,
            'identityCheck' => $identityCheck,
            'financialCheck'=> $financialCheck,
            'integrityCheck'=> $integrityCheck
        ]);
    }

    public function avvanzSreenGlobal()
    {
        return view('pages.screen.avvanzSreenGlobal');
    }

    public function process()
    {
        return view('pages.screen.process');
    }

    public function kyc()
    {
        return view('pages.screen.kyc');
    }

    public function screenChain()
    {
        return view('pages.screen.screenChain');
    }

    public function singaporeWork()
    {
        return view('pages.screen.singaporeWork');
    }

    public function companyDue()
    {
        $dueDiligenceItems = [
            'Potential business partners',
            'Potential Joint-Venture, Merger or Acquisition companies',
            'Vendors or Sub-Contractors',
            'Investment targets – Pre-investment and Post-investment due diligence',
            'Investors or Funding companies',
            'Customers (KYC – Know Your Customer)',
            'Channel partners including distributors, resellers, and sales agents'
        ];
        $notExhaustiveItems = [
            'Non-compliance with anti-money laundering',
            'Fraud, embezzlement and financial irregularities',
            'Corrupt and inhumane business practices including the Foreign Corrupt Practices Act, OECD Anti-Bribery Convention, and Bribery Act',
            'Undesirable liabilities',
            'Hidden political links',
            'Terrorism links',
            'Counterfeiting and Intellectual Property Infringement',
            'Conflicts of interest',
            'Analysis of business relationships'
        ];
        $companyDiligenceItems = [
            [
                'title' => 'Mitigating risks',
                'description' => 'Conducting CDD can help companies identify potential risks associated with a particular business opportunity, such as legal, financial, or reputational risks. This information can help companies make informed decisions about whether to pursue the opportunity and how to mitigate any identified risks.'
            ],
            [
                'title' => 'Protecting investments',
                'description' => 'CDD can help companies ensure that they are making a sound investment by verifying the accuracy of the information provided by the target company, assessing the target company’s financial health and stability, and evaluating the target company’s management team and overall business strategy.'
            ],
            [
                'title' => 'Meeting regulatory requirements',
                'description' => 'In some cases, companies may be required by law to conduct due diligence on potential business partners, vendors, or suppliers to ensure compliance with regulatory requirements.'
            ],
            [
                'title' => 'Maintaining reputation',
                'description' => 'Conducting CDD can help companies protect their reputation by identifying any potential issues with the target company’s ethical practices, environmental impact, or other factors that could reflect poorly on the company.'
            ],
        ];
        $avvanzHelpItems = [
            [
                'title' => 'Define the scope',
                'description' => 'The first step in conducting CDD is to define the scope of the investigation. This includes identifying the areas of the target company’s operations that require examination, such as financial performance, legal standing, regulatory compliance, and reputation.'
            ],
            [
                'title' => 'Collect information',
                'description' => 'Avvanz can use a variety of sources to collect information about the target company, such as public records, financial reports, regulatory filings, news articles, and industry reports. We may also conduct interviews with key stakeholders, including executives, employees, customers, and suppliers.'
            ],
            [
                'title' => 'Analyze the information',
                'description' => 'Once the information is collected, Avvanz can analyze the data to identify any potential risks or issues associated with the target company. They may use a variety of tools and techniques to conduct their analysis, such as financial modeling, risk assessment, and benchmarking.'
            ],
            [
                'title' => 'Prepare a report',
                'description' => 'The results of the investigation are then compiled into a report, which may include an executive summary, detailed findings, and recommendations for action. The report is typically presented to the client, who can use the information to make informed decisions about the potential business transaction.'
            ],
        ];
        return view('pages.screen.companyDue', [
            'dueDiligenceItems' => $dueDiligenceItems,
            'notExhaustiveItems' => $notExhaustiveItems,
            'companyDiligenceItems' => $companyDiligenceItems,
            'avvanzHelpItems' => $avvanzHelpItems
        ]);
    }
    
    public function partnership() {
        $trustedPartnerItems = [
            'partner1.png',
            'partner2.png',
            'partner3.png',
            'partner4.png',
            'partner5.png',
            'partner6.png',
            'partner7.png',
            'partner8.png',
        ];
        $partnerAchievementItems = [
            [
                'title' => 'OneID and Avvanz Partnership: Revolutionizing Digital Identity Verification for Enhanced Security',
                'image' => 'achievement1.png',
                'created_at' => 'June 8, 2023',
                'link' => 'https://www.avvanz.com/oneid-and-avvanz-partnership-revolutionizing-digital-identity-verification-for-enhanced-security/',
            ],
            [
                'title' => 'Integrating Background Screening with your HRMS/ATS',
                'image' => 'achievement2.jpg',
                'created_at' => 'May 2, 2023',
                'link' => 'https://www.avvanz.com/integrating-background-screening-with-your-hrms-ats/',
            ],[
                'title' => 'Affinidi and Avvanz Sign MOU to Streamline Employment Background Checks in Singapore',
                'image' => 'achievement3.jpg',
                'created_at' => 'August 5, 2022',
                'link' => 'https://www.avvanz.com/affinidi-and-avvanz-sign-mou-to-streamline-employment-background-checks-in-singapore/',
            ],
        ];
        return view('pages.screen.partnership', [
            'trustedPartnerItems'=> $trustedPartnerItems,
            'partnerAchievementItems'=> $partnerAchievementItems,
        ]);
    }
}

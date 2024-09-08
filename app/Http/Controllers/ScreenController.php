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
        return view('pages.screen.backgroundCheck');
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
                'image' => 'xZX.png',
                'created_at' => 'June 8, 2023'
            ],
            [
                'title' => 'Integrating Background Screening with your HRMS/ATS',
                'image' => 'pexels-yan-krukau-7693107-scaled.jpg',
                'created_at' => 'May 2, 2023'
            ],[
                'title' => 'Affinidi and Avvanz Sign MOU to Streamline Employment Background Checks in Singapore',
                'image' => 'Affinidi.jpg',
                'created_at' => 'August 5, 2022'
            ],
        ];
        return view('pages.screen.partnership', [
            'trustedPartnerItems'=> $trustedPartnerItems,
            'partnerAchievementItems'=> $partnerAchievementItems,
        ]);
    }
}

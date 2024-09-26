<?php

namespace App\Http\Controllers;

use App\Mail\LearnGlobalEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DevelopController extends Controller
{
    public function index()
    {
        $trainingItems = [
            [
                'title' => 'Leadership',
                'description' => 'This program is meticulously designed to empower you with the tools, insights and confidence needed to lead effectively, inspire change and drive success.',
                'icon' => 'fa-user-tie',
                'link' => 'https://www.avvanz.com/leadership/',
            ], [
                'title' => 'Sales',
                'description' => 'This Progam is designed to transform you into a top-tier sales professional, equipped with the tools and strategies to excel in today’s dynamic sales environment.',
                'icon' => 'fa-chart-bar',
                'link' => 'https://www.avvanz.com/sales/',
            ], [
                'title' => 'Digital Transformation & Critical Skills for Digital Economy',
                'description' => 'This Program is designed to equip professionals and leaders with the knowledge and skills to drive digital innovation and leverage cutting-edge technologies in their organizations.',
                'icon' => 'fa-digital-ocean',
                'link' => 'https://www.avvanz.com/digital-transformation',
            ],
        ];
        $programItems = [
            'eLearning',
            'Face-To-Face Trainings',
            'Blended Training',
            '1:1 or Group Coaching and Mentoring solutions',
        ];
        $methodologyAchievementItems = [
            [
                'title' => 'LEARNGLOBAL',
                'description' => 'An integrated platform for complete Learning and Development without needing multiple investments in various platforms and solutions.',
                'image' => 'methodology1.webp',
                'link' => 'https://www.avvanz.com/learnglobal/',
            ], [
                'title' => 'STAR TRAINERS',
                'description' => 'Highly experienced business leaders who have global training experience.',
                'image' => 'methodology2.webp',
                'link' => 'https://www.avvanz.com/star-trainers/',
            ], [
                'title' => 'NIBBLE & LEARN',
                'description' => 'Short, quick, and effective Nibble-n-Learn format courses.',
                'image' => 'methodology3.webp',
                'link' => 'https://www.avvanz.com/free-courses/?playlist=09d1fc2&video=5a205ec',
            ],
        ];
        $methodologyItems = [
            'Both off-the-shelf and customized Digital Learning programs are available.',
            'Flipped Classroom – Learners watch and learn online at their own pace and time.',
            'Customized instructor-led content to complement the online programs and bridge the theory and practice effectively.',
            'Long-term access to online media that Learners can re-visit and revise concepts for application.',
            'Micro-learning Kits pushed out through mobile platforms',
        ];

        return view("pages.develop.index", [
            'trainingItems' => $trainingItems,
            'programItems' => $programItems,
            'methodologyAchievementItems' => $methodologyAchievementItems,
            'methodologyItems' => $methodologyItems, 
        ]);
    }

    public function trainingItems($title) {
        if ($title === 'leadership') {
            $leadershipItems = [
                [
                    'title' => 'Compehensive Curriculum',
                    'image' => 'leadership1.webp',
                    'description' => 'From mastering self-leadership to steering entire organizations, our programs cover every aspect of leadership. Each program builds on the previous one, providing a holistic development experience.',
                ], [
                    'title' => 'Expert Facilitators',
                    'image' => 'leadership2.webp',
                    'description' => 'Learn from seasoned leaders and industry practitioners who bring real-world experience. Our facilitators are dedicated to your growth and success.',
                ], [
                    'title' => 'Interactive Learning',
                    'image' => 'leadership3.webp',
                    'description' => 'Engage in immersive workshops, case studies, and group discussions that foster practical learning and collaboration. Our programs are designed to be dynamic and interactive, ensuring you can apply what you learn immediately.',
                ], [
                    'title' => 'Personalized Growth',
                    'image' => 'leadership4.webp',
                    'description' => 'We believe in the unique potential of every leader. Our programs offer personalized assessment, coaching, and feedback to help you identify your strengths and areas for growth.',
                ], [
                    'title' => 'Network of Leaders',
                    'image' => 'leadership5.webp',
                    'description' => 'Join a community of ambitious professionals and aspiring leaders. Expand your network, share experiences, and learn from the diverse perspectives of your peers.',
                ], 
            ];
            return view('partials.training_1', [
                'leadershipItems'=> $leadershipItems,
            ]);
        } elseif ($title === 'sales') {
            return view('partials.partnership_integration_2');
        } elseif ($title === 'digital-transformation-critical-skills-for-digital-economy') {
            return view('partials.partnership_integration_3');
        } else {
            return back();
        }
    }

    public function star()
    {
        return view("pages.develop.star");
    }

    public function learnGlobal()
    {
        $learnglobalItems = [
            [
                'title' => 'Impactful Communications',
                'image' => 'learnglobal1.webp'
            ], [
                'title' => 'Multiply Your Time',
                'image' => 'learnglobal2.webp'
            ], [
                'title' => 'Manage Your Stakeholders',
                'image' => 'learnglobal3.webp'
            ], [
                'title' => 'Advanced Negotiation Skills',
                'image' => 'learnglobal4.webp'
            ], [
                'title' => 'Multi-dimensional Thinking',
                'image' => 'learnglobal5.webp'
            ], [
                'title' => 'Industry 4.0',
                'image' => 'learnglobal6.webp'
            ], [
                'title' => 'Problem Solving Techniques',
                'image' => 'learnglobal7.webp'
            ], [
                'title' => 'Onboarding New Employees for Success',
                'image' => 'learnglobal8.webp'
            ], [
                'title' => 'Apply Sports in Business',
                'image' => 'learnglobal9.webp'
            ], [
                'title' => 'Profiency in Email Writing',
                'image' => 'learnglobal10.webp'
            ], [
                'title' => 'Leading Hybrid Teams',
                'image' => 'learnglobal11.webp'
            ], [
                'title' => 'Holding Effective Meetings',
                'image' => 'learnglobal12.webp'
            ], [
                'title' => 'Engage and Retain Talents',
                'image' => 'learnglobal13.webp'
            ], [
                'title' => 'Conflict Resolution',
                'image' => 'learnglobal14.webp'
            ], [
                'title' => 'Emotional Intelligence at the Workplace',
                'image' => 'learnglobal15.webp'
            ], [
                'title' => 'Corporate Governance',
                'image' => 'learnglobal16.webp'
            ], [
                'title' => 'Developing Your Personal Image',
                'image' => 'learnglobal17.webp'
            ], [
                'title' => 'Customer-Focused Client Services',
                'image' => 'learnglobal18.webp'
            ], [
                'title' => 'Management 101',
                'image' => 'learnglobal19.webp'
            ], [
                'title' => 'Developing Your Adaptability Quotient',
                'image' => 'learnglobal20.webp'
            ], [
                'title' => 'Mental Health and Work-Life Integration',
                'image' => 'learnglobal21.webp'
            ], [
                'title' => 'Coaching and Mentoring Excellence',
                'image' => 'learnglobal22.webp'
            ], [
                'title' => 'Present with Impact',
                'image' => 'learnglobal23.webp'
            ],
        ];
        $totalCount = count($learnglobalItems);
        return view("pages.develop.learnGlobal", [
            'learnglobalItems' => $learnglobalItems,
            'totalCount' => $totalCount,
        ]);
    }

    public function loadMoreItems(Request $request)
    {
        $offset = $request->input('offset', 0);
        $limit = 6;

        $learnglobalItems = [
            [
                'title' => 'Impactful Communications',
                'image' => 'learnglobal1.webp'
            ], [
                'title' => 'Multiply Your Time',
                'image' => 'learnglobal2.webp'
            ], [
                'title' => 'Manage Your Stakeholders',
                'image' => 'learnglobal3.webp'
            ], [
                'title' => 'Advanced Negotiation Skills',
                'image' => 'learnglobal4.webp'
            ], [
                'title' => 'Multi-dimensional Thinking',
                'image' => 'learnglobal5.webp'
            ], [
                'title' => 'Industry 4.0',
                'image' => 'learnglobal6.webp'
            ], [
                'title' => 'Problem Solving Techniques',
                'image' => 'learnglobal7.webp'
            ], [
                'title' => 'Onboarding New Employees for Success',
                'image' => 'learnglobal8.webp'
            ], [
                'title' => 'Apply Sports in Business',
                'image' => 'learnglobal9.webp'
            ], [
                'title' => 'Profiency in Email Writing',
                'image' => 'learnglobal10.webp'
            ], [
                'title' => 'Leading Hybrid Teams',
                'image' => 'learnglobal11.webp'
            ], [
                'title' => 'Holding Effective Meetings',
                'image' => 'learnglobal12.webp'
            ], [
                'title' => 'Engage and Retain Talents',
                'image' => 'learnglobal13.webp'
            ], [
                'title' => 'Conflict Resolution',
                'image' => 'learnglobal14.webp'
            ], [
                'title' => 'Emotional Intelligence at the Workplace',
                'image' => 'learnglobal15.webp'
            ], [
                'title' => 'Corporate Governance',
                'image' => 'learnglobal16.webp'
            ], [
                'title' => 'Developing Your Personal Image',
                'image' => 'learnglobal17.webp'
            ], [
                'title' => 'Customer-Focused Client Services',
                'image' => 'learnglobal18.webp'
            ], [
                'title' => 'Management 101',
                'image' => 'learnglobal19.webp'
            ], [
                'title' => 'Developing Your Adaptability Quotient',
                'image' => 'learnglobal20.webp'
            ], [
                'title' => 'Mental Health and Work-Life Integration',
                'image' => 'learnglobal21.webp'
            ], [
                'title' => 'Coaching and Mentoring Excellence',
                'image' => 'learnglobal22.webp'
            ], [
                'title' => 'Present with Impact',
                'image' => 'learnglobal23.webp'
            ],
        ];
        $itemsToLoad = array_slice($learnglobalItems, $offset, $limit);
        return response()->json($itemsToLoad);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to($request->email)
            ->cc(env('ADMIN_EMAIL'))
            ->send(new LearnGlobalEmail($request->all()));

        return response()->json(['success' => 'Email sent successfully!']);
    }

    public function nibble()
    {
        $nibbleItems = [
            [
                'title' => 'Digital Transformation Quick Starter Blueprint',
                'code' => 'zlyAWt_UMAU',
                'duration' => '32:29',
            ], [
                'title' => 'NLP Success Mindset',
                'code' => '5aBki-Dqf40',
                'duration' => '44:21',
            ],[
                'title' => 'Nomadic Mindset To Beat Stress',
                'code' => '1XoW0l25gyE',
                'duration' => '10:00:55',
            ],
        ];
        return view("pages.develop.nibble", [
            "nibbleItems"=> $nibbleItems,
        ]);
    }
}

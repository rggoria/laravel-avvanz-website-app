<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            ],
        ];
        return view("pages.develop.learnGlobal", [
            'learnglobalItems' => $learnglobalItems,
        ]);
    }

    public function nibble()
    {
        return view("pages.develop.nibble");
    }
}

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
                'icon' => 'fa-user-circle'
            ], [
                'title' => 'Sales',
                'description' => 'This Progam is designed to transform you into a top-tier sales professional, equipped with the tools and strategies to excel in today’s dynamic sales environment.',
                'icon' => 'fa-home'
            ], [
                'title' => 'Digital Transformation & Critical Skills for Digital Economy',
                'description' => 'This Program is designed to equip professionals and leaders with the knowledge and skills to drive digital innovation and leverage cutting-edge technologies in their organizations.',
                'icon' => 'fa-circle'
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
                'image' => 'upload01.png'
            ], [
                'title' => 'STAR TRAINERS',
                'description' => 'Highly experienced business leaders who have global training experience.',
                'image' => 'upload02.png'
            ], [
                'title' => 'NIBBLE & LEARN',
                'description' => 'Short, quick, and effective Nibble-n-Learn format courses.',
                'image' => 'upload03.png'
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
                'image' => 'learnglobal1.jpg'
            ], [
                'title' => 'Multiply Your Time',
                'image' => 'learnglobal2.jpg'
            ], [
                'title' => 'Manage Your Stakeholders',
                'image' => 'learnglobal3.jpg'
            ], [
                'title' => 'Advanced Negotiation Skills',
                'image' => 'learnglobal4.jpg'
            ], [
                'title' => 'Multi-dimensional Thinking',
                'image' => 'learnglobal5.jpg'
            ], [
                'title' => 'Industry 4.0',
                'image' => 'learnglobal6.jpg'
            ], [
                'title' => 'Problem Solving Techniques',
                'image' => 'learnglobal7.jpg'
            ], [
                'title' => 'Onboarding New Employees for Success',
                'image' => 'learnglobal8.jpg'
            ], [
                'title' => 'Apply Sports in Business',
                'image' => 'learnglobal9.jpg'
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

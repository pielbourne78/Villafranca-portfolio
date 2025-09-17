<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'Carl Villafranca',
            'title' => 'Web Developer',
            'location' => 'Metro Manila, Philippines',
            'bio' => 'Passionate web developer',
            'profile_image' => 'images/pfp.jpg',
            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [
                [
                    'name' => 'icons',
                    'description' => 'This is for the fontawesome icons and bootsrap format',
                    'image' => 'images/icons.jpg',
                    'github_url' => 'https://github.com/pielbourne78/icons.git',
                    'demo_url' => 'https://pielbourne78.github.io/icons/', // Corrected key
                ],
                [
                    'name' => 'calendar',
                    'description' => 'webpage calendar',
                    'image' => 'images/calendar.png',
                    'github_url' => 'https://github.com/pielbourne78/calendar.git',
                    'demo_url' => 'https://pielbourne78.github.io/calendar/', // Corrected key
                ],
                [
                    'name' => 'prototype shop',
                    'description' => 'html prototype shop',
                    'image' => 'images/prototype.png',
                    'github_url' => 'https://github.com/pielbourne78/carl.git',
                    'demo_url' => 'https://pielbourne78.github.io/carl/', // Corrected key
                ],
            ],

            // Experience data: structured as an array of associative arrays
            'experience' => [
                [
                    'profession' => 'Mechanic helper',
                    'date' => '2021-2023',
                ],
                [
                    'profession' => 'NC1 Welder',
                    'date' => '2023-2024',
                ]
            ],

            // Education data: structured as an array of associative arrays
            'education' => [
                [
                    'school' => 'Kasarinlan Highschool',
                    'date' => '2016-2020',
                ],
                [
                    'school' => 'La Consolacion College Caloocan',
                    'date' => '2020-2022',
                ],
                [
                    'school' => 'Global Reciprocal Colleges',
                    'date' => '2024-2028',
                ]
            ],

            // Contacts and socials
            'contacts' => [
                'email' => 'carlvillafranca5@gmail.com',
                'phone' => '+6399427568072',
                'github' => 'https://github.com/pielbourne78',
                'facebook' => 'https://www.facebook.com/carl.angielo',
            ],
        ];

       return view('index', compact('portfolio'));

    }
}
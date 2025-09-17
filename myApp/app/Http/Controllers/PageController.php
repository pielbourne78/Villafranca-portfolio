<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
      public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Carl Villafranca',

            'title' => 'Web Developer',

            'email' => 'carlvillafranca5@gmail.com',

            'phone' => '+6399427568072',

            'location' => 'Metro Manila, Philippines',

            'bio' => 'Passionate web developer ',

            'profile_image' => 'https://via.placeholder.com/300x300?text=Your+Photo',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [...], // Experience data

            'education' => [...], // Education data

            'social_links' => [...] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}


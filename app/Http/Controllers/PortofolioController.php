<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang di Portofolio Saya',
            'subtitle' => 'Saya adalah seorang Web Developer yang passionate dalam menciptakan solusi digital',
            'features' => [
                [
                    'icon' => '💻',
                    'title' => 'Web Development',
                    'description' => 'Membangun website modern dan responsif dengan teknologi terkini'
                ],
                [
                    'icon' => '🎨',
                    'title' => 'UI/UX Design',
                    'description' => 'Mendesain antarmuka yang menarik dan user-friendly'
                ],
                [
                    'icon' => '📱',
                    'title' => 'Responsive Design',
                    'description' => 'Website yang tampil sempurna di semua perangkat'
                ]
            ]
        ];

        return view('home', $data);
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        $data = [
            'name' => 'John Doe',
            'title' => 'Full Stack Web Developer',
            'bio' => [
                'Saya adalah seorang Full Stack Web Developer dengan pengalaman 5+ tahun dalam mengembangkan aplikasi web yang scalable dan user-friendly.',
                'Saya passionate dalam menciptakan solusi digital yang tidak hanya fungsional, tetapi juga memberikan pengalaman pengguna yang luar biasa.',
                'Dengan keahlian di berbagai teknologi modern, saya siap membantu mewujudkan ide Anda menjadi kenyataan digital.'
            ],
            'skills' => [
                ['name' => 'Laravel', 'category' => 'PHP Framework'],
                ['name' => 'Vue.js', 'category' => 'JavaScript Framework'],
                ['name' => 'MySQL', 'category' => 'Database'],
                ['name' => 'HTML/CSS', 'category' => 'Frontend'],
                ['name' => 'Git', 'category' => 'Version Control'],
                ['name' => 'REST API', 'category' => 'Backend']
            ],
            'profile_image' => 'https://via.placeholder.com/250'
        ];

        return view('about', $data);
    }

    /**
     * Display the portfolio page.
     */
    public function portfolio()
    {
        $data = [
            'projects' => [
                [
                    'icon' => '🛒',
                    'title' => 'E-Commerce Platform',
                    'description' => 'Platform e-commerce lengkap dengan sistem pembayaran, manajemen produk, dan dashboard admin.',
                    'tags' => ['Laravel', 'MySQL', 'Vue.js'],
                    'link' => '#'
                ],
                [
                    'icon' => '📱',
                    'title' => 'Social Media App',
                    'description' => 'Aplikasi media sosial dengan fitur real-time chat, posting, dan notifikasi.',
                    'tags' => ['Laravel', 'WebSocket', 'Redis'],
                    'link' => '#'
                ],
                [
                    'icon' => '📊',
                    'title' => 'Dashboard Analytics',
                    'description' => 'Dashboard untuk monitoring dan analisis data bisnis dengan visualisasi interaktif.',
                    'tags' => ['Laravel', 'Chart.js', 'API'],
                    'link' => '#'
                ],
                [
                    'icon' => '🎓',
                    'title' => 'Learning Management System',
                    'description' => 'Platform pembelajaran online dengan fitur kursus, quiz, dan sertifikat.',
                    'tags' => ['Laravel', 'Tailwind', 'MySQL'],
                    'link' => '#'
                ],
                [
                    'icon' => '🏨',
                    'title' => 'Hotel Booking System',
                    'description' => 'Sistem reservasi hotel dengan integrasi pembayaran dan manajemen booking.',
                    'tags' => ['Laravel', 'Payment Gateway', 'Bootstrap'],
                    'link' => '#'
                ],
                [
                    'icon' => '📝',
                    'title' => 'Content Management System',
                    'description' => 'CMS custom untuk manajemen konten website dengan editor WYSIWYG.',
                    'tags' => ['Laravel', 'TinyMCE', 'SEO'],
                    'link' => '#'
                ]
            ]
        ];

        return view('portfolio', $data);
    }
}
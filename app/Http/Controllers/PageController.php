<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        if ($username === 'mirfada' && $password === 'mirfada16') {
            return redirect()->route('dashboard', ['username' => $username]);
        }
        return back()->withErrors(['login' => 'Username atau password salah']);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Silakan login dulu.']);
        }

        $products = [
            [
                'nama' => 'Bloomatte Perfect Cover Cushion',
                'stok' => 15,
                'kategori' => 'Face',
                'harga' => 'Rp. 119.920',
                'deskripsi' => 'BB Cushion pertama dengan skin care benefit yang memberikan hasil healthy looking skin.',
                'gambar' => 'https://medias.watsons.co.id/publishing/WTCID-42346-side-zoom.jpg?version=1732893024'
            ],
            [
                'nama' => 'Lily Makes Luminous Glow Tint',
                'stok' => 10,
                'kategori' => 'Lips',
                'harga' => 'Rp. 58.320',
                'deskripsi' => 'Glow tint dengan 8x efek melembapkan dan stain ringan bercahaya selama 12 jam untuk tampilan bibir sehat dan berkilau.',
                'gambar' => 'https://images.soco.id/acd0a3d4-c4b0-4585-996c-04cbdf9c94e8-image-0-1716262427326'
            ],
            [
                'nama' => 'Roll Volume Mascara',
                'stok' => 8,
                'kategori' => 'Eye',
                'harga' => 'Rp. 66.320',
                'deskripsi' => 'Volumizing maskara yang merawat dan memperkuat bulu mata supaya lebih lentik dan tebal.',
                'gambar' => 'https://nihonmart.id/pub/media/catalog/product/cache/8a3fa81d90974d9a7299f2eff309979f/r/o/roll_to_volume_mascara_-_black-min.png'
            ],
            [
                'nama' => 'Peach Makes Perfect Lip Tint',
                'stok' => 25,
                'kategori' => 'Lips',
                'harga' => 'Rp. 58.320',
                'deskripsi' => 'Lip tint beraroma buah persik bertekstur gel ringan untuk tampilan bibir yang segar dan lembap.',
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO1sgWjbbiuViQkWXP5GJgVYGFDqQ_jjvZ7A&s'
            ],
            [
                'nama' => 'Locklook Matte Setting Spray',
                'stok' => 20,
                'kategori' => 'Face',
                'harga' => 'Rp. 57.500',
                'deskripsi' => 'Matte Spray yang dapat mengunci makeup hingga 18 jam dengan efek tahan air, tahan keringat, tahan transfer, dan juga memberikan daya tahan minyak berlebih supaya tampilan makeup tetap halus.',
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuAq4M25lk2mW_umg29e3KpPgnHY0R1fFNlw&s'
            ],
            [
                'nama' => 'Berry Makes Comfort Lip Cream',
                'stok' => 50,
                'kategori' => 'Lips',
                'harga' => 'Rp. 28.600',
                'deskripsi' => 'Lip cream beraroma buah beri dengan hasil silky satin finish untuk bibir yang tampak penuh dan lembap.',
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs_2MAp0WHJl0rq0pfWpAYxdrSpUOpSlqoYQ&s'
            ],
            [
                'nama' => 'Korean Blommate Transferproof Matte Tint',
                'stok' => 30,
                'kategori' => 'Lips',
                'harga' => 'Rp. 58.320',
                'deskripsi' => 'Lip velvet bertekstur mousse dengan aroma buah ceri menyegarkan untuk bibir yang kenyal dan sehat.',
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhw4xYz-Az1gZGc81z2sKx09J2j2imvBvE9Q&s'
            ],
            [
                'nama' => 'Ceramoist Glow Lip Serum',
                'stok' => 27,
                'kategori' => 'Lips',
                'harga' => 'Rp. 55.900',
                'deskripsi' => 'Serum bibir yang diperkaya dengan vitamin E, untuk kelembapan yang tahan lama dan perawatan bibir kusam.',
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuNXg_x_gMpB_xqBnaxIi-LtVbRI009XFHUQ&s'
            ],
            [
                'nama' => 'Moist Mochi Paste Powder Blush',
                'stok' => 21,
                'kategori' => 'Face',
                'harga' => 'Rp. 67.900',
                'deskripsi' => 'Blush powder berbentuk adonan mochi dengan formula yang melembapkan, mudah di-blend, waterproof, dan tahan 12 jam untuk kulit sehat.',
                'gambar' => 'https://barenbliss.com/cdn/shop/files/MoistMochiPastePowderBlush01_2000x.jpg?v=1720776245'
            ],
        ];
        return view('dashboard', compact('username', 'products'));
    }
    public function product(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Silakan login dulu.']);
        }

        return view('product', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Silakan login dulu.']);
        }

        $profileData = [
            'foto' => 'https://images.soco.id/a10780f4-99ca-4e59-b582-94aad0f5b15a-image-2-1723432952703',
            'nama' => 'Mirfada Arubba Yoana',
            'telepon' => '082131747668',
        ];
        return view('profile', compact('username', 'profileData'));
    }

    public function logout($username)
    {
        return redirect()->route('login');
    }

    public function productAdd(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Silakan login dulu.']);
        }

        $newItem = [
            'gambar' => $request->input('gambar'),
            'nama' => $request->input('nama'),
            'stok' => $request->input('stok'),
            'kategori' => $request->input('kategori'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        $products = [];
        $products[] = $newItem;
        return view('product', compact('username', 'products'));
    }


}


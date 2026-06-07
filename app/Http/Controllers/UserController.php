<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Menampilkan halaman beranda.
     *
     * @return \Illuminate\View\View
     */
    public function beranda()
    {
        return view('user.beranda');
    }

    /**
     * Menampilkan halaman produk.
     *
     * @return \Illuminate\View\View
     */
    public function produk()
    {
        return view('user.produk');
    }

    /**
     * Menampilkan halaman tentang.
     *
     * @return \Illuminate\View\View
     */
    public function tentang()
    {
        return view('user.tentang');
    }

    /**
     * Menampilkan halaman testimoni.
     *
     * @return \Illuminate\View\View
     */
    public function testimoni()
    {
        return view('user.testimoni');
    }

    /**
     * Menampilkan halaman kontak.
     *
     * @return \Illuminate\View\View
     */
    public function kontak()
    {
        return view('user.kontak');
    }
}
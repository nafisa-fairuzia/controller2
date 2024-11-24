<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        return "Menampilkan semua post";
    }

    public function create()
    {
        return "Form untuk membuat post baru";
    }

    public function store(Request $request)
    {
        return "Simpan post baru ke database";
    }

    public function edit($id)
    {
        return "Form untuk edit post dengan ID: $id";
    }

    public function update(Request $request, $id)
    {
        return "Update post dengan ID: $id";
    }

    public function destroy($id)
    {
        return "Hapus post dengan ID: $id";
    }
}

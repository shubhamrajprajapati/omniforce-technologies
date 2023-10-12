<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MenuController extends Controller
{


    public function read(Menu $menu): View
    {
        $menus = Menu::all()->toArray();
        // dd($menus);
        return view('admin.menu.index', compact('menus'));
    }

    public function create(Request $req)
    {

        $validated = $req->validate([
            'img' => '',
            'name' => 'required',
            'desc' => '',
            'parent' => 'nullable',
            'url' => 'required',
        ], [
            'img.required' => 'Please upload a valid img.'
        ]);
        
        $menus = Menu::create($validated);
        return back()->withInput(['success', 'Menu Added Successfully.']);
    }

    public function update(): View
    {
        return view('admin.menu.index');
    }

    public function delete(): View
    {
        return view('admin.menu.index');
    }
}

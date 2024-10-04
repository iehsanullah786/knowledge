<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('articles')
            ->with(['articles' => function($query) {
                $query->orderBy('id', 'desc');
            }])
            ->paginate(10);

        return view('index', compact('categories'));

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
        
    }
}

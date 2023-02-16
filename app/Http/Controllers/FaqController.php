<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function show(){
        $faqs = Faq::all();
        return view('faq')-> with('faqs',$faqs);
    }

    public function create(){
        return view ( 'faq.create');
    }

    public function store(){
        $faq = new Faq();

        $faq->title = request('title');
        $faq->excerpt = request('excerpt');
        $faq->body = request('body');

        $faq->save();

        return redirect('/faq');
    }

}

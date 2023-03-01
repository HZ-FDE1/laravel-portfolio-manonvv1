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

    public function edit($id){
        $faq = Faq::find($id);
        return view('faq.edit', ['blog' => $faq]);
    }

    public function update($id){
        $faq = Faq::find($id);

        $faq->title = request('title');
        $faq->excerpt = request('excerpt');
        $faq->body = request('body');

        $faq->save();

        return redirect('/faq' . $faq ->id);
    }

}

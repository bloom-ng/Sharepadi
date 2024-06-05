<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $faq = Faq::paginate();
        return view('dashboard.admin.faqs.index')->with(['faqs' => $faq]);
    }

    public function create()
    {
        return view('dashboard.admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        FAQ::create($request->all());

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ created successfully!');
    }

    public function edit(FAQ $faq)
    {
        return view('dashboard.admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, FAQ $faq)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $faq->update($request->all());

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated successfully!');
    }

    public function destroy(FAQ $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted successfully!');
    }
}

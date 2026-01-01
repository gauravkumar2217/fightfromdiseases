<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Available pages for content management
     */
    private $pages = [
        'home' => 'Home Page',
        'about' => 'About Us',
        'contact' => 'Contact',
        'health-resources' => 'Health Resources',
        'health-tips' => 'Health Tips',
        'disease-prevention' => 'Disease Prevention',
        'wellness-guide' => 'Wellness Guide',
        'faq' => 'FAQ',
    ];

    /**
     * Display a listing of pages.
     */
    public function index()
    {
        return view('admin.content.index', [
            'pages' => $this->pages,
        ]);
    }

    /**
     * Display content for a specific page.
     */
    public function show($pageSlug)
    {
        if (!array_key_exists($pageSlug, $this->pages)) {
            return redirect()->route('admin.content.index')
                ->with('error', 'Page not found');
        }

        $contents = Content::where('page_slug', $pageSlug)
            ->orderBy('display_order')
            ->orderBy('group')
            ->orderBy('key')
            ->get()
            ->groupBy('group');

        return view('admin.content.show', [
            'pageSlug' => $pageSlug,
            'pageName' => $this->pages[$pageSlug],
            'contents' => $contents,
        ]);
    }

    /**
     * Update content for a specific page.
     */
    public function update(Request $request, $pageSlug)
    {
        if (!array_key_exists($pageSlug, $this->pages)) {
            return redirect()->route('admin.content.index')
                ->with('error', 'Page not found');
        }

        $data = $request->except(['_token', '_method']);

        foreach ($data as $key => $value) {
            if (strpos($key, 'content_') === 0) {
                // Extract the actual key from content_key format
                $contentKey = str_replace('content_', '', $key);
                
                // Find or create the content
                $content = Content::where('page_slug', $pageSlug)
                    ->where('key', $contentKey)
                    ->first();

                if ($content) {
                    $content->value = $value;
                    $content->save();
                }
            }
        }

        return redirect()->route('admin.content.show', $pageSlug)
            ->with('success', 'Content updated successfully!');
    }
}

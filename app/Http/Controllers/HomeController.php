<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the landing page.
     *
     * Route: GET /
     * View:  resources/views/pages/home.blade.php
     *
     * Data to pass to the view:
     *   - $pageTitle  (string) – SEO <title> tag value
     *   - $metaDesc   (string) – SEO meta description
     *   - $products   (Collection) – Featured products (limit 6)
     *   - $services   (Collection) – All active services
     *   - $articles   (Collection) – Latest 3 published articles
     *
     * TODO:
     *   - Inject data from service classes or repositories
     *   - Add HTTP caching headers if content is static / rarely changing
     *   - Consider caching the view output with Cache::remember()
     */
    public function index(): View
    {
        // TODO: Replace placeholder data with real queries
        // $products = Product::featured()->limit(6)->get();
        // $services = Service::active()->get();
        // $articles = Article::published()->latest()->limit(3)->get();

        return view('pages.home');
    }
}

<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class BrochureController extends Controller
{
    /**
     * Securely serve the product brochure PDF download.
     *
     * Route: GET /download-brochure
     * Name:  brochure.download
     */
    public function download(): BinaryFileResponse
    {
        $filePath = public_path('downloads/archon-brochure.pdf');

        if (!file_exists($filePath)) {
            abort(404, 'Brochure document not found.');
        }

        // Laravel built-in secure download response with sanitization & security headers
        return response()->download(
            $filePath,
            'Archon_SINOTRUK_Product_Brochure.pdf',
            [
                'Content-Type'           => 'application/pdf',
                'X-Content-Type-Options' => 'nosniff',
                'Cache-Control'          => 'private, max-age=3600',
            ]
        );
    }
}

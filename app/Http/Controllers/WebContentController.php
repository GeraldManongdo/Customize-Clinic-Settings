<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteContent;

class WebContentController extends Controller
{
    public function update(Request $request, string $key){
        $validated = $request->validate([
            'content.headline'           => 'required|string|max:255',
            'content.description'        => 'required|string',
            'content.badge'              => 'nullable|string|max:255',
            'content.primary_button'     => 'nullable|string|max:100',
            'content.secondary_button'   => 'nullable|string|max:100',
            'content.background_image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $content = $validated['content'];

        if ($request->hasFile('content.background_image')) {

            $path = $request
                ->file('content.background_image')
                ->store('website/hero', 'public');

            $content['background_image'] = $path;
        }


        WebsiteContent::updateOrCreate(
            [
                'tenant_id' => tenant()->id,
                'key'       => $key,
            ],
            [
                'content'   => $content,
            ]
        );

        return redirect()
            ->back()
            ->with('success', 'Hero section updated successfully.');
    }
}

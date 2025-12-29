<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    /**
     * Banner setting keys that should NOT be managed on this page.
     */
    private $bannerKeys = [
        'banner_image_url',
        'banner_badge_text',
        'banner_heading',
        'banner_heading_highlight',
        'banner_description',
        'banner_button1_text',
        'banner_button2_text',
        'banner_button2_link',
    ];

    /**
     * Show the settings page.
     */
    public function index()
    {
        // Get all settings except banner settings
        $settings = Setting::whereNotIn('key', $this->bannerKeys)
            ->orderBy('group')
            ->orderBy('key')
            ->get()
            ->groupBy('group');
            
        return view('admin.settings', [
            'settings' => $settings,
        ]);
    }

    /**
     * Update settings.
     */
    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);
        
        foreach ($data as $key => $value) {
            if (strpos($key, 'setting_') === 0) {
                $settingKey = str_replace('setting_', '', $key);
                
                // Only update if it's NOT a banner key
                if (!in_array($settingKey, $this->bannerKeys)) {
                    Setting::set($settingKey, $value);
                }
            }
        }

        return redirect()->route('admin.settings')->with('success', 'Settings updated successfully!');
    }

    /**
     * Update a single setting via AJAX.
     */
    public function updateSingle(Request $request, $key)
    {
        // Prevent updating banner keys from settings page
        if (in_array($key, $this->bannerKeys)) {
            return response()->json(['error' => 'Banner settings must be managed from the Banner page'], 403);
        }

        $validator = Validator::make($request->all(), [
            'value' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Value is required'], 400);
        }

        $setting = Setting::where('key', $key)->first();
        
        if (!$setting) {
            return response()->json(['error' => 'Setting not found'], 404);
        }

        $setting->value = $request->value;
        $setting->save();

        return response()->json(['success' => true, 'message' => 'Setting updated successfully']);
    }
}

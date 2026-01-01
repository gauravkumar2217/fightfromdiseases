<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_slug',
        'key',
        'value',
        'type',
        'group',
        'description',
        'display_order',
    ];

    protected $casts = [
        'display_order' => 'integer',
    ];

    /**
     * Get content value by page slug and key.
     */
    public static function get($pageSlug, $key, $default = null)
    {
        $content = static::where('page_slug', $pageSlug)
            ->where('key', $key)
            ->first();
        return $content ? $content->value : $default;
    }

    /**
     * Set content value by page slug and key.
     */
    public static function set($pageSlug, $key, $value, $type = 'text', $group = 'general', $description = null, $displayOrder = 0)
    {
        return static::updateOrCreate(
            ['page_slug' => $pageSlug, 'key' => $key],
            [
                'value' => $value,
                'type' => $type,
                'group' => $group,
                'description' => $description,
                'display_order' => $displayOrder,
            ]
        );
    }

    /**
     * Get all content for a specific page grouped by group.
     */
    public static function getByPage($pageSlug)
    {
        return static::where('page_slug', $pageSlug)
            ->orderBy('display_order')
            ->orderBy('group')
            ->orderBy('key')
            ->get()
            ->groupBy('group');
    }
}

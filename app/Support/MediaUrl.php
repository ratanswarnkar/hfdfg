<?php

namespace App\Support;

use Illuminate\Support\Facades\Storage;

class MediaUrl
{
    public static function resolve(?string $path, ?string $fallback = null): string
    {
        $fallback ??= asset('img/loading-blog.gif');

        if (! $path) {
            return $fallback;
        }

        $normalized = str_replace('\\', '/', trim($path));
        $normalized = ltrim($normalized, '/');

        if (filter_var($normalized, FILTER_VALIDATE_URL)) {
            return $normalized;
        }

        if (str_starts_with($normalized, 'storage/')) {
            return asset($normalized);
        }

        if (str_starts_with($normalized, 'public/')) {
            $withoutPublicPrefix = substr($normalized, 7);
            if ($withoutPublicPrefix && file_exists(public_path($withoutPublicPrefix))) {
                return asset($withoutPublicPrefix);
            }

            return asset($normalized);
        }

        $candidates = [
            $normalized,
            'images/media/'.$normalized,
            'public/images/media/'.$normalized,
            'storage/'.$normalized,
        ];

        foreach ($candidates as $candidate) {
            if (file_exists(public_path($candidate))) {
                return asset($candidate);
            }
        }

        if (Storage::disk('public')->exists($normalized)) {
            return Storage::url($normalized);
        }

        return asset('public/images/media/'.$normalized);
    }
}

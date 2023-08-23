<?php

namespace Sherlockboy\MohiraiLaravel;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class MohiraiApi
{
    public static function stt(string $filePath)
    {
        $baseUrl = config('mohirai.base_url');

        $response = Http::acceptJson()
            ->withHeader('Authorization', config('mohirai.api_key'))
            ->attach('file', Storage::readStream($filePath))
            ->post("$baseUrl/stt");

        return $response->json();
    }
}

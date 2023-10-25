<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NodeAPIService
{
    protected $baseUrl;

    public function __construct($baseUrl = null)
    {
        $this->baseUrl = $baseUrl;
    }
    public function getAllUsers()
    {
        $response = Http::get("{$this->baseUrl}/users");

        // Check if the request was successful
        if ($response->successful()) {
            return $response->json();
        }

        // Handle errors if needed
        return null;
    }

    public function addUsers(array $data)
    {
        $response = Http::post("{$this->baseUrl}/users", $data);

        // Check if the request was successful
        if ($response->successful()) {
            return $response->json();
        }

        // Handle errors if needed
        return null;
    }
    public function updateUsers($userId, array $data)
    {
        $response = Http::patch("{$this->baseUrl}/users/{$userId}", $data);

        // Check if the request was successful
        if ($response->successful()) {
            return $response->json();
        }

        // Handle errors if needed
        return null;
    }

    public function deleteUser($userId)
    {
        $response = Http::delete("{$this->baseUrl}/users/{$userId}");

        // Check if the request was successful
        if ($response->successful()) {
            return $response->json();
        }

        // Handle errors if needed
        return null;
    }
    public function detailUser($userId)
    {
        $response = Http::get("{$this->baseUrl}/users/{$userId}");

        // Check if the request was successful
        if ($response->successful()) {
            return $response->json();
        }

        // Handle errors if needed
        return null;
    }

}

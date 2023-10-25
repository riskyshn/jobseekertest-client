<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Services\NodeAPIService;

class UserController extends Controller
{
    protected $nodeApiService;

    public function __construct(NodeAPIService $nodeApiService)
    {
        $this->nodeApiService = $nodeApiService;
    }

    public function index()
    {
        // Example: Get all products from  Node Js API
        $users = $this->nodeApiService->getAllUsers();

        // Process the data as needed
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'full_name' => 'required|string',
            'dob' => 'required|string',
            'pob' => 'required|string',
            'gender' => 'required|string',
            'years_exp' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|string',
        ]);

        // Create a new product using the Node Js API service
        $newProduct = $this->nodeApiService->addUsers([
            'full_name' => $request->input('full_name'),
            'dob' => $request->input('dob'),
            'pob' => $request->input('pob'),
            'gender' => $request->input('gender'),
            'years_exp' => $request->input('years_exp'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            // Add any other fields as needed
        ]);

        // You can handle the response from the API service as needed
        // For example, check if the product was created successfully

        // Redirect back to the product index page or wherever you want
        return redirect()->route('users.index')->with('success', 'Product created successfully');
    }

    public function destroy($userId)
    {
        // Assuming you pass the product ID as a parameter

        // Use the Node Js API service to delete the product
        $result = $this->nodeApiService->deleteUser($userId);

        // You can handle the response from the API service as needed
        // For example, check if the product was deleted successfully

        // Redirect back to the product index page or wherever you want
        return redirect()->route('users.index')->with('success', 'Product deleted successfully');
    }

    public function edit($userId)
    {
        $user = $this->nodeApiService->detailUser($userId);
        return view('products.update', compact('user'));
    }

    public function update(Request $request, $userId)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'full_name' => 'required|string',
                'dob' => 'required|string',
                'pob' => 'required|string',
                'gender' => 'required|string',
                'years_exp' => 'required|string',
                'phone_number' => 'required|string',
                'email' => 'required|string',
                // Add any other validation rules for additional fields
            ]);

            // Update the product using the Spring Boot API service
            $updatedProduct = $this->nodeApiService->updateUsers($userId, [
            'full_name' => $request->input('full_name'),
            'dob' => $request->input('dob'),
            'pob' => $request->input('pob'),
            'gender' => $request->input('gender'),
            'years_exp' => $request->input('years_exp'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
                // Add any other fields as needed
            ]);

            // Check if the product was updated successfully
            if ($updatedProduct) {
                return redirect()->route('users.index')->with('success', 'Product updated successfully');
            } else {
                return redirect()->route('users.index')->with('error', 'Failed to update product');
            }
        } catch (\Exception $e) {
            // Log the exception for debugging
            logger()->error('Error updating product: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->route('users.index')->with('error', 'An error occurred while updating the product');
        }
    }
}

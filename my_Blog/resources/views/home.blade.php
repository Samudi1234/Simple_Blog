@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .form-container {
            max-width: 2000px; 
            max-width: 100%;
            background: #fff;
            padding: 150px;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }
        .form-label {
            font-weight: bold;
            font-size: 20px; /* Larger label text */
            color: #333;
        }
        .form-control {
            height: 55px; /* Larger input fields */
            font-size: 18px;
            border-radius: 10px;
            border: 1px solid #ced4da;
        }
        .btn-primary {
            width: 100%;
            height: 60px; /* Bigger button */
            font-size: 22px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
        <h1 class="text-center text-primary mb-4">Create a Post</h1>
        
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf  <!-- Laravel CSRF Token for Security -->

            <div class="mb-4">
                <label class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Post Title" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Post Description</label>
                <textarea name="description" class="form-control" rows="5" placeholder="Enter Post Description" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS (Optional, required for components like modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



@endsection

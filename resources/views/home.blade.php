<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

@extends('layouts.app')

@section('content')
   

    <div class="jumbotron position-relative" style="background-image: url('/images/home.jpg'); background-position: center; background-size: cover; height: 50vh;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
            <div class="container position-relative mt-5">
                <h1 class="pt-5 text-light fw-bold text-center display-4">Welcome to MentalHelp</h1>
                <p class="d-block mx-auto text-light text-center mt-5 fs-3" style="max-width: 800px;">
                    Your go-to source for information, insights, and resources about mental health and well-being.
                </p>
            </div>
        </div>


    <main class="container mx-auto mt-8">
        <div class="flex justify-center mt-8">
            <div class="relative w-1/2">
                <input 
                type="text" 
                placeholder="Search..." 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button 
                    type="submit" 
                    class="absolute right top-1/2 transform -translate-y-1/2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Search
                    </button>
            </div>
        </div>

        <div class="container mx-auto mt-8">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6 flex">
                <div style="width: 300px;">
                    <img src="/images/article1.png" alt="Image 1" class="object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Gangguan Mental Semakin Ngetren, Patut Diwaspadai!</h2>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...
                    </p>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6 flex">
                <div style="width: 300px;">
                    <img src="/images/article2.png" alt="Image 2" class="object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Gangguan Jiwa - Gejala, Penyebab, dan Pengobatan</h2>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...
                    </p>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6 flex">
                <div style="width: 300px;">
                    <img src="/images/article3.png" alt="Image 2" class="object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Minimnya Kesadaran Masyarakat Akan Kesehatan Mental</h2>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...
                    </p>
                </div>
            </div>
        </div>

    </main>


        
        <div class="jumbotron position-relative">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 py-5" style="background-color: rgba(0, 0, 0, 0.5);"></div>
            <div class="container position-relative my-5 py-3">
                <a href="/events" class="btn btn-danger d-block mx-auto mt-3">Check out our events here!</a>
                <a href="/terbaru" class="btn btn-danger d-block mx-auto mt-3 mb-3">Check out our latest articles here!</a>
            </div>
        </div>
@endsection

</body>
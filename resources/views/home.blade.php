@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Home</div>
                                <div class="card-body">
                                    <p>Welcome to Dog Breed Identification. Use our AI-powered system to identify the breed of your furry friend.</p>
                                    <a href="{{ route('breed-recognition') }}" class="btn btn-primary">Identify Breed</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Blog</div>
                                <div class="card-body">
                                    <p>Stay updated with the latest news, tips, and tricks related to dogs and dog breeds.</p>
                                    <a href="{{ route('blog') }}" class="btn btn-primary">View Blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">About Us</div>
                                <div class="card-body">
                                    <p>Learn more about us and our mission to make dog breed identification easy and accessible for everyone.</p>
                                    <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
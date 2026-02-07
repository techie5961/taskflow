@extends('layout.users.index')
@section('title')
    About Us
@endsection
@section('css')
    <style class="css">
         .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
        .card{
            border:1px solid var(--bg-light);
            padding:10px;

        }
    </style>
@endsection
@section('main')
    <section class="column g-10 w-full p-10">
         <h1>About {{ config('app.name') }}</h1>
    
    <h2>What is {{ config('app.name') }}?</h2>
    <p>{{ config('app.name') }} is a platform that connects people who want to earn extra money with businesses that need help with simple social media tasks. We make it easy for anyone to earn money in their spare time by completing small tasks like liking posts, following accounts, sharing content, or watching videos on popular social media platforms.</p>
    
    <h2>Our Mission</h2>
    <p>Our mission is to create flexible earning opportunities for everyone. We believe that anyone should be able to earn money on their own schedule, regardless of their location, education, or work experience. {{ config('app.name') }} provides a simple, accessible way for people to earn supplemental income while helping businesses grow their online presence.</p>
    
    <h2>How It Works</h2>
    <p>1. Sign up for a free {{ config('app.name') }} account<br>
    2. Connect your social media accounts (we never post without your permission)<br>
    3. Browse available tasks from our dashboard<br>
    4. Complete simple tasks following clear instructions<br>
    5. Get paid instantly after task verification</p>
    
    <h2>For Taskers</h2>
    <p>If you're looking to earn extra money, {{ config('app.name') }} is for you. We offer hundreds of simple social media tasks every day that you can complete in just minutes. Earn money during your commute, on breaks, or in your free time. No special skills required - just a smartphone and an internet connection.</p>
    
    <h2>For Businesses</h2>
    <p>If you need help growing your social media presence, {{ config('app.name') }} can help. Post simple tasks to get genuine engagement on your social media accounts. Increase your followers, boost engagement, and grow your brand with real human interaction.</p>
    
    <h2>Our Values</h2>
    <p><strong>Transparency:</strong> Clear pricing, no hidden fees<br>
    <strong>Fairness:</strong> Competitive pay for every task<br>
    <strong>Security:</strong> Safe for your social media accounts<br>
    <strong>Flexibility:</strong> Work whenever you want<br>
    <strong>Community:</strong> Supportive environment for all users</p>
    
    <h2>Get Started</h2>
    <p>Join thousands of people who are already earning with {{ config('app.name') }}. Sign up is free and takes just 2 minutes. Start earning money today by completing simple social media tasks.</p>
    
    </section>
@endsection
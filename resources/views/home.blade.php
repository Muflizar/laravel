@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
    .hero {
        text-align: center;
        padding: 4rem 2rem;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        border-radius: 10px;
        margin-bottom: 2rem;
    }
    
    .hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: #2c3e50;
    }
    
    .hero p {
        font-size: 1.3rem;
        color: #555;
        margin-bottom: 2rem;
    }
    
    .cta-button {
        display: inline-block;
        padding: 1rem 2rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: transform 0.3s;
    }
    
    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    .features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }
    
    .feature-card {
        padding: 2rem;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        text-align: center;
        transition: transform 0.3s;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
    }
</style>

<div class="hero">
    <h1>{{ $title }}</h1>
    <p>{{ $subtitle }}</p>
    <a href="{{ route('portfolio') }}" class="cta-button">Lihat Karya Saya</a>
</div>

<div class="features">
    @foreach($features as $feature)
    <div class="feature-card">
        <div class="feature-icon">{{ $feature['icon'] }}</div>
        <h3>{{ $feature['title'] }}</h3>
        <p>{{ $feature['description'] }}</p>
    </div>
    @endforeach
</div>
@endsection
@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')
<style>
    .portfolio-header {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .portfolio-header h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 1rem;
    }
    
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }
    
    .project-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    
    .project-image {
        width: 100%;
        height: 200px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: white;
    }
    
    .project-content {
        padding: 1.5rem;
    }
    
    .project-content h3 {
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }
    
    .project-content p {
        color: #666;
        margin-bottom: 1rem;
        line-height: 1.6;
    }
    
    .project-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .tag {
        background: #f0f0f0;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        font-size: 0.85rem;
        color: #667eea;
    }
    
    .project-link {
        display: inline-block;
        padding: 0.5rem 1.5rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: opacity 0.3s;
    }
    
    .project-link:hover {
        opacity: 0.9;
    }
</style>

<div class="portfolio-header">
    <h1>Portofolio Saya</h1>
    <p>Berikut adalah beberapa project yang telah saya kerjakan</p>
</div>

<div class="portfolio-grid">
    @foreach($projects as $project)
    <div class="project-card">
        <div class="project-image">{{ $project['icon'] }}</div>
        <div class="project-content">
            <h3>{{ $project['title'] }}</h3>
            <p>{{ $project['description'] }}</p>
            <div class="project-tags">
                @foreach($project['tags'] as $tag)
                <span class="tag">{{ $tag }}</span>
                @endforeach
            </div>
            <a href="{{ $project['link'] }}" class="project-link">Lihat Detail</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
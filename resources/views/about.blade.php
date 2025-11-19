@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<style>
    .about-container {
        max-width: 900px;
        margin: 0 auto;
    }
    
    .about-header {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .about-header h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 1rem;
    }
    
    .about-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        margin-bottom: 3rem;
    }
    
    .profile-image {
        text-align: center;
    }
    
    .profile-image img {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .bio {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .bio h2 {
        color: #667eea;
        margin-bottom: 1rem;
    }
    
    .bio p {
        margin-bottom: 1rem;
        line-height: 1.8;
    }
    
    .skills {
        margin-top: 3rem;
    }
    
    .skills h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 2rem;
    }
    
    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1.5rem;
    }
    
    .skill-item {
        background: white;
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        text-align: center;
    }
    
    .skill-item h3 {
        color: #667eea;
        margin-bottom: 0.5rem;
    }
    
    @media (max-width: 768px) {
        .about-content {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="about-container">
    <div class="about-header">
        <h1>Tentang Saya</h1>
        <p>Kenali lebih dekat siapa saya dan apa yang saya lakukan</p>
    </div>
    
    <div class="about-content">
        <div class="profile-image">
            <img src="https://via.placeholder.com/250" alt="Profile Picture">
        </div>
        
        <div class="bio">
            <h2>Halo! Saya John Doe</h2>
            <p>Saya adalah seorang Full Stack Web Developer dengan pengalaman 5+ tahun dalam mengembangkan aplikasi web yang scalable dan user-friendly.</p>
            <p>Saya passionate dalam menciptakan solusi digital yang tidak hanya fungsional, tetapi juga memberikan pengalaman pengguna yang luar biasa.</p>
            <p>Dengan keahlian di berbagai teknologi modern, saya siap membantu mewujudkan ide Anda menjadi kenyataan digital.</p>
        </div>
    </div>
    
    <div class="skills">
        <h2>Keahlian Saya</h2>
        <div class="skills-grid">
            <div class="skill-item">
                <h3>Laravel</h3>
                <p>PHP Framework</p>
            </div>
            <div class="skill-item">
                <h3>Vue.js</h3>
                <p>JavaScript Framework</p>
            </div>
            <div class="skill-item">
                <h3>MySQL</h3>
                <p>Database</p>
            </div>
            <div class="skill-item">
                <h3>HTML/CSS</h3>
                <p>Frontend</p>
            </div>
            <div class="skill-item">
                <h3>Git</h3>
                <p>Version Control</p>
            </div>
            <div class="skill-item">
                <h3>REST API</h3>
                <p>Backend</p>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Home - My Photo Album')

@section('content')
<div class="home-content">
    <h2>Welcome to My Photo Album</h2>
    <p class="intro-text">Explore our curated collection of 100 stunning photographs across 5 unique categories. Each gallery features 20 carefully selected images with detailed captions and descriptions.</p>
    
    <div class="category-grid">
        <div class="category-card">
            <a href="{{ route('page1') }}">
                <div class="category-preview">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&q=80" alt="Nature Preview">
                </div>
                <div class="category-info">
                    <h3>Nature Photos</h3>
                    <p>Breathtaking landscapes, mountains, forests, and natural wonders from around the world</p>
                    <span class="photo-count">20 Photos</span>
                </div>
            </a>
        </div>

        <div class="category-card">
            <a href="{{ route('page2') }}">
                <div class="category-preview">
                    <img src="https://images.unsplash.com/photo-1486718448742-163732cd1544?w=800&q=80" alt="Architecture Preview">
                </div>
                <div class="category-info">
                    <h3>Architecture</h3>
                    <p>Stunning buildings, modern structures, historic landmarks, and architectural marvels</p>
                    <span class="photo-count">20 Photos</span>
                </div>
            </a>
        </div>

        <div class="category-card">
            <a href="{{ route('page3') }}">
                <div class="category-preview">
                    <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d?w=800&q=80" alt="Animals Preview">
                </div>
                <div class="category-info">
                    <h3>Animals</h3>
                    <p>Amazing wildlife moments, pets, birds, marine life, and creatures from every habitat</p>
                    <span class="photo-count">20 Photos</span>
                </div>
            </a>
        </div>

        <div class="category-card">
            <a href="{{ route('page4') }}">
                <div class="category-preview">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&q=80" alt="People & Events Preview">
                </div>
                <div class="category-info">
                    <h3>People & Events</h3>
                    <p>Memorable moments, celebrations, gatherings, portraits, and special occasions</p>
                    <span class="photo-count">20 Photos</span>
                </div>
            </a>
        </div>

        <div class="category-card">
            <a href="{{ route('page5') }}">
                <div class="category-preview">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=800&q=80" alt="Miscellaneous Preview">
                </div>
                <div class="category-info">
                    <h3>Miscellaneous</h3>
                    <p>Unique captures, creative compositions, abstract art, and interesting finds</p>
                    <span class="photo-count">20 Photos</span>
                </div>
            </a>
        </div>
    </div>
</div>

@extends('layouts.app')

@section('title', 'People & Events - My Photo Album')

@section('content')
<div class="page-header">
    <h2>People & Events</h2>
    <p>Celebrating memorable moments and human connections</p>
</div>

<div class="photo-grid">
    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&q=80" alt="Wedding Ceremony">
        <h3>Wedding Ceremony</h3>
        <p>Bride and groom exchanging vows in beautiful outdoor ceremony surrounded by loved ones.</p>
        <div class="photo-meta">
            <span>📍 Napa Valley</span>
            <span>📅 Jun 15, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&q=80" alt="Graduation Day">
        <h3>Graduation Day</h3>
        <p>Students celebrating academic achievement by throwing caps in air with joy and excitement.</p>
        <div class="photo-meta">
            <span>📍 Harvard</span>
            <span>📅 May 22, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?w=800&q=80" alt="Birthday Celebration">
        <h3>Birthday Celebration</h3>
        <p>Happy child blowing out birthday candles surrounded by family and colorful decorations.</p>
        <div class="photo-meta">
            <span>📍 Home</span>
            <span>📅 Apr 10, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?w=800&q=80" alt="Family Portrait">
        <h3>Family Portrait</h3>
        <p>Three generations gathered together for professional family portrait capturing precious moments.</p>
        <div class="photo-meta">
            <span>📍 Studio</span>
            <span>📅 Dec 25, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=800&q=80" alt="Music Festival">
        <h3>Music Festival</h3>
        <p>Energetic crowd enjoying live concert with hands raised under colorful stage lights.</p>
        <div class="photo-meta">
            <span>📍 Austin</span>
            <span>📅 Aug 17, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1513593771513-7b58b6c4af38?w=800&q=80" alt="Marathon Finish">
        <h3>Marathon Finish</h3>
        <p>Determined runner crossing finish line after completing challenging marathon race.</p>
        <div class="photo-meta">
            <span>📍 New York</span>
            <span>📅 Nov 5, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?w=800&q=80" alt="Beach Volleyball">
        <h3>Beach Volleyball</h3>
        <p>Friends playing competitive beach volleyball on sandy shore enjoying summer sunshine.</p>
        <div class="photo-meta">
            <span>📍 Miami</span>
            <span>📅 Jul 4, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?w=800&q=80" alt="Art Exhibition">
        <h3>Art Exhibition</h3>
        <p>Gallery opening night with visitors admiring contemporary artwork and socializing.</p>
        <div class="photo-meta">
            <span>📍 Chelsea</span>
            <span>📅 Mar 12, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=800&q=80" alt="Cooking Class">
        <h3>Cooking Class</h3>
        <p>Group of enthusiasts learning to prepare authentic Italian cuisine together.</p>
        <div class="photo-meta">
            <span>📍 Rome</span>
            <span>📅 Feb 8, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=800&q=80" alt="Yoga Retreat">
        <h3>Yoga Retreat</h3>
        <p>Peaceful outdoor meditation session at sunrise overlooking tropical landscape.</p>
        <div class="photo-meta">
            <span>📍 Bali</span>
            <span>📅 May 1, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=800&q=80" alt="Holiday Dinner">
        <h3>Holiday Dinner</h3>
        <p>Thanksgiving family gathering with delicious feast and grateful hearts around table.</p>
        <div class="photo-meta">
            <span>📍 Home</span>
            <span>📅 Nov 24, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=800&q=80" alt="Street Performance">
        <h3>Street Performance</h3>
        <p>Talented musicians entertaining crowd with lively performance on busy city street.</p>
        <div class="photo-meta">
            <span>📍 New Orleans</span>
            <span>📅 Jun 22, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=800&q=80" alt="Business Conference">
        <h3>Business Conference</h3>
        <p>Professionals networking and exchanging ideas at major industry conference event.</p>
        <div class="photo-meta">
            <span>📍 Las Vegas</span>
            <span>📅 Sep 14, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1508700929628-666bc8bd84ea?w=800&q=80" alt="Dance Recital">
        <h3>Dance Recital</h3>
        <p>Graceful ballet performance on stage showcasing years of dedication and practice.</p>
        <div class="photo-meta">
            <span>📍 Lincoln Center</span>
            <span>📅 Apr 28, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1488459716781-31db52582fe9?w=800&q=80" alt="Farmers Market">
        <h3>Farmers Market</h3>
        <p>Vibrant farmers market with local vendors and shoppers browsing fresh produce.</p>
        <div class="photo-meta">
            <span>📍 Portland</span>
            <span>📅 May 6, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=800&q=80" alt="Senior Prom">
        <h3>Senior Prom</h3>
        <p>High school students dressed elegantly dancing and celebrating memorable prom night.</p>
        <div class="photo-meta">
            <span>📍 Chicago</span>
            <span>📅 May 18, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1452626038306-9aae5e071dd3?w=800&q=80" alt="Charity Run">
        <h3>Charity Run</h3>
        <p>Community members running together to raise funds and awareness for important cause.</p>
        <div class="photo-meta">
            <span>📍 Boston</span>
            <span>📅 Oct 8, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=800&q=80" alt="Baby Shower">
        <h3>Baby Shower</h3>
        <p>Friends and family celebrating upcoming arrival with games and gifts in garden setting.</p>
        <div class="photo-meta">
            <span>📍 Garden</span>
            <span>📅 Mar 20, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1528605105345-5344ea20e269?w=800&q=80" alt="Team Building">
        <h3>Team Building</h3>
        <p>Coworkers bonding during outdoor team building retreat in beautiful mountain location.</p>
        <div class="photo-meta">
            <span>📍 Lake Tahoe</span>
            <span>📅 Jan 25, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1467810563316-b5476525c0f9?w=800&q=80" alt="New Years Eve">
        <h3>New Years Eve</h3>
        <p>Massive crowd counting down to midnight celebrating new year with fireworks display.</p>
        <div class="photo-meta">
            <span>📍 Times Square</span>
            <span>📅 Dec 31, 2023</span>
        </div>
    </div>
</div>

<div class="back-to-home">
    <a href="{{ route('home') }}" class="btn-back">← Back to Home</a>
</div>

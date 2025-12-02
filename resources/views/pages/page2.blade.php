@extends('layouts.app')

@section('title', 'Architecture - My Photo Album')

@section('content')
<div class="page-header">
    <h2>Architecture Photos</h2>
    <p>Explore magnificent buildings and structures from around the globe</p>
</div>

<div class="photo-grid">
    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1549144511-f099e773c147?w=800&q=80" alt="Gothic Cathedral">
        <h3>Gothic Cathedral</h3>
        <p>Medieval cathedral with soaring flying buttresses and intricate stone carvings in France.</p>
        <div class="photo-meta">
            <span>📍 France</span>
            <span>📅 Apr 18, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1486718448742-163732cd1544?w=800&q=80" alt="Modern Glass Tower">
        <h3>Modern Glass Tower</h3>
        <p>Reflective skyscraper in financial district showcasing contemporary architectural design.</p>
        <div class="photo-meta">
            <span>📍 Singapore</span>
            <span>📅 Mar 22, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1563639004-37c0e086c938?w=800&q=80" alt="Ancient Temple">
        <h3>Ancient Temple</h3>
        <p>Stone temple complex with intricate carvings dating back centuries in Cambodia.</p>
        <div class="photo-meta">
            <span>📍 Cambodia</span>
            <span>📅 Jan 15, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=800&q=80" alt="Art Deco Building">
        <h3>Art Deco Building</h3>
        <p>1920s architectural masterpiece featuring geometric patterns and ornate decorative elements.</p>
        <div class="photo-meta">
            <span>📍 New York</span>
            <span>📅 Feb 9, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=800&q=80" alt="Suspension Bridge">
        <h3>Suspension Bridge</h3>
        <p>Engineering marvel spanning bay with massive cables and towers supporting the roadway.</p>
        <div class="photo-meta">
            <span>📍 San Francisco</span>
            <span>📅 May 12, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1523059623039-a9ed027e7fad?w=800&q=80" alt="Opera House">
        <h3>Opera House</h3>
        <p>Iconic shell-shaped concert hall representing one of the world's most recognizable buildings.</p>
        <div class="photo-meta">
            <span>📍 Sydney</span>
            <span>📅 Nov 30, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b?w=800&q=80" alt="Medieval Castle">
        <h3>Medieval Castle</h3>
        <p>Stone fortress perched on mountain peak with centuries of history within its walls.</p>
        <div class="photo-meta">
            <span>📍 Germany</span>
            <span>📅 Sep 5, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?w=800&q=80" alt="Modern Museum">
        <h3>Modern Museum</h3>
        <p>Contemporary art museum exterior featuring bold curves and innovative architectural design.</p>
        <div class="photo-meta">
            <span>📍 Bilbao</span>
            <span>📅 Oct 14, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=800&q=80" alt="Victorian Mansion">
        <h3>Victorian Mansion</h3>
        <p>Ornate 19th century residence with detailed woodwork and classic Victorian architectural elements.</p>
        <div class="photo-meta">
            <span>📍 London</span>
            <span>📅 Aug 7, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800&q=80" alt="Pagoda Temple">
        <h3>Pagoda Temple</h3>
        <p>Multi-tiered Buddhist temple with traditional Asian architecture and golden ornamental details.</p>
        <div class="photo-meta">
            <span>📍 Thailand</span>
            <span>📅 Dec 18, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800&q=80" alt="City Skyline">
        <h3>City Skyline</h3>
        <p>Urban landscape at blue hour featuring illuminated skyscrapers against the twilight sky.</p>
        <div class="photo-meta">
            <span>📍 Dubai</span>
            <span>📅 Jan 28, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?w=800&q=80" alt="Classical Library">
        <h3>Classical Library</h3>
        <p>Historic reading room with towering columns and ornate ceiling in prestigious university.</p>
        <div class="photo-meta">
            <span>📍 Oxford</span>
            <span>📅 Mar 5, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=800&q=80" alt="Brutalist Complex">
        <h3>Brutalist Complex</h3>
        <p>Concrete modernist architecture showcasing the bold geometric forms of brutalist design.</p>
        <div class="photo-meta">
            <span>📍 Boston</span>
            <span>📅 Apr 25, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1545910684-8e7c081be9b0?w=800&q=80" alt="Grand Station">
        <h3>Grand Station</h3>
        <p>Ornate railway terminal hall with vaulted ceiling and elegant Beaux-Arts architectural details.</p>
        <div class="photo-meta">
            <span>📍 Paris</span>
            <span>📅 Feb 16, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?w=800&q=80" alt="Mosque Dome">
        <h3>Mosque Dome</h3>
        <p>Intricate Islamic architecture featuring geometric patterns and beautiful tile work on the dome.</p>
        <div class="photo-meta">
            <span>📍 Istanbul</span>
            <span>📅 May 8, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1605537832937-4b2b1b6b6c0a?w=800&q=80" alt="Lighthouse">
        <h3>Lighthouse</h3>
        <p>Coastal beacon standing tall on rocky shore guiding ships safely through treacherous waters.</p>
        <div class="photo-meta">
            <span>📍 Maine</span>
            <span>📅 Jul 3, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1580191947416-62d35a55e71d?w=800&q=80" alt="Stadium Arena">
        <h3>Stadium Arena</h3>
        <p>Modern sports complex exterior with innovative roof design and cutting-edge engineering.</p>
        <div class="photo-meta">
            <span>📍 Barcelona</span>
            <span>📅 Jun 20, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1555881924-3e0a3f0a8bf0?w=800&q=80" alt="Palace Gardens">
        <h3>Palace Gardens</h3>
        <p>Versailles-style royal estate with symmetrical gardens and grand baroque architecture.</p>
        <div class="photo-meta">
            <span>📍 Austria</span>
            <span>📅 May 29, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1519207994708-62d69d1a0a37?w=800&q=80" alt="Wooden Chapel">
        <h3>Wooden Chapel</h3>
        <p>Traditional timber construction showcasing Scandinavian craftsmanship and architectural heritage.</p>
        <div class="photo-meta">
            <span>📍 Norway</span>
            <span>📅 Aug 11, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Glass Atrium">
        <h3>Glass Atrium</h3>
        <p>Contemporary indoor garden space with soaring glass ceiling and tropical vegetation.</p>
        <div class="photo-meta">
            <span>📍 Singapore</span>
            <span>📅 Apr 2, 2024</span>
        </div>
    </div>
</div>

<div class="back-to-home">
    <a href="{{ route('home') }}" class="btn-back">← Back to Home</a>
</div>

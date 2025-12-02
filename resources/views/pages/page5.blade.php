@extends('layouts.app')

@section('title', 'Miscellaneous - My Photo Album')

@section('content')
<div class="page-header">
    <h2>Miscellaneous Photos</h2>
    <p>A creative collection of unique and artistic captures</p>
</div>

<div class="photo-grid">
    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=800&q=80" alt="Morning Coffee">
        <h3>Morning Coffee</h3>
        <p>Beautiful latte art in ceramic cup creating perfect start to peaceful morning routine.</p>
        <div class="photo-meta">
            <span>📍 Café</span>
            <span>📅 Apr 5, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=800&q=80" alt="Vintage Books">
        <h3>Vintage Books</h3>
        <p>Stack of leather-bound classic books with aged pages telling stories of literary history.</p>
        <div class="photo-meta">
            <span>📍 Library</span>
            <span>📅 Mar 18, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1541961017774-22349e4a1262?w=800&q=80" alt="Abstract Painting">
        <h3>Abstract Painting</h3>
        <p>Colorful modern art piece with bold brush strokes expressing emotion through color.</p>
        <div class="photo-meta">
            <span>📍 Studio</span>
            <span>📅 Feb 22, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1496293455970-f8581aae0e3b?w=800&q=80" alt="Vinyl Records">
        <h3>Vinyl Records</h3>
        <p>Collection of classic vinyl album covers representing golden era of music history.</p>
        <div class="photo-meta">
            <span>📍 Shop</span>
            <span>📅 Jan 30, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1499781350541-7783f6c6a0c8?w=800&q=80" alt="Street Art">
        <h3>Street Art</h3>
        <p>Vibrant colorful mural painted on brick wall showcasing urban artistic expression.</p>
        <div class="photo-meta">
            <span>📍 Brooklyn</span>
            <span>📅 May 14, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1452780212940-6f5c0d14d848?w=800&q=80" alt="Antique Camera">
        <h3>Antique Camera</h3>
        <p>Vintage film photography equipment from bygone era of manual photography craftsmanship.</p>
        <div class="photo-meta">
            <span>📍 Market</span>
            <span>📅 Dec 8, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1578749556568-bc2c40e68b61?w=800&q=80" alt="Handmade Pottery">
        <h3>Handmade Pottery</h3>
        <p>Beautiful ceramic bowls and vases crafted by skilled artisan hands with care.</p>
        <div class="photo-meta">
            <span>📍 Workshop</span>
            <span>📅 Nov 12, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?w=800&q=80" alt="Fresh Flowers">
        <h3>Fresh Flowers</h3>
        <p>Colorful bouquet arrangement in glass vase bringing natural beauty indoors.</p>
        <div class="photo-meta">
            <span>📍 Florist</span>
            <span>📅 Apr 20, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1485965120184-e220f721d03e?w=800&q=80" alt="Bicycle Detail">
        <h3>Bicycle Detail</h3>
        <p>Vintage bicycle with wicker basket parked on charming European cobblestone street.</p>
        <div class="photo-meta">
            <span>📍 Amsterdam</span>
            <span>📅 Jun 2, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?w=800&q=80" alt="Window Light">
        <h3>Window Light</h3>
        <p>Soft sunbeams filtering through sheer curtains creating peaceful atmospheric glow.</p>
        <div class="photo-meta">
            <span>📍 Home</span>
            <span>📅 Mar 28, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1456324504439-367cee3b3c32?w=800&q=80" alt="Typewriter Keys">
        <h3>Typewriter Keys</h3>
        <p>Close-up of vintage typewriter keyboard showing worn keys from years of use.</p>
        <div class="photo-meta">
            <span>📍 Office</span>
            <span>📅 Feb 15, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800&q=80" alt="Seashell Collection">
        <h3>Seashell Collection</h3>
        <p>Variety of colorful ocean shells collected from beaches around the world.</p>
        <div class="photo-meta">
            <span>📍 Beach</span>
            <span>📅 Jul 10, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1509048191080-d2984bad6ae5?w=800&q=80" alt="Pocket Watch">
        <h3>Pocket Watch</h3>
        <p>Elegant gold antique pocket watch with intricate mechanical craftsmanship inside.</p>
        <div class="photo-meta">
            <span>📍 Museum</span>
            <span>📅 Jan 8, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80" alt="Colorful Macarons">
        <h3>Colorful Macarons</h3>
        <p>Display of delicate French pastries in rainbow of colors arranged beautifully.</p>
        <div class="photo-meta">
            <span>📍 Bakery</span>
            <span>📅 May 25, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?w=800&q=80" alt="Leather Journal">
        <h3>Leather Journal</h3>
        <p>Handcrafted leather-bound notebook with fountain pen ready for creative writing.</p>
        <div class="photo-meta">
            <span>📍 Shop</span>
            <span>📅 Apr 12, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1532003885409-ed84d334f6cc?w=800&q=80" alt="Fairy Lights">
        <h3>Fairy Lights</h3>
        <p>String lights glowing warmly at dusk creating magical atmosphere in garden.</p>
        <div class="photo-meta">
            <span>📍 Garden</span>
            <span>📅 Dec 20, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1557672172-298e090bd0f1?w=800&q=80" alt="Geometric Shapes">
        <h3>Geometric Shapes</h3>
        <p>Abstract 3D composition featuring clean lines and minimalist geometric design.</p>
        <div class="photo-meta">
            <span>📍 Studio</span>
            <span>📅 Mar 7, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?w=800&q=80" alt="Wine Bottles">
        <h3>Wine Bottles</h3>
        <p>Vintage wine collection stored in temperature-controlled cellar aging gracefully.</p>
        <div class="photo-meta">
            <span>📍 Cellar</span>
            <span>📅 Feb 28, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&q=80" alt="Map and Compass">
        <h3>Map and Compass</h3>
        <p>Travel planning essentials with vintage compass on detailed navigation map.</p>
        <div class="photo-meta">
            <span>📍 Desk</span>
            <span>📅 Jun 18, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1556430458-d2a0a3e0a6c0?w=800&q=80" alt="Neon Signs">
        <h3>Neon Signs</h3>
        <p>Glowing colorful neon storefront signs illuminating busy street at night.</p>
        <div class="photo-meta">
            <span>📍 Tokyo</span>
            <span>📅 May 30, 2024</span>
        </div>
    </div>
</div>

<div class="back-to-home">
    <a href="{{ route('home') }}" class="btn-back">← Back to Home</a>
</div>

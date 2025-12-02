@extends('layouts.app')

@section('title', 'Nature Photos - My Photo Album')

@section('content')
<div class="page-header">
    <h2>Nature Photos</h2>
    <p>Discover the breathtaking beauty of the natural world</p>
</div>

<div class="photo-grid">
    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&q=80" alt="Mountain Peak at Dawn">
        <h3>Mountain Peak at Dawn</h3>
        <p>Snow-capped Himalayan peak during golden hour, showcasing nature's majestic beauty in Nepal.</p>
        <div class="photo-meta">
            <span>📍 Nepal</span>
            <span>📅 Mar 15, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800&q=80" alt="Coastal Sunset">
        <h3>Coastal Sunset</h3>
        <p>Dramatic sunset over Pacific Ocean waves creating a spectacular display of colors and light.</p>
        <div class="photo-meta">
            <span>📍 California</span>
            <span>📅 Feb 28, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800&q=80" alt="Autumn Forest Trail">
        <h3>Autumn Forest Trail</h3>
        <p>Colorful fall foliage along a serene hiking path, painting the landscape in vibrant autumn hues.</p>
        <div class="photo-meta">
            <span>📍 Vermont</span>
            <span>📅 Oct 12, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1509316785289-025f5b846b35?w=800&q=80" alt="Desert Sand Dunes">
        <h3>Desert Sand Dunes</h3>
        <p>Golden sand formations in morning light, creating mesmerizing patterns across the Moroccan desert.</p>
        <div class="photo-meta">
            <span>📍 Morocco</span>
            <span>📅 Jan 20, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?w=800&q=80" alt="Tropical Waterfall">
        <h3>Tropical Waterfall</h3>
        <p>Cascading water in lush rainforest creating a peaceful and refreshing natural oasis.</p>
        <div class="photo-meta">
            <span>📍 Costa Rica</span>
            <span>📅 Dec 5, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1483347756197-71ef80e95f73?w=800&q=80" alt="Northern Lights">
        <h3>Northern Lights</h3>
        <p>Aurora borealis dancing over snowy landscape in a breathtaking display of nature's light show.</p>
        <div class="photo-meta">
            <span>📍 Iceland</span>
            <span>📅 Nov 8, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1511593358241-7eea1f3c84e5?w=800&q=80" alt="Alpine Lake">
        <h3>Alpine Lake</h3>
        <p>Crystal clear mountain lake with perfect reflections of surrounding peaks and sky.</p>
        <div class="photo-meta">
            <span>📍 Switzerland</span>
            <span>📅 Jul 22, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?w=800&q=80" alt="Wildflower Meadow">
        <h3>Wildflower Meadow</h3>
        <p>Colorful blooms carpet a spring meadow with thousands of vibrant wildflowers in full bloom.</p>
        <div class="photo-meta">
            <span>📍 Netherlands</span>
            <span>📅 May 10, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?w=800&q=80" alt="Redwood Forest">
        <h3>Redwood Forest</h3>
        <p>Giant ancient trees reaching skyward in California's majestic redwood forest.</p>
        <div class="photo-meta">
            <span>📍 California</span>
            <span>📅 Aug 15, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1474044159687-1ee9f3a51722?w=800&q=80" alt="Canyon Vista">
        <h3>Canyon Vista</h3>
        <p>Grand canyon panoramic view at sunset revealing layers of geological history and natural wonder.</p>
        <div class="photo-meta">
            <span>📍 Arizona</span>
            <span>📅 Apr 3, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=800&q=80" alt="Misty Morning">
        <h3>Misty Morning</h3>
        <p>Fog rolling over green hills creating an ethereal and mysterious landscape in the Scottish highlands.</p>
        <div class="photo-meta">
            <span>📍 Scotland</span>
            <span>📅 Sep 18, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1522383225653-ed111181a951?w=800&q=80" alt="Cherry Blossom Lane">
        <h3>Cherry Blossom Lane</h3>
        <p>Tunnel of pink sakura trees in full bloom creating a magical pathway through Japanese gardens.</p>
        <div class="photo-meta">
            <span>📍 Japan</span>
            <span>📅 Apr 1, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1504173010664-32509aeebb62?w=800&q=80" alt="Volcanic Crater">
        <h3>Volcanic Crater</h3>
        <p>Active volcanic caldera with steam rising from the earth's molten core in Hawaii's volcanic landscape.</p>
        <div class="photo-meta">
            <span>📍 Hawaii</span>
            <span>📅 Jun 25, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?w=800&q=80" alt="Glacier Bay">
        <h3>Glacier Bay</h3>
        <p>Blue ice formations and icebergs floating in pristine Arctic waters showcasing nature's frozen beauty.</p>
        <div class="photo-meta">
            <span>📍 Alaska</span>
            <span>📅 Jul 8, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1499002238440-d264edd596ec?w=800&q=80" alt="Lavender Fields">
        <h3>Lavender Fields</h3>
        <p>Purple lavender rows stretching to the horizon at sunset in the fragrant fields of Provence.</p>
        <div class="photo-meta">
            <span>📍 Provence</span>
            <span>📅 Jun 15, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1419242902214-272b3f66ee7a?w=800&q=80" alt="Starry Desert Night">
        <h3>Starry Desert Night</h3>
        <p>Milky Way galaxy stretching across the night sky over sand dunes in the Namibian desert.</p>
        <div class="photo-meta">
            <span>📍 Namibia</span>
            <span>📅 Mar 30, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=800&q=80" alt="Jungle Canopy">
        <h3>Jungle Canopy</h3>
        <p>Dense rainforest canopy from above revealing the incredible biodiversity of the Amazon ecosystem.</p>
        <div class="photo-meta">
            <span>📍 Amazon</span>
            <span>📅 Feb 12, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?w=800&q=80" alt="Rocky Coastline">
        <h3>Rocky Coastline</h3>
        <p>Powerful waves crashing on rugged cliffs along Ireland's dramatic and windswept western coast.</p>
        <div class="photo-meta">
            <span>📍 Ireland</span>
            <span>📅 May 5, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1528127269322-539801943592?w=800&q=80" alt="Bamboo Forest">
        <h3>Bamboo Forest</h3>
        <p>Towering bamboo grove creating a peaceful pathway through the serene forests of Kyoto.</p>
        <div class="photo-meta">
            <span>📍 Kyoto</span>
            <span>📅 Oct 20, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=800&q=80" alt="Sunset Valley">
        <h3>Sunset Valley</h3>
        <p>Rolling hills bathed in golden evening light showcasing the pastoral beauty of Tuscany.</p>
        <div class="photo-meta">
            <span>📍 Tuscany</span>
            <span>📅 Aug 28, 2023</span>
        </div>
    </div>
</div>

<div class="back-to-home">
    <a href="{{ route('home') }}" class="btn-back">← Back to Home</a>
</div>

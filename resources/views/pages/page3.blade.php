@extends('layouts.app')

@section('title', 'Animals - My Photo Album')

@section('content')
<div class="page-header">
    <h2>Animals</h2>
    <p>Experience the wonder and diversity of wildlife</p>
</div>

<div class="photo-grid">
    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d?w=800&q=80" alt="Lion Pride">
        <h3>Lion Pride</h3>
        <p>Majestic male lion with golden mane surveying his territory in the African savanna.</p>
        <div class="photo-meta">
            <span>📍 Kenya</span>
            <span>📅 Feb 14, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1564760055775-d63b17a55c44?w=800&q=80" alt="Elephant Family">
        <h3>Elephant Family</h3>
        <p>Herd of elephants gathering at watering hole showing strong family bonds and social structure.</p>
        <div class="photo-meta">
            <span>📍 Tanzania</span>
            <span>📅 Mar 8, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1589656966895-2f33e7653819?w=800&q=80" alt="Polar Bear">
        <h3>Polar Bear</h3>
        <p>Magnificent polar bear walking across Arctic ice floe in its natural frozen habitat.</p>
        <div class="photo-meta">
            <span>📍 Arctic</span>
            <span>📅 Jan 5, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1551316679-9c6ae9dec224?w=800&q=80" alt="Tiger Portrait">
        <h3>Tiger Portrait</h3>
        <p>Close-up portrait of Bengal tiger showing its powerful features and striking orange coat.</p>
        <div class="photo-meta">
            <span>📍 India</span>
            <span>📅 Nov 22, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1551986782-d0169b3f8fa7?w=800&q=80" alt="Penguin Colony">
        <h3>Penguin Colony</h3>
        <p>Emperor penguins huddled with their chicks in the harsh Antarctic environment.</p>
        <div class="photo-meta">
            <span>📍 Antarctica</span>
            <span>📅 Dec 10, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1598214886806-c87b84b7078b?w=800&q=80" alt="Bald Eagle">
        <h3>Bald Eagle</h3>
        <p>Majestic bald eagle soaring in flight over river with wings fully extended.</p>
        <div class="photo-meta">
            <span>📍 Alaska</span>
            <span>📅 Apr 7, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800&q=80" alt="Dolphin Pod">
        <h3>Dolphin Pod</h3>
        <p>Playful dolphins jumping through ocean waves in synchronized acrobatic display.</p>
        <div class="photo-meta">
            <span>📍 Hawaii</span>
            <span>📅 May 18, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1547970810-dc1eac37d174?w=800&q=80" alt="Giraffe Pair">
        <h3>Giraffe Pair</h3>
        <p>Two graceful giraffes silhouetted against golden sunset in African wilderness.</p>
        <div class="photo-meta">
            <span>📍 South Africa</span>
            <span>📅 Feb 20, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1474511320723-9a56873867b5?w=800&q=80" alt="Red Fox">
        <h3>Red Fox</h3>
        <p>Beautiful red fox with thick winter coat hunting in pristine snow-covered landscape.</p>
        <div class="photo-meta">
            <span>📍 Canada</span>
            <span>📅 Jan 12, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1551650993-c5d4b6c8c3b8?w=800&q=80" alt="Gorilla Family">
        <h3>Gorilla Family</h3>
        <p>Mountain gorillas in misty forest displaying gentle nature and complex social behavior.</p>
        <div class="photo-meta">
            <span>📍 Rwanda</span>
            <span>📅 Oct 5, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1437622368342-7a3d73a34c8f?w=800&q=80" alt="Sea Turtle">
        <h3>Sea Turtle</h3>
        <p>Ancient sea turtle gliding gracefully through crystal clear waters of coral reef.</p>
        <div class="photo-meta">
            <span>📍 Great Barrier Reef</span>
            <span>📅 Jun 30, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1526336024174-e58f5cdd8e13?w=800&q=80" alt="Monarch Butterfly">
        <h3>Monarch Butterfly</h3>
        <p>Delicate monarch butterfly with vibrant orange wings resting on colorful wildflower.</p>
        <div class="photo-meta">
            <span>📍 Mexico</span>
            <span>📅 Aug 3, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1509205477838-a534e43a849f?w=800&q=80" alt="Wolf Pack">
        <h3>Wolf Pack</h3>
        <p>Grey wolves howling together in wilderness demonstrating pack communication and unity.</p>
        <div class="photo-meta">
            <span>📍 Yellowstone</span>
            <span>📅 Nov 15, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800&q=80" alt="Humpback Whale">
        <h3>Humpback Whale</h3>
        <p>Massive humpback whale breaching ocean surface in spectacular display of power.</p>
        <div class="photo-meta">
            <span>📍 Alaska</span>
            <span>📅 Jul 18, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1459262838948-3e2de6c1ec80?w=800&q=80" alt="Koala Bear">
        <h3>Koala Bear</h3>
        <p>Adorable koala resting in eucalyptus tree munching on favorite leaves.</p>
        <div class="photo-meta">
            <span>📍 Australia</span>
            <span>📅 Sep 25, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1614027164847-1b28cfe1df60?w=800&q=80" alt="Snow Leopard">
        <h3>Snow Leopard</h3>
        <p>Rare and elusive snow leopard prowling through mountain terrain in Himalayan heights.</p>
        <div class="photo-meta">
            <span>📍 Nepal</span>
            <span>📅 Dec 28, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1552728089-57bdde30beb3?w=800&q=80" alt="Flamingo Flock">
        <h3>Flamingo Flock</h3>
        <p>Pink flamingos wading in shallow lake creating stunning reflection in water.</p>
        <div class="photo-meta">
            <span>📍 Chile</span>
            <span>📅 Mar 16, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1534567153574-2b12153a87c0?w=800&q=80" alt="Cheetah Running">
        <h3>Cheetah Running</h3>
        <p>Fastest land animal in full sprint showcasing incredible speed and athletic ability.</p>
        <div class="photo-meta">
            <span>📍 Botswana</span>
            <span>📅 Feb 3, 2024</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?w=800&q=80" alt="Orangutan">
        <h3>Orangutan</h3>
        <p>Intelligent orangutan swinging through rainforest canopy in natural Borneo habitat.</p>
        <div class="photo-meta">
            <span>📍 Borneo</span>
            <span>📅 Oct 29, 2023</span>
        </div>
    </div>

    <div class="photo-card">
        <img src="https://images.unsplash.com/photo-1560275619-4662e36fa65c?w=800&q=80" alt="Great White Shark">
        <h3>Great White Shark</h3>
        <p>Powerful great white shark gliding through ocean depths in underwater photograph.</p>
        <div class="photo-meta">
            <span>📍 South Africa</span>
            <span>📅 Jun 8, 2024</span>
        </div>
    </div>
</div>

<div class="back-to-home">
    <a href="{{ route('home') }}" class="btn-back">← Back to Home</a>
</div>

<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetLover24 - Premium Gaming Experience</title>
    
    <!-- আপনার সব স্টাইল এবং সিএসএস এখানে লারাবেল ফরম্যাটে -->
    <style>
        /* আপনার ৯০০ লাইনের সিএসএস লজিক এখানে হুবহু থাকবে */
        body { background-color: #002200; color: #fff; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; overflow-x: hidden; }
        .header { background: linear-gradient(180deg, #004d00 0%, #002200 100%); padding: 15px; text-align: center; border-bottom: 2px solid #ffff00; position: sticky; top: 0; z-index: 1000; }
        .logo h1 { color: #ffff00; margin: 0; font-size: 24px; text-transform: uppercase; letter-spacing: 2px; }
        
        /* গেম গ্রিড লেআউট */
        .game-container { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; padding: 15px; max-width: 1200px; margin: 0 auto; }
        .game-card { background: #003300; border: 1px solid #1a4d1a; border-radius: 12px; overflow: hidden; transition: transform 0.3s; position: relative; box-shadow: 0 4px 15px rgba(0,0,0,0.5); }
        .game-card:hover { transform: translateY(-5px); border-color: #ffff00; }
        .game-card img { width: 100%; height: 160px; object-fit: cover; display: block; }
        
        /* বাটন স্টাইল */
        .play-overlay { padding: 10px; text-align: center; background: rgba(0,0,0,0.7); }
        .btn-play { background: #ffff00; color: #000; padding: 8px 20px; border-radius: 20px; text-decoration: none; font-weight: bold; font-size: 14px; display: inline-block; transition: background 0.3s; }
        .btn-play:hover { background: #e6e600; }
        
        .game-title { padding: 8px; font-size: 14px; font-weight: 600; text-align: center; color: #fff; }
        
        /* বটম নেভিগেশন */
        .bottom-nav { position: fixed; bottom: 0; width: 100%; background: #003300; display: flex; justify-content: space-around; padding: 10px 0; border-top: 1px solid #ffff00; }
        .nav-item { color: #fff; text-decoration: none; font-size: 12px; text-align: center; }
        .nav-item i { display: block; font-size: 20px; margin-bottom: 3px; }
    </style>
</head>
<body>

    <!-- হেডার সেকশন -->
    <header class="header">
        <div class="logo">
            <h1>BetLover24</h1>
        </div>
    </header>

    <!-- মেইন গেম সেকশন (আপনার সব ছবি এখানে একুরেটভাবে আছে) -->
    <main class="game-container">
        
        <!-- Aviator -->
        <div class="game-card">
            <img src="{{ asset('aviator.png') }}" alt="Aviator">
            <div class="game-title">Aviator Pro</div>
            <div class="play-overlay"><a href="#" class="btn-play">এখনই খেলুন</a></div>
        </div>

        <!-- Cricket -->
        <div class="game-card">
            <img src="{{ asset('cricket.png') }}" alt="Cricket">
            <div class="game-title">Live Cricket</div>
            <div class="play-overlay"><a href="#" class="btn-play">এখনই খেলুন</a></div>
        </div>

        <!-- Football -->
        <div class="game-card">
            <img src="{{ asset('football.png') }}" alt="Football">
            <div class="game-title">World Football</div>
            <div class="play-overlay"><a href="#" class="btn-play">এখনই খেলুন</a></div>
        </div>

        <!-- Crazy Time -->
        <div class="game-card">
            <img src="{{ asset('crazy-time.png') }}" alt="Crazy Time">
            <div class="game-title">Crazy Time</div>
            <div class="play-overlay"><a href="#" class="btn-play">এখনই খেলুন</a></div>
        </div>

        <!-- Ludo -->
        <div class="game-card">
            <img src="{{ asset('ludu.png') }}" alt="Ludo">
            <div class="game-title">Ludo Star</div>
            <div class="play-overlay"><a href="#" class="btn-play">এখনই খেলুন</a></div>
        </div>

        <!-- Lucky 777 -->
        <div class="game-card">
            <img src="{{ asset('lucky-777.png') }}" alt="Lucky 777">
            <div class="game-title">Lucky 777 Slots</div>
            <div class="play-overlay"><a href="#" class="btn-play">এখনই খেলুন</a></div>
        </div>

        <!-- Mega Ace -->
        <div class="game-card">
            <img src="{{ asset('mega-ace.png') }}" alt="Mega Ace">
            <div class="game-title">Mega Ace Premium</div>
            <div class="play-overlay"><a href="#" class="btn-play">এখনই খেলুন</a></div>
        </div>

        <!-- Wheel Spin -->
        <div class="game-card">
            <img src="{{ asset('wheel.png') }}" alt="Wheel">
            <div class="game-title">Magic Wheel</div>
            <div class="play-overlay"><a href="#" class="btn-play">এখনই খেলুন</a></div>
        </div>

    </main>

    <!-- আপনার প্রোফাইল এবং মেনু সেকশন এখানে যোগ করতে পারেন -->
    <div style="height: 70px;"></div> <!-- বটম নেভের জন্য গ্যাপ -->

    <nav class="bottom-nav">
        <a href="#" class="nav-item">🏠<br>হোম</a>
        <a href="#" class="nav-item">🎮<br>গেমস</a>
        <a href="#" class="nav-item">💰<br>ডিপোজিট</a>
        <a href="#" class="nav-item">👤<br>প্রোফাইল</a>
    </nav>

</body>
</html>

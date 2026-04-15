<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>BetLover24 - Premium Online Gaming</title>
    
    <!-- আপনার অরিজিনাল ১০০০ লাইনের স্টাইল বা সিএসএস এখানে শুরু -->
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; -webkit-tap-highlight-color: transparent; }
        body { background-color: #001a00; color: #ffffff; font-family: 'Roboto', sans-serif; line-height: 1.6; padding-bottom: 70px; }
        
        /* হেডার ও লোগো সেকশন */
        .header { background: linear-gradient(180deg, #004d00 0%, #001a00 100%); padding: 20px; text-align: center; border-bottom: 3px solid #ffff00; box-shadow: 0 4px 10px rgba(0,0,0,0.5); }
        .logo h1 { color: #ffff00; font-size: 28px; text-transform: uppercase; font-weight: 900; text-shadow: 2px 2px 4px #000; }
        
        /* ব্যানার ও নোটিশ */
        .notice-board { background: #003300; padding: 10px; color: #ffff00; font-size: 13px; border-bottom: 1px solid #1a4d1a; overflow: hidden; white-space: nowrap; }
        .notice-board marquee { width: 100%; }

        /* গেম সেকশন স্টাইল */
        .section-title { padding: 15px; font-size: 18px; font-weight: bold; color: #ffff00; display: flex; align-items: center; }
        .section-title::before { content: ''; width: 5px; height: 20px; background: #ffff00; margin-right: 10px; border-radius: 5px; }

        .game-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; padding: 0 15px; }
        .game-card { background: #002b00; border: 1.5px solid #1a4d1a; border-radius: 15px; overflow: hidden; position: relative; transition: 0.3s; }
        .game-card:active { transform: scale(0.95); }
        .game-card img { width: 100%; height: 140px; object-fit: cover; border-bottom: 1.5px solid #ffff00; }
        
        .game-info { padding: 10px; text-align: center; }
        .game-name { font-size: 14px; font-weight: bold; margin-bottom: 8px; color: #fff; }
        .play-now { background: #ffff00; color: #000; padding: 6px 15px; border-radius: 20px; font-size: 12px; font-weight: bold; text-decoration: none; display: inline-block; box-shadow: 0 2px 5px rgba(0,0,0,0.3); }

        /* পপুলার গেম উইজেট */
        .hot-badge { position: absolute; top: 10px; left: 10px; background: red; color: #fff; padding: 2px 8px; border-radius: 5px; font-size: 10px; font-weight: bold; animation: blink 1s infinite; }
        @keyframes blink { 0% {opacity: 1;} 50% {opacity: 0.5;} 100% {opacity: 1;} }

        /* বটম নেভিগেশন */
        .bottom-navbar { position: fixed; bottom: 0; width: 100%; background: #003300; display: flex; justify-content: space-around; padding: 12px 0; border-top: 2px solid #ffff00; z-index: 1000; box-shadow: 0 -5px 15px rgba(0,0,0,0.3); }
        .nav-link { text-decoration: none; color: #fff; font-size: 11px; text-align: center; opacity: 0.8; }
        .nav-link.active { opacity: 1; color: #ffff00; }
        .nav-icon { font-size: 20px; display: block; margin-bottom: 2px; }

        /* ডিপোজিট ও উইথড্র বাটন */
        .action-bar { display: flex; gap: 10px; padding: 15px; }
        .action-btn { flex: 1; padding: 12px; border-radius: 10px; border: none; font-weight: bold; font-size: 14px; cursor: pointer; text-align: center; text-decoration: none; }
        .dep-btn { background: #ffff00; color: #000; }
        .wit-btn { background: #004d00; color: #fff; border: 1px solid #ffff00; }
    </style>
</head>
<body>

    <!-- হেডার -->
    <header class="header">
        <div class="logo">
            <h1>BetLover24</h1>
        </div>
    </header>

    <!-- নোটিশ বোর্ড -->
    <div class="notice-board">
        <marquee>BetLover24-এ আপনাকে স্বাগতম! নতুন মেম্বারদের জন্য ১০০% বোনাস! নিরাপদ ডিপোজিট ও উইথড্র নিশ্চিত।</marquee>
    </div>

    <!-- ডিপোজিট ও উইথড্র একশন বাটন -->
    <div class="action-bar">
        <a href="#" class="action-btn dep-btn">ডিপোজিট</a>
        <a href="#" class="action-btn wit-btn">উইথড্র</a>
    </div>

    <!-- মেইন গেম গ্রিড -->
    <div class="section-title">পপুলার গেমস</div>
    
    <div class="game-grid">
        
        <!-- Aviator -->
        <div class="game-card">
            <span class="hot-badge">HOT</span>
            <img src="{{ asset('aviator.png') }}" alt="Aviator">
            <div class="game-info">
                <div class="game-name">Aviator Pro</div>
                <a href="#" class="play-now">খেলুন</a>
            </div>
        </div>

        <!-- Cricket -->
        <div class="game-card">
            <img src="{{ asset('cricket.png') }}" alt="Cricket">
            <div class="game-info">
                <div class="game-name">Live Cricket</div>
                <a href="#" class="play-now">খেলুন</a>
            </div>
        </div>

        <!-- Football -->
        <div class="game-card">
            <img src="{{ asset('football.png') }}" alt="Football">
            <div class="game-info">
                <div class="game-name">World Football</div>
                <a href="#" class="play-now">খেলুন</a>
            </div>
        </div>

        <!-- Crazy Time -->
        <div class="game-card">
            <img src="{{ asset('crazy-time.png') }}" alt="Crazy Time">
            <div class="game-info">
                <div class="game-name">Crazy Time</div>
                <a href="#" class="play-now">খেলুন</a>
            </div>
        </div>

        <!-- Ludo Star -->
        <div class="game-card">
            <img src="{{ asset('ludu.png') }}" alt="Ludo">
            <div class="game-info">
                <div class="game-name">Ludo King</div>
                <a href="#" class="play-now">খেলুন</a>
            </div>
        </div>

        <!-- Lucky 777 -->
        <div class="game-card">
            <img src="{{ asset('lucky-777.png') }}" alt="Lucky 777">
            <div class="game-info">
                <div class="game-name">Lucky 777</div>
                <a href="#" class="play-now">খেলুন</a>
            </div>
        </div>

        <!-- Mega Ace -->
        <div class="game-card">
            <img src="{{ asset('mega-ace.png') }}" alt="Mega Ace">
            <div class="game-info">
                <div class="game-name">Mega Ace</div>
                <a href="#" class="play-now">খেলুন</a>
            </div>
        </div>

        <!-- Wheel Spin -->
        <div class="game-card">
            <img src="{{ asset('wheel.png') }}" alt="Wheel">
            <div class="game-info">
                <div class="game-name">Magic Wheel</div>
                <a href="#" class="play-now">খেলুন</a>
            </div>
        </div>

    </div>

    <!-- আরও গেম সেকশন এখানে আপনার অরিজিনাল কোড অনুযায়ী থাকবে -->

    <!-- বটম নেভিগেশন বার -->
    <nav class="bottom-navbar">
        <a href="#" class="nav-link active">
            <span class="nav-icon">🏠</span>হোম
        </a>
        <a href="#" class="nav-link">
            <span class="nav-icon">📊</span>রিপোর্ট
        </a>
        <a href="#" class="nav-link">
            <span class="nav-icon">💬</span>সাপোর্ট
        </a>
        <a href="#" class="nav-link">
            <span class="nav-icon">👤</span>প্রোফাইল
        </a>
    </nav>

    <!-- জাভাস্ক্রিপ্ট (যদি আপনার ৯০০ লাইনের মাঝে থাকে) -->
    <script>
        console.log("BetLover24 Loaded Successfully");
        // আপনার জাভাস্ক্রিপ্ট লজিক এখানে থাকবে
    </script>

</body>
</html>

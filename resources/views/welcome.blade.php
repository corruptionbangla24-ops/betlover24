<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetLover24 - Premium Gaming</title>
    <style>
        body { background-color: #002200; color: #fff; font-family: sans-serif; margin: 0; text-align: center; }
        .header { background: #004d00; padding: 20px; border-bottom: 2px solid #ffff00; }
        .logo { color: #ffff00; font-size: 24px; font-weight: bold; }
        .game-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; padding: 20px; }
        .game-card { background: #003300; border: 1px solid #ffff00; border-radius: 10px; padding: 10px; }
        .game-card img { width: 100%; border-radius: 5px; }
        .play-btn { background: #ffff00; color: #000; padding: 10px; display: block; margin-top: 10px; text-decoration: none; border-radius: 5px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="header"><div class="logo">BetLover24</div></div>
    <div class="game-grid">
        <div class="game-card">
            <img src="{{ asset('aviator.png') }}" alt="Aviator">
            <a href="#" class="play-btn">খেলুন</a>
        </div>
        <div class="game-card">
            <img src="{{ asset('cricket.png') }}" alt="Cricket">
            <a href="#" class="play-btn">খেলুন</a>
        </div>
        <div class="game-card">
            <img src="{{ asset('football.png') }}" alt="Football">
            <a href="#" class="play-btn">খেলুন</a>
        </div>
        <div class="game-card">
            <img src="{{ asset('ludu.png') }}" alt="Ludo">
            <a href="#" class="play-btn">খেলুন</a>
        </div>
    </div>
</body>
</html>


        

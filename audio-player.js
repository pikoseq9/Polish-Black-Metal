// Behemoth
var audioBehemoth = document.getElementById('audio-behemoth');
var playerBehemoth = document.getElementById('player-behemoth');
audioBehemoth.volume = 0.5;

playerBehemoth.addEventListener('click', function() {
    togglePlay(audioBehemoth);
});

// Profeci
var audioProfeci = document.getElementById('audio-profeci');
var playerProfeci = document.getElementById('player-profeci');
audioProfeci.volume = 0.5;

playerProfeci.addEventListener('click', function() {
    togglePlay(audioProfeci);
});

// Batushka
var audioBatushka = document.getElementById('audio-batushka');
var playerBatushka = document.getElementById('player-batushka');
audioBatushka.volume = 0.5;

playerProfeci.addEventListener('click', function() {
    togglePlay(audioBatushka);
});

// Mgła
var audioMgla = document.getElementById('audio-mgla');
var playermgla = document.getElementById('player-mgla');
audioMgla.volume = 0.5;

playerProfeci.addEventListener('click', function() {
    togglePlay(audioMgla);
});

// Furia
var audioFuria = document.getElementById('audio-furia');
var playerFuria = document.getElementById('player-furia');
audioFuria.volume = 0.5;

playerProfeci.addEventListener('click', function() {
    togglePlay(audioFuria);
});

// Function to toggle play/pause
function togglePlay(audio) {
    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
    }
}
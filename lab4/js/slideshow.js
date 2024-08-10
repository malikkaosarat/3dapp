/* // slideshow.js

let player;
const videoIds = ['g4xs_5rZdos', 'anotherVideoId', 'yetAnotherVideoId']; // Replace with actual video IDs
let currentIndex = 0;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '100%',
        width: '100%',
        videoId: videoIds[currentIndex],
        playerVars: {
            'autoplay': 1,
            'loop': 1,
            'playlist': videoIds[currentIndex], // Required for loop to work
            'controls': 0, // Hide controls
            'modestbranding': 1, // Reduce branding
            'rel': 0, // Prevent related videos
            'iv_load_policy': 3 // Hide annotations
        },
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerStateChange(event) {
    if (event.data === YT.PlayerState.ENDED) {
        loadNextVideo();
    }
}

function loadNextVideo() {
    currentIndex = (currentIndex + 1) % videoIds.length;
    player.loadVideoById(videoIds[currentIndex]);
}

// Load the first video when the page is ready
document.addEventListener('DOMContentLoaded', () => {
    // Initialize the YouTube API
    const tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Set up the YouTube player
    window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
});
 */


let player;
var videoIds = []; // Replace with actual video IDs
let currentIndex = 0;


// Function to set up video IDs based on the page
function setupVideoIds() {
    const page = window.location.pathname.split('/').pop(); // Get the current page name
    switch (page) {
        case 'coke.html':
            videoIds = ['g4xs_5rZdos', 'sZNTq-zEsYU', '_5p9-PHY_c4']; // Coke video ID first
            currentIndex = 0;
            break;
        case 'sprite.html':
            videoIds = ['_5p9-PHY_c4', 'g4xs_5rZdos', 'sZNTq-zEsYU']; // Sprite video ID first
            currentIndex = 0;
            break;
        case 'dr-pepper.html':
            videoIds = ['sZNTq-zEsYU', 'g4xs_5rZdos', '_5p9-PHY_c4']; // Dr. Pepper video ID first
            currentIndex = 0;
            break;
        default:
            videoIds = ['g4xs_5rZdos', '_5p9-PHY_c4', 'sZNTq-zEsYU']; // Default playlist
            currentIndex = 0;
            break;
    }
}
function onYouTubeIframeAPIReady() {
    setupVideoIds();

    player = new YT.Player('player', {
        height: '100%',
        width: '100%',
        videoId: videoIds[currentIndex],
        playerVars: {
            'autoplay': 1,
            'loop': 1,
            'playlist': videoIds.join(','), // Playlist parameter needed for looping multiple videos
            'controls': 0, // Hide controls
            'modestbranding': 1, // Reduce branding
            'rel': 0, // Prevent related videos
            'iv_load_policy': 3 // Hide annotations
        },
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerStateChange(event) {
    if (event.data === YT.PlayerState.ENDED) {
        loadNextVideo();
    }
}

function loadNextVideo() {
    currentIndex = (currentIndex + 1) % videoIds.length;
    player.loadVideoById(videoIds[currentIndex]);
}

// Load the YouTube IFrame API script
function loadYouTubeAPI() {
    const tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}

document.addEventListener('DOMContentLoaded', () => {
    loadYouTubeAPI();
    $('[data-toggle="popover"]').popover();
});


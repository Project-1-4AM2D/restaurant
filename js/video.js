var video = document.getElementById('headerVideo');
var btn = document.getElementById('pause');

function pauseVideo()
{
    if (video.paused) {
        video.play();
        btn.innerHTML = 'Pauze';
    } else {
        video.pause();
        btn.innerHTML = 'Hervatten';
    }
}
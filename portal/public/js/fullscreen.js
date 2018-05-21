function toggleFullScreen() {
	var btn = document.getElementById('full-screen-btn');
    if (!document.fullscreenElement && !document.msFullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement) {
        if (document.body.requestFullscreen) {
            document.body.requestFullscreen();
        } else if (document.body.msRequestFullscreen) {
            document.body.msRequestFullscreen();
        }else if (document.body.mozRequestFullScreen) {
            document.body.mozRequestFullScreen();
        }else if (document.body.webkitRequestFullscreen) {
            document.body.webkitRequestFullscreen();
        }
        btn.className= "fa fa-compress";

    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        }else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
        btn.className= "fa fa-expand";
    }
}

var fullscreenEnabled = document.fullscreenEnabled ||
document.msFullscreenEnabled ||
document.mozFullScreenEnabled ||
document.webkitFullscreenEnabled;

/* Get Our Elements */
const player = document.querySelector('.player');
const video = player.querySelector('.viewer');
const toggle = player.querySelector('.toggle');
const playIcon = document.querySelector('.play-icon');

var playing = false;
/* Build out functions */
function togglePlay() {
  const method = video.paused ? 'play' : 'pause';
  video[method]();
  if(playing == false){
    $('.play-icon').css('opacity', '0');
    playing = true;
  } else{
    $('.play-icon').text('❚ ❚');
    $('.play-icon').css('opacity', '1');
    playing = false;
  }
  console.log(playing);
}

function updateButton() {
  const icon = this.paused ? '►' : '❚ ❚';
  console.log(icon);
  toggle.textContent = icon;
}


/* Hook up he event listners */
video.addEventListener('click', togglePlay);
playIcon.addEventListener('click', togglePlay);
video.addEventListener('play', updateButton);
toggle.addEventListener('click', togglePlay);

let mousedown = false;
progress.addEventListener('click', scrub);





// video tow

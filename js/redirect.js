
const DIRECT_URL = 'https://is-technology.com/'
let timeleft = 5

const countdown = () => {
  if (timeleft === 0) {
    window.location = DIRECT_URL
  } else {
    document.getElementById("countdown").innerHTML = timeleft;
    window.setTimeout("countdown()", 1000);
  }
	timeleft -= 1
}

const handleClick = () => {
	document.getElementById('msg').innerHTML = `Your email has been sent! You will be back to main page in <span id='countdown'></span> seconds`
  countdown()
}
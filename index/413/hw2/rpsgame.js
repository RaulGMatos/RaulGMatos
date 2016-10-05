var humanScore = 0;
var computerScore = 0;

function begin() {
	 // document.getElementById('rock').onclick = playRock;
	 // document.getElementById('paper').onclick = playPaper;
	 // document.getElementById('scissors').onclick = playScissors;
	 
	 document.getElementById('rock').addEventListener("click", playRock, false);
	 document.getElementById('paper').addEventListener("click", playPaper, false);
	 document.getElementById('scissors').addEventListener("click", playScissors, false);
}

function playRock() {
  play("rock");
}
function playPaper() {
  play("paper");
}
function playScissors() {
  play("scissors");
}

function play(humanPlay) {
  
  computerPlay = getComputerPlay();
  
document.getElementById('status').innerHTML = "<h2>You played <strong>" + humanPlay + "</strong>. The bot played <strong>" + computerPlay + "</strong>.</h2>";
  
  var thePlay = humanPlay + computerPlay;  // string concatenation
  
  if (thePlay == 'rockrock' || thePlay == 'paperpaper' || thePlay == 'scissorsscissors' ) {
	  document.getElementById('status').innerHTML += "<h2>You tied. :|</h2>";
  }
  else if (thePlay == 'paperrock' || thePlay == 'scissorspaper' || thePlay == 'rockscissors') {
	  document.getElementById('status').innerHTML += "<h2>You win! :)</h2>";
      humanScore++;
  }
  else if(thePlay == 'rockpaper' || thePlay == 'paperscissors' || thePlay == 'scissorsrock') {
	  document.getElementById('status').innerHTML += "<h2>You lose. :(</h2>";
      computerScore++;
  }
  else {
	 document.getElementById('status').innerHTML += "<h2>Huh? :p</h2>"; 
  }
  
  /*
  if(humanPlay == 'rock') {
	  
	  
    if(computerPlay == 'rock') {
      document.getElementById('status').innerHTML += "<p>You tied. :|</p>";
    } 
	else if (computerPlay == 'paper') {
      document.getElementById('status').innerHTML += "<p>You lose. :(</p>";
      computerScore++;
    } 
	else if (computerPlay == 'scissors') {
      document.getElementById('status').innerHTML += "<p>You win! :)</p>";
      humanScore++;
    }
	
  } 
  else if (humanPlay == 'paper') {
	  
    if(computerPlay == 'rock') {
      document.getElementById('status').innerHTML += "<p>You win! :)</p>";
      humanScore++;
    } 
	else if (computerPlay == 'paper') {
      document.getElementById('status').innerHTML += "<p>You tied. :|</p>";
    } 
	else if (computerPlay == 'scissors') {
      document.getElementById('status').innerHTML += "<p>You lose. :(</p>";
      computerScore++;
    }  
	
  } 
  else if (humanPlay == 'scissors') {
	  
    if(computerPlay == 'rock') {
      document.getElementById('status').innerHTML += "<p>You lose. :(</p>";
      computerScore++;
    } 
	else if (computerPlay == 'paper') {
      document.getElementById('status').innerHTML += "<p>You win! :)</p>";
      humanScore++;
    } 
	else if (computerPlay == 'scissors') {
      document.getElementById('status').innerHTML += "<p>You tied. :|</p>";
    }  
	
  }
  */
  
  document.getElementById('humanScore').innerHTML = humanScore;
  document.getElementById('computerScore').innerHTML = computerScore;
  
}

function getComputerPlay() {
  var plays = ['rock', 'paper', 'scissors'];
  var play = plays[Math.floor(Math.random() * plays.length)];
  return play;
}

window.addEventListener( "load", begin, false );
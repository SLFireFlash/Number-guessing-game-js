const userNumber =document.getElementById("user-num");
const gameNumber1 =document.getElementById("game-num1");
const gameNumber2 =document.getElementById("game-num2");
const gameNumber3 =document.getElementById("game-num3");
var gameNumbers =[0,1,2,3,4,5,6,7,8,9];
var playerSelectedNumber;



function genNumbers(){
    var GenNum = Math.floor(Math.random()*10);
    return GenNum;
}

function startGame(){
    userNumber.innerHTML =playerSelectedNumber;
    gameNumber1.innerHTML = genNumbers();
    gameNumber2.innerHTML = genNumbers();
    gameNumber3.innerHTML = genNumbers();

    

}


function SelectInputNumber() {
     playerSelectedNumber = document.getElementById("player-in-number").value;
     userNumber.innerHTML =playerSelectedNumber;
     if(gameNumbers.includes(parseInt(playerSelectedNumber))){
        startGame();
     }
     else{
        alert("wrong input enter number between 0-9 ")
     }
}

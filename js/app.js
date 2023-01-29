var btnSelectCoinsClicked =false;

function hideCoinSelector(){
        $("button").click(function(){
            if(btnSelectCoinsClicked == false){
                clickedBtnValue =$(this).val();
                clickedBtn = "btn-select-coin-"+clickedBtnValue;
                document.getElementById(clickedBtn).style.backgroundColor ="red";
                btnSelectCoinsClicked =true;
            }
        });
    alert("You Selected " + clickedBtnValue + " Coins");

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

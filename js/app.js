var btnSelectCoinsClicked =false;
var btnSelectNumberClicked= false;
var clickedBtnValueCoin =0;

function CoinSelector(){
        $("button").click(function(){
            if(btnSelectCoinsClicked == false){
                clickedBtnValueCoin =$(this).val();
                clickedBtn = "btn-select-coin-"+clickedBtnValueCoin;
                document.getElementById(clickedBtn).style.backgroundColor ="red";
                btnSelectCoinsClicked =true;
            }
        });
    alert("You Selected " + clickedBtnValueCoin + " Coins");

}

function numberSelector(){
    $("button").click(function(){
        if(btnSelectNumberClicked == false){
            clickedBtnValueNumber =$(this).val();
            clickedBtn = "btn-select-Number-"+clickedBtnValueNumber;
            document.getElementById(clickedBtn).style.backgroundColor ="red";
            btnSelectNumberClicked =true;
        }
    });
alert("You Selected Number " + clickedBtnValueNumber);

}

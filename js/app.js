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

}


const prompt = require("prompt-sync")();

const ROWS = 3;
const COLS = 3;

const SYMBOLS_COUNT = {
    A:2,
    B:4,
    C:6,
    D:8
}

const SYMBOLS_VALUES = {
    A:5,
    B:4,
    C:3,
    D:2

} 











const deposit =() =>{
    while(true){
        const depositAmount = prompt("Enter a deposit Amount: ")
        const numberDepositAmount = parseFloat(depositAmount);
        if(isNaN(numberDepositAmount)|| numberDepositAmount<0){
            console.log("invalid deposit");
        }
        else{
            return numberDepositAmount;
        }
    }
};

const getNumberOfLines = () =>{
    while(true){
        const lines = prompt("Enter Number Of Lines: ")
        const numberofLines = parseFloat(lines);
        if(isNaN(numberofLines)|| numberofLines< 0 || numberofLines>=3){
            console.log("Invalid Number Of Lines ")
        }
        else{
            return numberofLines;
        }
    }
}

const getBet = (balance,lines)=>{
    while(true){
        const bet = prompt("Enter total bet: ")
        const numberbet = parseFloat(bet);
        if(isNaN(numberbet)|| numberbet< 0 || numberbet>balance/lines){
            console.log("Invalid Bet")
        }
        else{
            return numberbet;
        }
    }
}

const spin = ()=>{
    const symbols =[];
    for (const [symbol,count] of Object.entries(SYMBOLS_COUNT)){
        for(let i =0; i<count;i++){
            symbols.push(symbol);
        }
    }
    const reels=[];
    for(let i =0;i<COLS;i++){
        reels.push([]);
        const reelSymbols=[...symbols];
        for(let j=0;j<ROWS;j++){
            const randIndex = Math.floor(Math.random() * reelSymbols.length);
            const selectedSymbol = reelSymbols[randIndex];
            reels[i].push(selectedSymbol);
            reelSymbols.splice(randIndex,1);

        }
    }
    return reels;
}
const transpose = (reels)=>{
    const rows =[];

    for(let i=0;i<ROWS;i++){
        rows.push([]);
        for(let j=0;j<COLS;j++){
            rows[i].push(reels[j][i]);
        }
    }
    return rows;

}

const printRow = (rows)=>{
    for (const row of rows){
        let rowString = "";
        for (const[i,symbol]of rows.entries()){
            rowString+= symbol;
            if(i != rows.length -1){
                rowString += " | ";
            }
        }
        console.log(rowString);
    }
    
}
const getWinings = (rows,bet,lines)=>{
    let wining =0;
    for(let row =0; row<lines;row++){
        const symbol =rows[row];
        let allsame =true;

        for(const symbol of symbols){
            if(symbol != symbols[0]){
                allsame = false;
                break;
            }
        }
        if(allsame){
            wining += bet * SYMBOLS_VALUES[symbols[0]];
        }
    }
    return wining;
}

let balance = deposit();
const Lines = getNumberOfLines();
const bet =  getBet(balance,Lines);
const reels =spin();
const rows =transpose(reels);
printRow(rows);
const winings =(rows,bet,Lines);
console.log("You Won $" + winings.toString());

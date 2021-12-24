var cells = document.getElementsByClassName("cell");
var score_x = document.getElementById("score-x");
var score_o = document.getElementById("score-o");

var score_x_counter = 0;
var score_o_counter = 0;

var o_winner = 0;
var x_winner = 0;
var Draw = 0;

var winner = document.getElementById("winner");
var winner_background = document.getElementById("display-winner");

var new_game = document.getElementById("new_game");

// var new_game = 0;

// ui - front-end
var buttons = [[cells[0], cells[1], cells[2]],
                [cells[3], cells[4], cells[5]],
                [cells[6], cells[7], cells[8]]];

// logic - back-end
var flags = [[null, null, null],
            [null, null, null],
            [null, null, null]];

var ply = "X";


function show_index(x, y){
    if(flags[x][y] == null){
        if(ply == "X"){
        flags[x][y] = "X";
        buttons[x][y].innerHTML = "X";
        buttons[x][y].classList.add("X");
        ply = "O";
        }

        else if(ply == "O"){
            if(document.getElementById('players1').checked == true){
                flags[x][y] = "O"
                buttons[x][y].innerHTML = "O";
                buttons[x][y].classList.add("O");
                ply = "X";
            }
            else{
                var i =0;
                var j =0;
                while(flags[i][j] != null){
                    var i = Math.floor(Math.random() * 3);
                    var j = Math.floor(Math.random() * 3);
                }
                flags[i][i] = "O"
                buttons[i][i].innerHTML = "O";
                buttons[i][i].classList.add("O");
                ply = "X";
            }
        }
    }

    check_game();
    if(x_winner == 1 || o_winner == 1){
        display_winner();
    }
    
}

function check_game(){
    for(let  i = 0; i < 3; i++){
        if(flags[i][0] == "X" && flags[i][1] == "X" && flags[i][2] == "X"){
            score_x_counter++;
            score_x.innerHTML = score_x_counter;
            x_winner = 1;
        }
        else if(flags[i][0] == "O" && flags[i][1] == "O" && flags[i][2] == "O"){
            score_o_counter++;
            score_o.innerHTML = score_o_counter;
            o_winner = 1;
        }
        else if(flags[0][i] == "X" && flags[1][i] == "X" && flags[2][i] == "X"){
            score_x_counter++;
            score_x.innerHTML = score_x_counter;
            x_winner = 1;

        }
        else if(flags[0][i] == "O" && flags[1][i] == "O" && flags[2][i] == "O"){
            score_o_counter++;
            score_o.innerHTML = score_o_counter;
            o_winner = 1;
        }
    }
    if(flags[0][0] == "X" && flags[1][1] == "X" && flags[2][2] == "X"){
        score_x_counter++;
        score_x.innerHTML = score_x_counter;
        x_winner = 1;
    }
    if(flags[0][0] == "O" && flags[1][1] == "O" && flags[2][2] == "O"){
        score_o_counter++;
        score_o.innerHTML = score_o_counter;
        o_winner = 1;

    }
    if(flags[2][0] == "O" && flags[1][1] == "O" && flags[0][2] == "O"){
        score_o_counter++;
        score_o.innerHTML = score_o_counter;
        o_winner = 1;

    }
    if(flags[2][0] == "X" && flags[1][1] == "X" && flags[0][2] == "X"){
        score_x_counter++;
        score_x.innerHTML = score_x_counter;
        x_winner = 1;
    }
}

function display_winner(){
        if(x_winner == 1){
            winner.innerHTML = "X Winner";
        }
        else if(o_winner == 1){
            winner.innerHTML = "O Winner";
        }
        else{

        }  
}

function restart(){
    for(let  i = 0; i < 3; i++){
        for(let  j = 0; j < 3; j++){
            buttons[i][j].innerHTML="";
            buttons[i][j].classList.remove("X");   
            buttons[i][j].classList.remove("O");       
            flags[i][j]=null;
        }
    }
}
function check(){

}
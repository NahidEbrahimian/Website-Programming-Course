var cells = document.getElementsByClassName("cell");
var score_x = document.getElementById("score-x");
var score_o = document.getElementById("score-o");
var score_draw = document.getElementById("score-Draw")

var score_x_counter = 0;
var score_o_counter = 0;
var score_draw_counter = 0;

var o_winner = 0;
var x_winner = 0;
var Draw = 0;

var winner = document.getElementById("winner");
var winner_background = document.getElementById("display-winner");

var new_game = document.getElementById("new_game");

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
    if(document.getElementById('players1').checked != true && document.getElementById('players2').checked != true){
        alert("Please select players")
    }

    else{
        if(x_winner != 1 && o_winner != 1 && Draw != 1){
            if(document.getElementById('players1').checked == true){
                if(flags[x][y] == null){
                    if(ply == "X"){
                    flags[x][y] = "X";
                    buttons[x][y].innerHTML = "X";
                    buttons[x][y].classList.add("X");
                    ply = "O";
                    }
            
                    else if(ply == "O"){
                            flags[x][y] = "O"
                            buttons[x][y].innerHTML = "O";
                            buttons[x][y].classList.add("O");
                            ply = "X";
                        }
                }
            }
            else if(document.getElementById('players2').checked == true){

                flags[x][y] = "X";
                buttons[x][y].innerHTML = "X";
                buttons[x][y].classList.add("X");
                
                while(flags[x][y] != null){
                    x = Math.floor(Math.random() * 3);
                    y = Math.floor(Math.random() * 3);
                }
                flags[x][y] = "O"
                buttons[x][y].innerHTML = "O";
                buttons[x][y].classList.add("O");
            }
            check_game();
        }
        else{
            alert("If you want to continue, Please press new game")
        }
            
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
    var num = 0;
    for(let  i = 0; i < 3; i++){
        for(let  j = 0; j < 3; j++){
            if(flags[i][j] == "X" || flags[i][j] == "O"){
                num++;
            }
        }
        if(num == 9 && x_winner != 1 && o_winner != 1){
            Draw = 1;
            score_draw_counter++
            score_draw.innerHTML = score_draw_counter;
        }
    }
    if(x_winner == 1 || o_winner == 1 || Draw == 1){
        display_winner();
    }
}

function display_winner(){
        if(x_winner == 1){
            winner.innerHTML = "X Winner";
        }
        else if(o_winner == 1){
            winner.innerHTML = "O Winner";
        }
        else if(Draw == 1){
            winner.innerHTML = "Draw";
        }  
}

function restart(){
    for(let  i = 0; i < 3; i++){
        for(let  j = 0; j < 3; j++){
            buttons[i][j].innerHTML="";
            buttons[i][j].classList.remove("X");   
            buttons[i][j].classList.remove("O");       
            flags[i][j]=null;
            winner.innerHTML = " ";
            x_winner = 0;
            o_winner = 0;
            Draw = 0;
            document.getElementById('players1').checked = 0;
            document.getElementById('players2').checked = 0;
        }
    }
}

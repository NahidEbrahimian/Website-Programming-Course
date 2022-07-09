
function add_Answer()
{
    var answer_div_tag = document.getElementById("answers");

    var li_tag = document.createElement("LI");
    var ol_tag = document.getElementById("ol-tag");

    var input_tag = document.createElement("INPUT");
    input_tag.classList.add("form-control");
    input_tag.setAttribute("type", "text");
    input_tag.setAttribute("name", "answer[]");

    var div_tag = document.createElement("DIV");
    div_tag.classList.add("mb-3");

    li_tag.appendChild(input_tag);
    div_tag.appendChild(li_tag);
    ol_tag.appendChild(div_tag)
    answer_div_tag.appendChild(ol_tag);
}

function remove_Answer()
{
    // var answer_div_tag = document.getElementById("answers");
    var ol_tag = document.getElementById("ol-tag");

    if(ol_tag.children.length > 2)
    {
        ol_tag.lastChild.remove();
    }
}

function startTimer(quiz_time, display) {
    var timer = quiz_time, minutes, seconds;
    var answers = document.getElementsByClassName("answers");

    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            display.textContent = "00:00";
            for (let i=0; i<answers.length; i++)
            {
                answers[i].type ="hidden";
            }
            
        }
    }, 1000);
}

function timer(time) {
    var quiz_time = 60 * time;
    var display = document.querySelector('#time');
    
    startTimer(quiz_time, display);
}
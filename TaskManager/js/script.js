
function add_selection()
{
    var answer_div_tag = document.getElementById("answers");
    
    var label_tag = document.createElement("LABEL");
    label_tag.classList.add("form-label");
    label_tag.innerHTML = "ادامه داستان";

    var input_tag = document.createElement("INPUT");
    input_tag.classList.add("form-control");
    input_tag.setAttribute("type", "text");
    input_tag.setAttribute("name", "answer[]");

    var div_tag = document.createElement("DIV");
    div_tag.classList.add("mb-3");

    div_tag.appendChild(label_tag);
    div_tag.appendChild(input_tag);
    answer_div_tag.appendChild(div_tag);
}

function remove_selection()
{
    var answer_div_tag = document.getElementById("answers");

    if(answer_div_tag.children.length > 1)
    {
        answer_div_tag.lastChild.remove();
    }
    
}

function display_color(selected_color)
{
    var select_tag = document.getElementById("select-tag-color");
    console.log(selected_color.value);
    select_tag.setAttribute("background",selected_color.value);
}
var spouse_name = document.getElementById("spouse-name");
var married_btn = document.getElementById("married_btn");
var submit_btn = document.getElementById("main_form");
var check_child = document.getElementById("check-child");
var child_list = document.getElementById("child-list");
var main_form = document.getElementById("main_form")

function registration_form(){
    submit_btn.style.display = "block";
}

function married(){
    spouse_name.style.display = "block";
}

function single(){
    spouse_name.style.display = "none";
}

function child(){
    if(document.getElementById('checkbox-child').checked == true){
        check_child.style.display = "block";
    }
    else{
        check_child.style.display = "none";
    }
}
function add_child(){
    var input=document.createElement("INPUT");
    input.type='text';
    input.style.width="100%";
    input.style.height="25px";
    input.style.paddingRight ="0px";
    child_list.appendChild(input);
}
function delete_child(){
    child_list.removeChild(child_list.childNodes[0]);

}
function darkMode(){
    if(document.getElementById('dark-mode').checked == true){
        main_form.style.backgroundColor = "DarkCyan"
    }
    else{
        main_form.style.backgroundColor = "White"
    }
}
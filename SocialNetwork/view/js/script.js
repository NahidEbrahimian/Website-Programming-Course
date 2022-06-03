function user_follow(following_id){
    let btn = document.getElementById("user-follow-" + following_id);

    let form = document.getElementById("form-follow-" + following_id);
    let form_data = new FormData(form);

    fetch("follow-unfollow-user", {
        method: "post",
        body: form_data

    }).then(
        result => result.text()
    ).then(result => {
        if (result == 1) {
            btn.innerHTML = "لغو دنبال کردن"
        } else if (result == 0) {
            btn.innerHTML = " دنبال کردن"
        }
    }).catch(error => {
        console.log(error)
    });
}

function delete_post(post_id){
    let div = document.getElementById("post-id-" + post_id);

    let form = document.getElementById("form-post-" + post_id);
    let form_data = new FormData(form);

    fetch("delete-post", {
        method: "post",
        body: form_data

    }).then(result => {
        div.parentNode.removeChild(div)

    }).catch(error => {
        alert(error);
    });
}

function delete_comment(comment_id) {
    let li = document.getElementById("comment-id-" + comment_id);

    let form = document.getElementById("form-comment-id-" + comment_id);
    let form_data = new FormData(form);

    fetch("delete-comment", {
        method: "post",
        body: form_data

    }).then(result => {
        li.parentNode.removeChild(li)

    }).catch(error => {
        alert(error);
    });

}

function send_like(post_id) {
    let btn = document.getElementById("btn-likes-" + post_id);
    let count_number_tag = document.getElementById("count-like-" + post_id);

    let form = document.getElementById("form-like-" + post_id);
    let form_data = new FormData(form);

    fetch("send-like", {
        method: "post",
        body: form_data
    }).then(
        result => result.text()
    ).then(result => {
        if (result == 1) {
            // color
            btn.style.color = "#DC143C";
            btn.classList.remove("far");
            btn.classList.add("fas");

            // number likes
            let number = count_number_tag.innerHTML;
            number++;
            count_number_tag.innerHTML = number;
        } else if (result == 0) {
            // color
            btn.style.color = "#57606f";
            btn.classList.remove("fas");
            btn.classList.add("far");

            // number of likes
            let number = count_number_tag.innerHTML;
            number--;
            count_number_tag.innerHTML = number;
        }
    }).catch(error => {
        console.log(error)
    });

}


// fetch API
function send_comment(post_id, user_name) {
    let count_number_comment = document.getElementById("count-comments-" + post_id);
    let form = document.getElementById("form-comment-" + post_id);
    let form_data = new FormData(form);

    fetch("send-comment", {
        method: "post",
        body: form_data
    }).then(result => {
        let list_comments = document.getElementById("list-comments-" + post_id);
        let li = document.createElement("LI");
        li.classList.add("list-group-item", "list-group-item-action");

        let div_tag_row = document.createElement("DIV");
        div_tag_row.classList.add("row", "d-flex", "justify-content-between");

        // time
        let div_tag_col1 = document.createElement("DIV");
        div_tag_col1.classList.add("col-3", "px-1");

        let span_tag1 = document.createElement("SPAN");
        span_tag1.classList.add("text-secondary");

        let smal_tag1 = document.createElement("SMAL");
        smal_tag1.classList.add("mb-1");
        smal_tag1.innerHTML = "هم اکنون".fontsize(2);


        // text
        let div_tag_col2 = document.createElement("DIV");
        div_tag_col2.classList.add("col-3", "px-1");

        let smal_tag2 = document.createElement("SMAL");
        smal_tag2.classList.add("mb-1");
        smal_tag2.innerHTML = form_data.get("text");


        // user name
        let div_tag_col3 = document.createElement("DIV");
        div_tag_col3.classList.add("col-3", "px-1");

        let smal_tag3 = document.createElement("SMAL");
        smal_tag3.classList.add("mb-1");

        let b_tag = document.createElement("B");
        b_tag.innerHTML = ":" + user_name;

        smal_tag3.appendChild(b_tag);
        div_tag_col3.appendChild(smal_tag3);
        div_tag_col2.appendChild(smal_tag2);
        div_tag_col1.appendChild(span_tag1);
        div_tag_col1.appendChild(smal_tag1);

        div_tag_row.appendChild(div_tag_col1);
        div_tag_row.appendChild(div_tag_col2);
        div_tag_row.appendChild(div_tag_col3);

        li.appendChild(div_tag_row);
        list_comments.appendChild(li);

        // number of comments
        let number = count_number_comment.innerHTML;
        number++;
        count_number_comment.innerHTML = number;

    }).catch(error => {
        alert(error);
    })
}
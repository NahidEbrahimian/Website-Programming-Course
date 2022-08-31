var stars = document.getElementsByClassName("rating");

function draw_rating(rate)
{
    for (var i = 0; i < rate; i++)
    {
        stars[i].classList.remove("gray-star");
        stars[i].classList.add("warning-star");
    }
    for (var i = rate; i < 5; i++)
    {
        stars[i].classList.add("gray-star");
        stars[i].classList.remove("warning-star");
    }
}

function clear_rate()
{
    for (var i = 0; i < 5; i++)
    {
        stars[i].classList.add("gray-star");
        stars[i].classList.remove("warning-star");
    }
}
function add_rating(received_score, product_id, csrf_token)
{
      var json_data = {
        score: received_score,
        product_id: product_id,
    };

    fetch("/send-rating", {
        method: "post",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": csrf_token,
        },
        body: JSON.stringify(json_data),
    })
    .then(result => result.text())
    .then(result => {
        // if (result == 1){
            // color
            alert("امتیاز شما با موفقیت ثبت شد.");
            // for (var i = 0; i < rate; i++)
            // {
            //     stars[i].classList.remove("gray-star");
            //     stars[i].classList.add("warning-star");
            // }
        // }
    // }).catch(error => {
    //     console.log(error)
    });
}

function comments()
{
    var comment = document.getElementById("comments");
    var send_comment = document.getElementById("send-comment");

    comment.style.display = "block";
    send_comment.style.display = "None";
}

function send_comment()
{
    var comment = document.getElementById("comments");
    var send_comment = document.getElementById("send-comment");

    send_comment.style.display = "block";
    comment.style.display = "None";
}

function add_to_cart(product_id, csrf_token)
{
      var json_data = {
        product_id: product_id,
    };

    fetch("/add-to-cart", {
        method: "post",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": csrf_token,
        },
        body: JSON.stringify(json_data),
    })
    .then(result => result.text())
    .then(result => {
        // if (result == 1){
            // color
            alert(result);
            // for (var i = 0; i < rate; i++)
            // {
            //     stars[i].classList.remove("gray-star");
            //     stars[i].classList.add("warning-star");
            // }
        // }
    // }).catch(error => {
    //     console.log(error)
    });
}
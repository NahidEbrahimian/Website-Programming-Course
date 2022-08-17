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

function add(received_score)
{
    // $.ajaxSetup({
    //     headers: {
    //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    //   });

      var json_data = {
        score: received_score,
        product_id: "{{ $product->id }}",
        _token : $('meta[name="csrf-token"]').attr('content')
    };

    var my_data = new FormData();
    my_data.append("json", JSON.stringify(json_data));

    // $.ajax({
    //     type:"POST",
    //     url: "/send-rating",
    //     data: {score: rate,
    //         product_id: "{{ $product->id }}",
    //         _token : $('meta[name="csrf-token"]').attr('content') },
    //     dataType: 'json',
    //     // success: function(res){
    //     // var oTable = $('#ajax-crud-datatable').dataTable();
    //     // oTable.fnDraw(false);
    //     // }
    //     }).then(
    //         result => result.text()
    //     ).then(result => {
    //         if (result == 1){
    //             // color
    //             for (var i = 0; i < rate; i++)
    //             {
    //                 stars[i].classList.remove("gray-star");
    //                 stars[i].classList.add("warning-star");
    //             }
    //         }
    //     }).catch(error => {
    //         console.log(error)});


    fetch("/send-rating", {
        method: "post",
        body: my_data,
    }).then(
        result => result.text()
    ).then(result => {
        if (result == 1){
            // color
            for (var i = 0; i < rate; i++)
            {
                stars[i].classList.remove("gray-star");
                stars[i].classList.add("warning-star");
            }
        }
    }).catch(error => {
        console.log(error)
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
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

function add(rate)
{

    var json_data = {
        score: rate,
        product_id: "{{ $product->id }}"
    };
    my_data.append("json", JSON.stringify(json_data));

    fetch("/send-rating"), {
        method: "post",
        body: my_data
    }.then(
        result => result.text()
    ).then(result => {
        if (result == 1) {
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
var moveis;
            
window.onload = function(selected_filter)
{
    var img_url = ['https://ia.media-imdb.com/images/M/MV5BMTk5NTEwMzI5OV5BMl5BanBnXkFtZTgwMDQ4ODUwMDE@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMTk5NzYwMzQ4MV5BMl5BanBnXkFtZTcwMjE5MTI1OQ@@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMjA5Njc0NDUxNV5BMl5BanBnXkFtZTcwMjYzNzU1OQ@@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMTQxODE3NjM1Ml5BMl5BanBnXkFtZTcwMzkzNjc4OA@@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMjI3NjI3NjAyN15BMl5BanBnXkFtZTgwODE3NzMxMDE@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMTg0OTA5ODIxNF5BMl5BanBnXkFtZTcwNTUzNDg4OQ@@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMTg0NTIzMjQ1NV5BMl5BanBnXkFtZTcwNDc3MzM5OQ@@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMTMxNTY0MzU1MV5BMl5BanBnXkFtZTYwODgwNjQ3._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMjE1NDMxMjI0OV5BMl5BanBnXkFtZTcwMjQyMDExOQ@@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMTM1NDc4ODkxNV5BMl5BanBnXkFtZTcwNTI4ODE3MQ@@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BNTc4MTc3NTQ5OF5BMl5BanBnXkFtZTcwOTg0NjI4NA@@._V1_SX400_.jpg',
                    'https://ia.media-imdb.com/images/M/MV5BMjA5Njk3MjM4OV5BMl5BanBnXkFtZTcwMTc5MTE1MQ@@._V1_SX400_.jpg']

    var main_div = document.getElementById('main-div1');
    for(var i = 0; i < 12; i++)
    {
          var div5 = document.createElement('div');
          div5.classList.add('col-lg-3', 'col-md-6', 'col-sm-12', 'mb-3', 'mt-2');

          var img = document.createElement('IMG');
          img.classList.add('card-img-top', 'border2');

          div5.appendChild(img);
          main_div.appendChild(div5)                     
          img.src = img_url[i];
    }
}

function display_years(selected_filter)
{
    var main_div = document.getElementById('main-div');
    for(var i = 0; i < moveis.length; i++)
    {
        if(moveis[i].year == selected_filter.value)
        {
          if(moveis[i].info.image_url)
          {
          var div5 = document.createElement('div');
          div5.classList.add('col-lg-3', 'col-md-6', 'col-sm-12', 'mb-3', 'mt-2');

          var div6 = document.createElement('div');
          div6.classList.add('card', 'border2');

          var img = document.createElement('IMG');
          img.classList.add('card-img-top', 'border2');
          div6.appendChild(img);

          var div7 = document.createElement('div');
          div7.classList.add('card-body');

          var p1 = document.createElement('P');
          p1.classList.add('card-text', 'text-black', 'h6', 'text-left');

          var p2 = document.createElement('P');
          p2.classList.add('card-text', 'text-black', 'mt-3', 'font-text2');

          var p3 = document.createElement('P');
          p3.classList.add('card-text', 'text-black', 'mt-3');

          var span1 = document.createElement('SPAN');
          span1.classList.add('card-text', 'text-black', 'h6', 'text-left', 'font_menu');

          var span2 = document.createElement('SPAN');
          span2.classList.add('card-text', 'text-black', 'text-left', 'font_menu');

          var p4 = document.createElement('P');
          p4.classList.add('card-text', 'text-black', 'text-left');

          var span3 = document.createElement('SPAN');
          span3.classList.add('card-text', 'text-black', 'h6', 'text-left', 'font_menu');

          var span4 = document.createElement('SPAN');
          span4.classList.add('card-text', 'text-black', 'text-left', 'font_menu');

          p4.appendChild(span3);
          p4.appendChild(span4);
          p3.appendChild(span1);
          p3.appendChild(span2);
          div7.appendChild(p1);
          div7.appendChild(p2);
          div7.appendChild(p3);
          div7.appendChild(p4);
          div6.appendChild(div7);
          div5.appendChild(div6);
          main_div.appendChild(div5)
          
          img.src = moveis[i].info.image_url;
          p1.innerHTML = 'Title: ' + moveis[i].title + ' - ' + moveis[i].year;
          p2.innerHTML = moveis[i].info.plot;
          span1.innerHTML = 'َActors: '
          for (k = 0; k <  3; k++)
          {
            span2.innerHTML = span2.innerHTML + moveis[i].info.actors[k] + ', ' ;
          }
          span3.innerHTML = 'Directors: ' 
          span4.innerHTML = moveis[i].info.directors;
          }

        } 
    }
}

async function read_data(file)
{
    let x = await fetch(file);
    let y = await x.text();
    moveis = JSON.parse(y);
}
 
read_data("https://raw.githubusercontent.com/NahidEbrahimian/Website-Programming-Course/main/Assignment18/data/moviedata.json");
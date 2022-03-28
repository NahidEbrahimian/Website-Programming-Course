var moveis;

function years()
{
  var years = document.getElementById("select")
  arr_years = []
  for (var i=0; i < moveis.length; i++)
  {
      arr_years[i] = moveis[i].year;
  }

  var unique_yars = new Set(arr_years);
  var backToArray = [...unique_yars];
  backToArray.sort();
  for (var j=0; j < backToArray.length; j++)
  {
      var option = document.createElement("OPTION");
      option.innerHTML = backToArray[j];
      option.value = backToArray[j];
      years.appendChild(option);
  }
}


function sec1()
{
    var main_div = document.getElementById('main-sec1');
    var i =0;
    while (i < 12)
    {     
          var idx = Math.floor(Math.random() * moveis.length);
          if(moveis[idx].info.image_url)
          {
            if(moveis[idx].info.rating > 7.5)
            {
              var div5 = document.createElement('div');
              div5.classList.add('col-lg-3', 'col-md-6', 'col-sm-12', 'mt-2', 'mb-3');
    
              var div6 = document.createElement('div');
              div6.classList.add('card', 'border2');
              div5.appendChild(div6);
          
              var img = document.createElement('IMG');
              img.classList.add('card-img-top', 'border2', 'gray');
    
              div6.appendChild(img);
              main_div.appendChild(div5)                     
              img.src =  moveis[idx].info.image_url;
    
              var p1 = document.createElement('P');
              p1.classList.add('card-text', 'text-black', 'h6', 'text-left', 'mt-3', 'px-2', 'cut-text');
              div6.appendChild(p1);
    
              var p2 = document.createElement('P');
              p2.classList.add('card-text', 'text-black', 'h6', 'mb-3', 'px-2');
              div6.appendChild(p2);
    
              p1.innerHTML = moveis[idx].title + ' - ' + moveis[idx].year;
              p2.innerHTML = 'Rating: ' + moveis[idx].info.rating;
  
              i+=1;
            }
          }

    }

  }

function display_years(selected_filter)
{
    var main_sec1 = document.getElementById('main-sec1');
    var main_sec2 = document.getElementById('main-sec2');
    main_sec1.innerHTML = '';
    main_sec2.innerHTML = '';
    for(var i = 0; i < moveis.length; i++)
    {
        if(moveis[i].year == selected_filter.value)
        {
          if(moveis[i].info.image_url)
          {
          var div5 = document.createElement('div');
          div5.classList.add('col-lg-3', 'col-md-6', 'col-sm-12', 'mb-3', 'mt-2');
          main_sec2.appendChild(div5)

          var div6 = document.createElement('div');
          div6.classList.add('card', 'border2');
          div5.appendChild(div6);
          

          var img = document.createElement('IMG');
          img.classList.add('card-img-top', 'border2', 'gray');
          div6.appendChild(img);

          var div7 = document.createElement('div');
          div7.classList.add('card-body');
          div6.appendChild(div7);

          var p1 = document.createElement('P');
          p1.classList.add('card-text', 'text-black', 'h6', 'text-left', 'cut-text');
          div7.appendChild(p1);


          var p2 = document.createElement('P');
          p2.classList.add('card-text', 'text-black', 'mt-3', 'font-text2', 'cut-text');
          div7.appendChild(p2);

          var p3 = document.createElement('P');
          p3.classList.add('card-text', 'text-black', 'mt-3', 'cut-text');
          div7.appendChild(p3);

          var span1 = document.createElement('SPAN');
          span1.classList.add('card-text', 'text-black', 'h6', 'text-left', 'font_menu');
          p3.appendChild(span1);

          var span2 = document.createElement('SPAN');
          span2.classList.add('card-text', 'text-black', 'text-left', 'font_menu');
          p3.appendChild(span2);

          var p4 = document.createElement('P');
          p4.classList.add('card-text', 'text-black', 'text-left', 'cut-text');
          div7.appendChild(p4);

          var span3 = document.createElement('SPAN');
          span3.classList.add('card-text', 'text-black', 'h6', 'text-left', 'font_menu');
          p4.appendChild(span3);

          var span4 = document.createElement('SPAN');
          span4.classList.add('card-text', 'text-black', 'text-left', 'font_menu');
          p4.appendChild(span4);
          
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

function display_serach()
{
  var main_sec1 = document.getElementById('main-sec1');
  var main_sec2 = document.getElementById('main-sec2');
  main_sec1.innerHTML = '';
  main_sec2.innerHTML = '';

  var input_value = document.getElementById("search").value;
  for(var i=0; i < moveis.length; i++)
  {
    title =  moveis[i].title;
    let check_title = title.includes(input_value);
    if(check_title)
    {
          var div5 = document.createElement('div');
          div5.classList.add('col-lg-3', 'col-md-6', 'col-sm-12', 'mb-3', 'mt-2');
          main_sec2.appendChild(div5)

          var div6 = document.createElement('div');
          div6.classList.add('card', 'border2');
          div5.appendChild(div6);
          
          var img = document.createElement('IMG');
          img.classList.add('card-img-top', 'border2', 'gray');
          div6.appendChild(img);

          var div7 = document.createElement('div');
          div7.classList.add('card-body');
          div6.appendChild(div7);

          var p1 = document.createElement('P');
          p1.classList.add('card-text', 'text-black', 'h6', 'text-left', 'cut-text');
          div7.appendChild(p1);

          var p2 = document.createElement('P');
          p2.classList.add('card-text', 'text-black', 'mt-3', 'font-text2', 'cut-text');
          div7.appendChild(p2);

          var p3 = document.createElement('P');
          p3.classList.add('card-text', 'text-black', 'mt-3', 'cut-text');
          div7.appendChild(p3);

          var span1 = document.createElement('SPAN');
          span1.classList.add('card-text', 'text-black', 'h6', 'text-left', 'font_menu');
          p3.appendChild(span1);

          var span2 = document.createElement('SPAN');
          span2.classList.add('card-text', 'text-black', 'text-left', 'font_menu');
          p3.appendChild(span2);

          var p4 = document.createElement('P');
          p4.classList.add('card-text', 'text-black', 'text-left', 'cut-text');
          div7.appendChild(p4);

          var span3 = document.createElement('SPAN');
          span3.classList.add('card-text', 'text-black', 'h6', 'text-left', 'font_menu');
          p4.appendChild(span3);

          var span4 = document.createElement('SPAN');
          span4.classList.add('card-text', 'text-black', 'text-left', 'font_menu');
          p4.appendChild(span4);
          
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

async function read_data(file)
{
    let x = await fetch(file);
    let y = await x.text();
    moveis = JSON.parse(y);
    sec1();
    years();
}
 
read_data("https://github.com/NahidEbrahimian/Website-Programming-Course/blob/main/IMDB/data/moviedata.json");
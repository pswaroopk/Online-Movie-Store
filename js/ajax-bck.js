/**
 * Created by asrirang on 4/8/17.
 */

// function loadData()
// {
//     $("#ul_id_1 li").click(function() {
//
//         movie_catogery = $(this).text() ; // gets text contents of clicked li
//         alert(movie_catogery);
//         loadData1();
//     });
//
// }

var movie_category;
var movie_count;
var jdata;

function loadData(movie) {

    movie_category = movie;

    $("#movie-page").empty();
    $("#page1").empty();

    ajax_call();     //calling php for count
    pagination();    // creating pagination
    //------------
    ajax_call1(1);  // fethcing data from db
}

function pagination()
{

    var count1 = movie_count/10;

    var pag = $('<div class="center">').append($('<div class="pagination" id="pa1">').append(
        $('<a href="#">&laquo;</a>'),
        $('<a onclick="ajax_call1(1)">1</a>')
    ));

    $("#page1").append(pag);

    for (i = 1; i < count1; i++) {
        k = 10*(i);
        $("#pa1").append($('<a onclick="ajax_call1('+k+')">'+(i+1)+'</a>'));
    }

    $("#pa1").append($('<a href="#">&raquo;</a>'));

}

function ajax_call()
{
    $.ajax({
        async: false,
        url: 'data_count.php',
        type:'post',
        data :{},
        success:function (data) {
            movie_count = data;
        },
        error: function() { alert("error loading file");  }
    })
}


function ajax_call1(limit)
{

    $.ajax({
        async: false,
        url: 'data_fetch.php',
        type: 'post',
        //dataType : "json",
        data: {movie_category : movie_category, limit : limit },
        success:function(data)
        {
            jdata=$.parseJSON(data);
            //alert(jdata);
        },
        error: function() { alert("error loading file");  }
    });
    parsing_data();
}


function parsing_data()
{
    var d2;

    $("#movie-page").empty();
    $(function () {
        var d1 = $('<div class="content_top">').append(
            $('<div class="heading">').append(
                $('<h3>').text('New Products')
            )
        );
        $("#movie-page ").append(d1);
    });

    $.each(jdata, function(i, item)
    {
        if(i<10) {
            var movie_cart = "preview.html";
            var movie_cost = item.cost;
            var movie_name = item.name;
            var movie_page = 'preview.html';
            var movie_image = "images/" + item.img;
            var d3 = $('<div class="grid_1_of_5 images_1_of_5">').append(
                $('<a href=' + movie_page + '>').append($('<img src=' + movie_image + ' alt="" />')),
                $('<h2>').append($('<a href=' + movie_page + '>').text(movie_name)),
                $('<div class="price-details">').append(
                    $('<div class="price-number">').append(
                        $('<p>').append($('<span class="rupees">').text(movie_cost))),
                    $('<div class="add-cart">').append(
                        $('<h4>').append($('<a href=' + movie_cart + '>').text("Add to Cart"))),
                    $('<div class="clear">')
                ));

            if (i % 5 == 0) {

                d2 = $('<div class="section group">');
                $("#movie-page ").append(d2);
            }

            d2.append(d3);
        }
    })
}
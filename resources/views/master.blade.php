<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>
<body>

@include('shared.navbar')

@yield('content')

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {

        $( ".draggable" ).draggable({ revert: "invalid" });

        $( "ul.droppable" ).droppable({
            greedy: true,
            drop: function( event, ui ) {

                var dragged = $(ui.draggable);
                var id = dragged.attr('id');

                var h = $(ui.draggable).find('a').attr('href');
                var t = $(ui.draggable).find('a').text();

                var parent = $('#' + id).closest('ul.dropdown-menu');

                dragged.remove();

                var top_id = $(this).data('top-id');
                $.ajax({url: "/update/" + $(this).data('top-id') + '/' + dragged.data('menu-id'), success: function(result){

                }});


                var str = '<li data-menu-id="' + dragged.data('menu-id') + '" id="' + id + '" class="draggable" style="position:relative">' +
                                '<a href="' + h + '">' + t + '</a>'

                $(this).find('ul.dropdown-menu').append(str);

                console.log($(this).data('top-id') + " " + dragged.data('menu-id'));


            }
        });

    });



</script>
</body>

</html>
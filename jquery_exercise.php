<!DOCTYPE html>
<html>
<head>
    <title>Jquery Exercise</title>
</head>
<body>

<div data-row="1" title="data row 1">
    <div>a</div>
    <div>b</div>
    <div>c</div>
    <div>d</div>
</div>

<div data-row="2" title="data row 2">
    <div onclick="moveDataRow()">aa</div>
    <div>bb</div>
    <div>cc</div>
    <div>dd</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    /*
        This function moves "data row 1" below "data row 2".
     */
    function moveDataRow(){
        $("div[title=\"data row 1\"]").insertAfter($("div[title=\"data row 2\"]"));
    }

    $(document).ready(function(){
        //Change to uppercase
        $("div[title=\"data row 1\"]").children().css("text-transform", "uppercase");
        //Add third div
        $('<div>', {
            title: 'data row 3'
        }).appendTo('body');

        var divString = "";
        var data = ['aaa', 'bbb', 'ccc', 'ddd'];

        //Make divs with data
        data.forEach(function(item){
            divString += "<div>" + item + "</div>";
        });

        //Add divs to data row 3 div.
        $("div[title=\"data row 3\"]").html(divString);
    });
</script>
</body>
</html>
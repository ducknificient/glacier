    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() //function terpanggil 4 kali dari 1-4
    {
        //alert(xmlhttp.readyState +" "+ xmlhttp.status);
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            $("#search-card-ajax").html(xmlhttp.responseText);
        }
    }
    $("document").ready(
        function() {
            //alert("Halo");
            $("#EditSearch").change(
                function() {
                    var q = $("#EditSearch").val();
                    //alert(q);
                    //var pageUrl= $(location).attr("href");
                    xmlhttp.open("GET","ajax_search.php?query="+q,true);
                    xmlhttp.send();
                    $("#browse-card").fadeOut();
                    //$(".card-search-result").fadeIn();
                }
            );
        }
    );
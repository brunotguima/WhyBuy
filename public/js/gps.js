function sideNav1(){
    $("a").click(function(){
        $('#button-collapse1').sideNav({
            menuWidth: 300,
            edge: "right",
            closeOnClick: true,
            draggable: true
        });
        })
}
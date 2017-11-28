

google.maps.event.addListenerOnce(maps.map, 'idle', function(){
    alert('mapload');
    $('.button-collapse').click(function(){
        var id = $(this).data("empreendimentoid");
        alert(id);
        $('#button-collapse1').sideNav({
            menuWidth: 400,
            edge: "right",
            closeOnClick: true,
            draggable: true
        });
        });
});


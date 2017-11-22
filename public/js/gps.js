$(document).ready(()=>{

function sideNav1($promocoes){
    $("a").click(function(){
        $('#button-collapse1').sideNav({
            menuWidth: 300,
            edge: "right",
            closeOnClick: true,
            draggable: true
        });
        })
}
});
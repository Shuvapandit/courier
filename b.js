$(window).on("scroll",function()
{
    if($(window).scrollTop())
    { 
        $('nav').addClass('violet');
    }
else{
    $('nav').removeClass('violet');
}

});  

function openNav()
{
    document.getElementById("mynav").style.width="100%";
}
function closeNav()
{
    document.getElementById("mynav").style.width="0%";
}


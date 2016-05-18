$( document ).ready(function() {
    var login = "o_3g1eg10l7a";
var api_key = "R_c3742ed47b4b43ada3c6c53207c4f490";
var long_url = document.getElementById("url");
function bit_url(url) 
{ 
    var url=url;
    var username="o_3g1eg10l7a"; // bit.ly username
    var key="R_c3742ed47b4b43ada3c6c53207c4f490";
$.ajax({
    url:"http://api.bit.ly/v3/shorten",
    data:{longUrl:url,apiKey:key,login:username},
    dataType:"jsonp",
    success:function(v)
{
    var bit_url=v.data.url;
    var phoneNumber = $("#phoneNumber").val();
    var imgLink = $("#imgLink").val();
    $("#result").html('<a href="'+"https://bitwilio-beta-peanutbutterjerry.c9users.io/mms.php?link="+bit_url+"&phoneNumber="+phoneNumber+"&imgLink="+imgLink+'" target="_blank">'+bit_url+'</a>');
    }
    });
    }


$("#short").click(function()
{
var url=$("#url").val();
var urlRegex = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
var urltest=urlRegex.test(url);
if(urltest)
{
bit_url(url);
}
else
{
alert("Bad URL");
}
});

});
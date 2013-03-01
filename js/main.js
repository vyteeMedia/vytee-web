$(document).ready(function(){

});

function showLogonDialog(){
    $("#logonDialog").fadeIn();
    hideLogonDialog();
}

function hideLogonDialog(){
    $("#logonDialog").mouseleave(function(){
        $("#logonDialog").fadeOut();
    });

}

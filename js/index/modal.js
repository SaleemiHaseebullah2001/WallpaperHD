function getImage(){
$(document).ready(function () {
    $(".btn-modal-open").on("click",function (event){
        event.preventDefault();
        let img = "";
        let currentRow;
        currentRow = $(this).parent().siblings(".modal-body");
        img = currentRow.attr("src");
        $("#modal-image").attr("src", img);
        $("#downlaod").attr("href", img);
        jQuery.noConflict();
        $("#exampleModalCenter").modal("show");

    });
});
}

$(document).ready(function () {
    $(".img-modal-open").on("click",function (event){
        event.preventDefault();
        let img = "";
        img = $(this).attr("src");
        // alert(img);
        $("#modal-image").attr("src", img);
        $("#downlaod").attr("href", img);
        jQuery.noConflict();
        $("#exampleModalCenter").modal("show");

    });
});

function closeModal(){
    $("#exampleModalCenter").modal("hide");
}


// $(function() {
//     $(".heart").click(function (){
//         alert($(".fav-text").hasClass("press"))
//         if ($(".fav-text").hasClass("press")){
//             $(".fav-text").text("Removed from favourites");
//             $(".heart,.fav-text").toggleClass("press");
//         }else {
//             $(".fav-text").text("Added to favourites");
//             $(".heart,.fav-text").toggleClass("press");
//         }
//         })
// });
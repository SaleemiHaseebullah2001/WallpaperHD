function getImage(){
$(document).ready(function () {
    $(".btn-modal-open").on("click",function (event){
        event.preventDefault();
        let img = "";
        let currentRow;
        currentRow = $(this).parent().siblings(".modal-body");
        img = currentRow.attr("src");
        // alert(img);
        $("#modal-image").attr("src", img);
        $("#downlaod").attr("href", img);
        $("#exampleModalCenter").modal("show");

    });
});
}

function closeModal(){
    $("#exampleModalCenter").modal("hide");
}

/*$("search").keyup(function() {
    const val = $.trim(this.value);
    if (val === "")
        $('img').show();
    else {
        $('img').hide();
        $("img[alt*=" + val + "]").show();
    }
});*/
/*function search(){
    const searchText = document.getElementById("searchItem").value;
    const images = document.querySelectorAll(".container-fluid > img");

    if(searchText.length > 0){
        images.forEach((image) => {
            image.classList.add("hide");
            if(image.dataset.tags.indexOf(searchText) > -1){
                image.classList.remove("hide");
            }
        });
    }else{
        images.forEach((image) => {
            image.classList.remove("hide");
        });
    }
}*/
$(document).read(function (){
    let images = document.getElementsByTagName('img');
    $("#searchItem").on('keyup', function (){
        let search = $('searchItem').val().toLowerCase();
        for (let i = 0; i < images.length; i++) {
            let searchVal = images[i].getAttribute('alt');
            if (searchVal.toLowerCase().indexOf(search) > -1) {
                images[i].style.display = "";
            }else {
                images[i].style.display = "none";
            }
        }
    });
});
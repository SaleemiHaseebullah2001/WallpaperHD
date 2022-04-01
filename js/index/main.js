
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
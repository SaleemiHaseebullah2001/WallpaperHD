// const listItems = document.querySelectorAll('.main li');
// const allimages = document.querySelectorAll('.main .container-fluid .images');
//
// function toggleActiveClass(active){
//     listItems.forEach(item => {
//         item.classList.remove('active');
//     })
//     active.classList.add('active');
// }
//
// function toggleimages(dataClass){
//     if(dataClass === 'all'){
//         for(let i = 0; i<allimages.length; i++){
//             allimages[i].style.display = 'block';
//         }
//     }else{
//         for(let i = 0; i<allimages.length; i++)
//             allimages[i].dataset.class === dataClass ? allimages[i].style.display = 'block' : allimages[i].style.display = 'none';
//     }
// }
//
// for(let i = 0; i < listItems.length; i++){
//     listItems[i].addEventListener('click', function(){
//         toggleActiveClass(listItems[i]);
//         toggleimages(listItems[i].dataset.class);
//     });
// }
//
// (function() {
//     let $imgs = $('#gallery img');
//     let $buttons = $('#buttons');
//     let tagged = {};
//
//     $imgs.each(function() {
//         let img = this;
//         let tags = $(this).data('tags');
//
//         if (tags) {
//             tags.split(',').forEach(function(tagName) {
//                 if (tagged[tagName] == null) {
//                     tagged[tagName] = [];
//                 }
//                 tagged[tagName].push(img);
//             })
//         }
//     })
//
//     $('<button/>', {
//         text: 'Show All',
//         class: 'active',
//         click: function() {
//             $(this)
//                 .addClass('active')
//                 .siblings()
//                 .removeClass('active');
//             $imgs.show();
//         }
//     }).appendTo($buttons);
//
//     $.each(tagged, function(tagName) {
//         let $n = $(tagged[tagName]).length;
//         $('<button/>', {
//             text: tagName + '(' + $n + ')',
//             click: function() {
//                 $(this)
//                     .addClass('active')
//                     .siblings()
//                     .removeClass('active');
//                 $imgs
//                     .hide()
//                     .filter(tagged[tagName])
//                     .show();
//             }
//         }).appendTo($buttons);
//     });
//     return null;
// }())
//
// (function() {
//     let $imgs = $('#gallery img');
//     let $search = $('#searchItem');
//     let cache = [];
//
//     $imgs.each(function() {
//         cache.push({
//             element: this,
//             text: this.alt.trim().toLowerCase()
//         })
//     })
//
//     function filter() {
//         let query = this.value.trim().toLowerCase();
//         cache.forEach(function(img) {
//             let index = 0;
//             if (query) {
//                 index = img.text.indexOf(query);
//             }
//             img.element.style.display = index === -1 ? 'none' : '';
//
//         })
//     }
//     if ('oninput' in $search[0]) {
//         $search.on('input', filter);
//     } else {
//         $search.on('keyup', filter);
//     }
// }())

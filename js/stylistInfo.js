let btnService = document.getElementById("btn-service");
let btnPost = document.getElementById("btn-post");
let post = document.getElementById("stylist-post");
let service = document.getElementById("stylist-service");

btnPost.addEventListener('click', () => {
    post.style.transform = "translateX(0px)";
    service.style.transform = "translateX(100%)";
    btnPost.style.borderTop = "3px solid gray";
    btnService.style.borderTop = "none";


});
btnService.addEventListener('click', () => {
    post.style.transform = "translateX(100%)";
    service.style.transform = "translateX(0px)";
    btnService.style.borderTop = "3px solid gray";
    btnPost.style.borderTop = "none";
});
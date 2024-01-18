$(document).ready(function(){
const btnsw = document.querySelector("#switch");

btnsw.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnsw.classList.toggle('active');
})

})
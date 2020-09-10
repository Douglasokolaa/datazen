// document.getElementsByClassName('fa-window-close').addEventListener('click', function () {
//     hideForm();
// })
document.getElementById("register-loading").style.display = 'none';

setTimeout(function () {
    function hideForm () {
        document.getElementById("learn-register").style.display = 'none'; 
    }
    
    function showForm () {
        document.getElementById("learn-register").style.display = 'block';
    }
    
    // hideForm();
    
    
    // document.getElementById("myBtn").addEventListener("click", displayDate);
    document.getElementById("close_popup").addEventListener("click", hideForm);

    showForm();
}, 3000)

let modalExit = document.querySelector('.modalExit') ;
window.addEventListener('click', function(e){
    if(e.target.closest('.exitbtn')){
        modalExit.classList.add('active');
    }
    if(e.target.closest('.modalExitbtncontent')){
        modalExit.classList.remove('active');
    }
});


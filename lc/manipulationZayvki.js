console.log(document.querySelector('.zayvki--moi').childElementCount)
if(document.querySelector('.zayvki--moi').childNodes[1] == document.querySelector('.zayvki--null')){

}else{
    document.querySelector('.zayvki--null').style.display = "none";
}

if(document.querySelector('.zayvki--moi').childNodes[1] == document.querySelector('.zagolovok--moi')){

}else{
    document.querySelector('.zagolovok--moi').style.display = "none";
    document.querySelector('.zayvki--text--block').style.display = "none";
    document.querySelector('.zayvki--text').style.display = "none";
}

window.addEventListener('click', function(e){
    if(e.target.closest('.zayvki--applications_status').textContent != 'Оплачено'){
        // if(e.target.closest('.zayvki--applications_status'))
        $(function() {
            $('.zayForm').submit(function(e) {
            var $form = $(this);
            $.ajax({
              type: $form.attr('method'),
              url: './php/statusZayvki.php',
              data: $form.serialize()
            }).done(function(msg) {
              console.log('success');
              location.reload(true);
              e.preventDefault();
            }).fail(function() {
                console.log('fail');
                e.preventDefault(); 
              });
            });
            
          });
        
          $(function() {
            $('.zayForm').submit(function(e) {
            var $form = $(this);
            $.ajax({
              type: $form.attr('method'),
              url: './php/UsKoshBitcoin.php',
              data: $form.serialize()
            }).done(function(msg2) {
              console.log('success');
              console.log(msg2);
              e.preventDefault();
            }).fail(function() {
                console.log('fail');
                e.preventDefault(); 
              });
            });
          });
          $(function() {
            $('.zayForm').submit(function(e) {
            var $form = $(this);
            $.ajax({
              type: $form.attr('method'),
              url: './php/UsKoshBank.php',
              data: $form.serialize()
            }).done(function(msg3) {
              console.log('success');
              e.preventDefault();
            }).fail(function() {
                console.log('fail');
                e.preventDefault(); 
              });
            });
          });
        
        if(e.target.textContent != 'Оплачено'){

            // let cript = document.querySelectorAll('.tb--kosh tr .cript');
            // let criptValue = document.querySelectorAll('.tb--kosh tr .cript-value');
            // let bankName = document.querySelectorAll('.tb--bank tr .bank_name');
            // let bankValue = document.querySelectorAll('.tb--bank tr .bank_value');
            // for(let i = 0; i < cript.length; i++){
                // if(e.target.parentElement.parentElement.parentElement.querySelector('.zayvki--coin_name').textContent == cript[i].textContent){
                    // criptValue[i].textContent -= e.target.parentElement.parentElement.parentElement.querySelector('.zayvki--coin_count').textContent
                // }
            // }
            // for(let j = 0; j < bankName.length; j++){
                // if(e.target.parentElement.parentElement.parentElement.querySelector('.zayvki--bank_name').textContent == bankName[j].textContent){
                    // console.log(bankValue[j].textContent = +bankValue[j].textContent + +(e.target.parentElement.parentElement.parentElement.querySelector('.zayvki--bank_count').textContent));
                // }
            // }
        }
    }
});


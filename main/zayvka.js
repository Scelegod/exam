let coinName = document.querySelector('.give__valute-button')
let coinCount = document.querySelector('.give__valute-inp')
let coinPlochadka = document.querySelector('.typeOfValute-button')
let bankName = document.querySelector('.take__valute-button')
let bankCount = document.querySelector('.take__valute-inp')
let bankKurs = document.querySelector('.rub')
let fio = document.querySelector('.take__fullName-input')
let customersTel = document.querySelector('.take__number-input')
let customersEmail = document.querySelector('.give__email-input')
// console.log(coinName)
window.addEventListener('click', function(e){
    if(e.target.closest('.submit')){
        document.querySelector('.coin_name').value=coinName.textContent;
        document.querySelector('.coin_count').value=coinCount.value;
        document.querySelector('.coin_plochadka').value=coinPlochadka.textContent;
        document.querySelector('.bank_name').value=bankName.textContent;
        document.querySelector('.bank_count').value=bankCount.value;
        document.querySelector('.bank_kurs').value=bankKurs.textContent;
        document.querySelector('.customers_fio').value=fio.value;
        document.querySelector('.customers_tel').value=customersTel.value;
        document.querySelector('.customers_email').value=customersEmail.value;
    }
})
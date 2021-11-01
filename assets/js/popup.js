const bmi_button = document.querySelector('.bmi-button');
const popup = document.querySelector('.popup-wrapper');
const closes = document.querySelector('.popup-close');
bmi_button.addEventListener('click',()=>{
    popup.style.display = 'block';
    // console.log('Hie');
});

closes.addEventListener('click',()=>{
    popup.style.display = 'none';
});

// popup.addEventListener('click',()=>{
//     popup.style.display = 'none';
// });
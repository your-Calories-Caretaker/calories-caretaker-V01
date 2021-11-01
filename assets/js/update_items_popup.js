const item_update_buttons_nl = document.querySelectorAll('.item-edit');
const item_update_buttons = Array.from(item_update_buttons_nl);
const item_to_update = document.querySelector('.item_to_update');
const popup = document.querySelector('.popup-wrapper');
const closes = document.querySelector('.popup-close')

item_update_buttons.forEach((item)=>{
    item.addEventListener('click',async ()=>{
        const url = '../backend/Admin/get_suggested_item.php?';
        const query = `id=${item.getAttribute('id')}`;
        const run = await fetch(url+query);
        const response = await run.json();
        console.log(response);
        document.querySelector('.item_to_update').value = item.getAttribute('id');
        popup.style.display = 'block';
        document.querySelector('#message').value = response['message'];
        document.querySelector('#item_name').value = response['item_name'];
        document.querySelector('#category').value = response['category_id'];
    });
});

closes.addEventListener('click',()=>{
    popup.style.display = 'none';
});

console.log(item_update_buttons);

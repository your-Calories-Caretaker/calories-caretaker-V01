const add_button = document.querySelectorAll('.add_item');
const add_button_array = Array.from(add_button);
let url = './backend/add_item.php?'; 
add_button.forEach(button=>{
    button.addEventListener('click',async (e)=>{
        const parent = button.parentElement;
        const item_id = parent.getAttribute('item_id');
        let user_id_div = parent.parentElement.parentElement.parentElement;
        const user_id = user_id_div.getAttribute('count');
        let quantity_div = button.previousElementSibling;
        quantity_div = quantity_div.children;
        const quantity = quantity_div[1].value;
        let query_parameters = `user_id=${user_id}&item_id=${item_id}&quantity=${quantity}`;
        if(Number(quantity) != 0){
            const send_req = await fetch(url+query_parameters);
            const ans = await send_req.json();
            console.log(ans);
            quantity_div[1].value = 0;
        }
    });
});
const add_item_button = document.querySelector("#add_item_button");
console.log(add_item_button);

const add_cateory_button = document.querySelector("#add_category_button");
console.log(add_cateory_button);

add_item_button.addEventListener('click',async ()=>{
   const item_name = document.querySelector('#add_item').value;
   const category_id = document.querySelector('#category_id').value;
   if(category_id == 'select') return;
   console.log(item_name, category_id);
   const user_id = document.querySelector('#add_item').parentElement.parentElement.getAttribute('id');
   const url = './backend/add_item_suggestion.php?';
   const query = `user_id=${user_id}&item_name=${item_name}&category_id=${category_id}`;
   const response = await fetch(url+query);
   const url_response = await response.json();
   document.querySelector('.insert_response').innerHTML = url_response;
});

add_cateory_button.addEventListener('click',async ()=>{
    const category_name = document.querySelector('#add_category').value.trim();
    if(category_name == '') return;
    const user_id = document.querySelector('#add_category').parentElement.getAttribute('id');
    const url = './backend/add_category_suggestion.php?';
    const query = `user_id=${user_id}&category_name=${category_name}`;
    const response = await fetch(url+query);
    const url_response = await response.json();
    document.querySelector('.category_response').innerHTML = url_response;
});
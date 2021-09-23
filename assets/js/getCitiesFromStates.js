const state = document.querySelector('.state');
const city = document.querySelector('.city');
state.addEventListener('change',async ()=>{
    city.innerHTML = '';
    const state_id = state.value;
    const data =await fetch('./backend/get_city_from_state.php',{
        method: "POST",
        body:  JSON.stringify({state_id: state.value, isset:'yes'})
    });
    const ans = await data.json();
    console.log(ans);
    ans.forEach(element => {
        if(element.state_id == state_id){
            const option = document.createElement("option");
            option.text = element.city_name;
            option.value = element.id;
            city.add(option); 
        }
    });
});
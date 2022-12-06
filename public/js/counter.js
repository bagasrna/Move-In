const counter = document.getElementById('counter')
const button = document.querySelectorAll('.btn')
const harga = document.getElementById('total')

let count = 0;
let total = 0;

button.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        const styles = e.currentTarget.classList

        if (styles.contains('increase')){
            count++;
            if(count != 0){
                total += 300
            }
        } else if (styles.contains('decrease')){
            count--;
            if(count != 0){
                total -= 300
            }else if(count == 0){
                total = 0
            }
        }else {
            count = 0;
        }
        
        counter.textContent = count;
        if(total != 0){
            harga.textContent = 'Rp. ' + total + ".000,0";
        }else{
            harga.textContent = 'Rp. ' + total;
        }
    })
})
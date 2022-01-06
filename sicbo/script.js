const card = document.getElementById("card");

let dice_1 = document.getElementById("dice-1");
let dice_2 = document.getElementById("dice-2");
let dice_3 = document.getElementById("dice-3");

const dices = {
    '1': '<div class="face one"><div class="dot"></div></div>',
    '2': '<div class="face two"><div class="dot"></div><div class="dot"></div></div>',
    '3': '<div class="face three"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>',
    '4': '<div class="face four">' +
            '<div class="my-container">' +
                    '<div class="dot"></div>' +
                    '<div class="dot"></div>' +
                '</div>' +
                '<div class="my-container">' +
                    '<div class="dot"></div>' +
                    '<div class="dot"></div>' +
                '</div>' +
            '</div>',
    '5': '<div class="face five">' +
            '<div class="my-container">' +
                '<div class="dot"></div>' +
                '<div class="dot"></div>' +
            '</div>' +
            '<div class="my-container">' +
                '<div class="dot"></div>' +
            '</div>' +
            '<div class="my-container">' +
                '<div class="dot"></div>' +
                '<div class="dot"></div>' +
            '</div>' +
        '</div>',
        '6':           '<div class="face six">' +
        '<div class="my-container">' +
          '<div class="dot"></div>' +
          '<div class="dot"></div>' +
          '<div class="dot"></div>' +
        '</div>' +
        '<div class="my-container">' +
          '<div class="dot"></div>' +
          '<div class="dot"></div>' +
          '<div class="dot"></div>' +
        '</div>' +
      '</div>'

};

dice_1.innerHTML = dices['1'];
dice_2.innerHTML = dices['1'];
dice_3.innerHTML = dices['1'];

dice_2.onclick = function() {
    roll(probabilities);
}

function generateArray(probabilities) {
    let arr = [];

    for(const [key, value] of Object.entries(probabilities)){
        arr = arr.concat(Array(value).fill(key));
    }
    
    return arr;
}

function roll(probabilities) {
    if(card.classList != "animate"){
        let arr = generateArray(probabilities);
    
        result_1 = arr[Math.floor(Math.random() * arr.length)];
        result_2 = arr[Math.floor(Math.random() * arr.length)];
        result_3 = arr[Math.floor(Math.random() * arr.length)];
    
        card.classList.add("animate");
        setTimeout(() => {
            dice_1.innerHTML = dices[result_1];
            dice_2.innerHTML = dices[result_2];
            dice_3.innerHTML = dices[result_3];
        }, 750);
        setTimeout(() => {
            card.classList.remove("animate");
        }, 1500);
      
        console.log(result_1 + result_2 + result_3)
    }

}
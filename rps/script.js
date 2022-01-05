let my_form = document.getElementById("my-form");

let isAnimate = false;
const handshakeTime = 800; // Waktu dari css (1000) - 200

const data = {
    'rock': {
        'win': 'scissors',
        'lose': 'paper',
        'draw': 'rock'
    },
    'paper': {
        'win': 'rock',
        'lose': 'scissors',
        'draw': 'paper'
    },
    'scissors': {
        'win': 'paper',
        'lose': 'rock',
        'draw': 'scissors'
    }
}

function play(user) {
    if(isAnimate=== false) {
        isAnimate= true;
        my_form.reset();

        setTimeout(() => {
            document.getElementById(`${getResult(user)}-${user}`).checked = true;
            isAnimate = false;
            isAnimate= false;
        }, handshakeTime);
    }
}

function generateArray() {
    let arr = [];

    for(const [key, value] of Object.entries(probabilities)){
        arr = arr.concat(Array(value).fill(key));
    }

    return arr;
}

function getResult(value) {
    let arr = generateArray(probabilities);
    let state = arr[Math.floor(Math.random() * arr.length)];

    return data[value][state];
}
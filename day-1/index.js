const fs = require("fs");

const text = fs.readFileSync('input.txt','utf8').split('\n');

function task1() {
    let counter = 0;
    for (let i = 1; i < text.length; i++) {
        if (parseInt(text[i]) > parseInt(text[i-1])) {
            counter ++;
        }
    }
    return counter;
}

function task2() {
    let counter = 0;
    console.log(text.slice(1, 4));
    for (let i = 3; i < text.length; i++) {
        if (addStrings(text.slice(i-2 ,i+1)) > addStrings(text.slice(i-3, i))) {
            counter ++;
        }
    }
    return counter;
}

function addStrings(arr) {
    let result = 0;
    for (let i = 0; i < arr.length; i++) {
        result += parseInt(arr[i])
    }

    return result;
}

const result1 = task1();
console.log(result1);

const result2 = task2();
console.log(result2);
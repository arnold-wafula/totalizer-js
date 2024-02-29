import axios from "axios";

function addNumbers(num1, num2) {
    let num1 = document.getElementById('num1').value;
    let num2 = document.getElementById('num2').value;

    // Make an AJAX POST request to the Laravel route
    axios.post('/calculate', {
        num1: num1,
        num2: num2
    })
    .then(function (response) {
        // Success
        document.getElementById('answer').innerHTML = 'Sum: = ' + response.data.sum;
    })
    .catch(function (error) {
        // Handle error
        console.log(error);
    });
}
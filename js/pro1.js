//Basic syntax
// console.log("Hello world");
// const printTenTim = (name) => {
//     for (let i = 0; i < 10; i++) {
//         console.log(name);
//     }

// }
// printTenTim("Go");
// const Fruits = ["Apple", "Banna", "Mango"];
// Fruits.forEach(element1 => {
//     console.log(element1);
// });

// Traversal in Array
// const Fruits = ["Apple", "Banna", "Mango"];
// Fruits.forEach(element1 => {
//     console.log(element1);
// });
// var numbers = [1, 2, 3, 4, 5];

// let numbersLength = numbers.length;
// console.log("The length of numbers is :" + numbersLength);
// console.log("The last element of numbers is : " + numbers[numbersLength - 1]);

// For-In Loop
// var numbers = [1, 2, 3, 4, 5];
// for (let counter in numbers) {
//     console.log(numbers[counter]);
// }
// for (const iterator of numbers) {
//     console.log(numbers[iterator]);
// }

// var numbers = [11, 112, 23, 24, 5];
// for (const iterator of numbers) {
//     console.log(iterator);
// }
// for (const key in numbers) {
//     if (Object.hasOwnProperty.call(numbers, key)) {
//         const element = numbers[key];
//         console.log(key + " :" + element);
//     }
// }
// console.log("Foreach Loop");
// numbers.forEach(element => {
//     console.log(element)
// });

// var sqArray = [16, 25, 36, 49];
// let result = sqArray.map((Element) => Math.sqrt(Element));

// console.log(result);
// let arr = [2, 3, 4, 5, 6, 7];
// var resultArr = arr.map((val) => 2 * val).filter((mulVal) => mulVal >= 10);
// console.log(resultArr);

//reduce Function
// var arr = [3, 4, 5, 6, 6];
// var sum = arr.reduce((acumat, Element) => acumat += Element, 3);
// console.log(sum);
// var twodArr = [
//     [3, 4, 5, 6, 6],
//     [3, 4, 5, 6, 6],
//     [3, 4, 5, 6, 6]
// ];
// var singlArr = twodArr.reduce((acum, elem) => {
//     return acum.concat(elem);
// });
// console.log(singlArr);

// Strings in Javascript
// let userName = "\"Muhammad\" Irshad";
// let userName = '"Muhammad" Azam and owner is Azam';
// console.log(userName);
// console.log(userName.length);
// let siteTitle = "Welcome to the best site of Pakistan";
// console.log(siteTitle.indexOf("the"));
// let title = "I am the man power";
// console.log(title.slice(5));
// console.log(title.slice(5, 12));
// console.log(title.slice(5, -5));
// let newUserName = userName.replaceAll("Azam", "Irshad");
// console.log(newUserName);
// console.log(newUserName.charAt(1));
// console.log(newUserName.charCodeAt(3));

// let text = "a,b,c,d,e,f,g,h";
// console.log(text.split(","));
// let newText = text.split(",");
// for (const iterator of newText) {
//     console.log(iterator);
// }

// Date and Time Objects

// ( ** * Date Methodes ** * )
// let date = new Date();
// console.log(date.toDateString());
// let currentDate = new Date();

// function seeDate() {
//     document.getElementById("demo").innerHTML = currentDate.toLocaleDateString();

// }
// const hideDate = () => document.getElementById("demo").innerHTML = "";
// const hideTime = () => document.getElementById("time").innerHTML = "";

// Math Functions in Javascript

// console.log(Math.round(Math.PI));
// console.log(Math.pow(3, 3));
// console.log(Math.sqrt(4));
// console.log(Math.abs(-333));
// console.log(Math.floor(4.3));
// console.log(Math.ceil(3.4));
// console.log(Math.trunc(-33.3));
// console.log(Math.max(1, 23, 4, 5, 4, 33));
// console.log(Math.min(1, 23, 4, 5, 4, 33));
// console.log(Math.floor(Math.random() * 10));

// // Object In Javascript
// let bioData = {
//     name: {
//         firstName: "Muhammad",
//         lastName: "Irshad",
//         getFullName() {
//             console.log(this.firstName);
//             return bioData.name.firstName + bioData.name.lastName;
//         },
//     },
//     age: 23,
//     show: function() {
//         console.log(` UserName is ${bioData.name.getFullName()} and age is ${bioData.age}`);
//     }
// };
// console.log(bioData.name.firstName, bioData.name.lastName);
// bioData.show();
// console.log(`user fullName is: ${bioData.name.getFullName()}`);
// //  Object distructuring
// let employee = {
//     name: 'Khan ali',
//     id: 12,

// }

// let ar1 = [23, 3, 3];
// let [var1, var2, var3] = ar1;
// console.log(var1);
// console.log(var2);
// console.log(var3);

// let { name, id } = employee;
// console.log(name);
// console.log(id);
// //Object Properties
// var modal = "Suzuki";
// let company = {
//     [modal]: "This is the one of bigest car manufacturer company",
//     [23]: 'hello', //but it required a value.

// }
// console.log(company);
// console.log(company.Suzuki);
// //console.log(company .23); // not possible
// //No need to write key and value of same name


// let myName = 'Khan jaan';
// let myAge = 23;
// let bioProfile = { myName, myAge };
// console.log(bioProfile);

//Spread operator

// let employee = {
//     name: 'Khan ali',
//     id: 12,

// }
// console.log(Object.values(employee));
// // console.log(Object.entries(employee));
// // Array to Object And Object to Array
// let varArray = Object.entries(employee);
// console.log(varArray);
// let varObject = Object.fromEntries(varArray);
// console.log(varObject);

// async function Name() {
//     // console.log("Inside of the function");

//     return "Hello";
// }
// console.log("before calling");
// console.log(Name());
// console.log("after calling");

// let sum = (num1, num2) => {
//     return num1 + num2;
// }
// let sub = (num1, num2) => {
//     return num1 - num2;
// }
// let mul = (num1, num2) => {
//     return num2 * num1;
// }


// let calculator = (n1, n2, operator) => {
//         return operator(n1, n2);
//     }
//     //here calcultor fuction call Higher order function and mul,sub and sum called callback function.

// console.log(calculator(11, 33, sum));;
// console.log(calculator(11, 33, sub));;
// console.log(calculator(11, 33, mul));;
function snaCase(comment) {
    for (let index = 0; index < comment.length; index++) {
        if (comment.charAt(index) === ' ') {
            comment = comment.replace(charAt(index), "_");
        } else {
            comment = comment.replace(charAt(index), comment.charAt(index).toLowerCase());
        }

    }
    console.log(comment);

}
snaCase("BOB loves coding");
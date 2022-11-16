name = 'Nevena';

var age = 26;

console.log(name);
console.log(age);

var f = 6;
const j = 8;

function sum(a, b, c = 5) {
    var d = 5;

    console.log(a + b + c + d + f);

    if (a === 5) {
        var k = 9;
        let l = 10;
    }

    console.log(k);
    // console.log(l); // -> error
}

sum(1, 2, 3);
// console.log(d);

const greeting = `Hello, ${name}!`;

const numbers = [5, 8, 11, 6, 2, 8, 30, 12];
console.log(numbers);

numbers[5] = 2;

console.log(numbers);

// numbers[11] = 6;

console.log([1, 2, 3] == [1, 2, 3]);
console.log('2' == 2);
console.log('2' === 2);

numbers.push(5);
numbers.unshift(8);
numbers.pop();
numbers.shift();

numbers.splice(2, 3);
numbers.splice(3, 0, 7);
numbers.splice(1, 1, 6);

console.log(numbers);

const doubled = numbers.map(function (value) {
    return value * 2;
});

console.log(doubled);

const numbersSum = numbers.reduce(function (accum, value, index) {
    return accum += value;
}, 0);

console.log(numbersSum);

const result = numbers.filter(function (value, index) {
    return value % 2 === 0;
});

console.log(result);

numbers.forEach(function (value, index) {
    console.log(value);
});

numbers.sort();

const user = {
    username: 'ivgerves',
    email: 'ivgerves@gmail.com',
    gender: 'M'
};

console.log({a: 1, b: 2} == {a: 1, b: 2});

console.log(user['email']);
console.log(user.gender);

user.email = 'ivgerves1@gmail.com';

console.log(user);

user.password = 'ddsadkjlfkds';

console.log(user);

const key = 'username';
user[key];

for (let key in user) {
    console.log(user[key]);
}

for (let value of numbers) {
    console.log(value);
}

Object.keys(user).forEach(function (value) {
    console.log(user[value]);
});

Object.values(user).forEach(function (value) {
    console.log(value);
});

Object.entries(user).forEach(function (value) {
    console.log(value[0], value[1])
}) // [[key, value], [key, value]]

const student = {
    firstName: 'Ivan',
    lastName: 'Ivanov',
    fn: 88888,
    address: {
        street: 'Street',
        city: 'City'
    }
};

const freezedStudent = Object.freeze(student);
freezedStudent.fn = 22;
freezedStudent.age = 25;
freezedStudent.address.city = 'Sofia'

console.log(freezedStudent);

const jsonStudent = JSON.stringify(student);
console.log(jsonStudent);
console.log(typeof jsonStudent);
const parsedStudent = JSON.parse(jsonStudent);
console.log(parsedStudent.firstName);
console.log(typeof parsedStudent);

const config = {
    host: 'localhost',
    port: '3000',
    endpoints: {
        login: '/login',
        signup: '/signup'
    }
};



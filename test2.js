// create array of objects with person data

var people = [
    {name: "John", age: 25, isMarried: false},
    {name: "Mary", age: 30, isMarried: true},
    {name: "Peter", age: 28,isMarried: false},
    {name: "Susan", age: 24, isMarried: true},
];


// create a function that returns a new array of objects with married people use a foreach loop

function marriedPeople(people) {
    var married = [];
    people.forEach(function(person) {
        if (person.isMarried) {
            married.push(person);
        }
    });
    return married;
}

console.log(marriedPeople(people));



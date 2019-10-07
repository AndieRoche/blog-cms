var firstName = "Jane";                     // String type variable
var lastName = "Doe";                       // String type variable
var age = 35;                               // Number type variable
var married = true;                         // Boolean type variable
var childrenNames = ["Alice", "Bob"];       // Array type variable
var husband = { firstName: "John", lastName: "Doe", age: 35 }     // Object type variable
var fullName = firstName + " " + lastName;        // Concatenation operator

function getFullName(firstName, lastName) {     // Function name
    return  firstName + " " + lastName;         // Returned value
}
var fullName = getFullName(firstName, lastName);   // Using variables
var fullName = getFullName("Alice", "Doe");        // Using values
//document.write(fullName);
//console.log(fullName);

function getIsSettled(age, married) {     // Function name
    var dogYears = age/7;                             // Arithmetic Operator
    var isAdult = dogYears > 4;                       // Comparison operator
    var isSettled = isAdult && married;               // Integer type variable
    return  isSettled;         // Returned value
}
var isSettled = getIsSettled(age, married);   // Using variables
var isSettled = getIsSettled(20, false);        // Using values

if (isSettled) {
    document.write(fullName + " is settled.");
} else {
    document.write(fullName + " is not settled.");
}
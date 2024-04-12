// let js = "amazing";
// console.log(40 + 8 + 23 - 10);

// console.log("Jonas");
// console.log(23);

// let firstName = "Mgeli";

// console.log(firstName);
// console.log(firstName);
// console.log(firstName);

// let Jonas_Mgeli = "JM";
// let $function = 27;
// let PI = 3.14;

// let myFirstJob = "Programmer";
// let myCurrentJob = "Teacher";

// let job1 = "Programmer";
// let job2 = "Teacher";

// console.log(myFirstJob);

// let JavaScriotIsFun = true;
// console.log(JavaScriotIsFun);

// // console.log(typeof true);
// console.log(typeof JavaScriotIsFun);
// // console.log(typeof 123);
// // console.log(typeof "jonas");

// JavaScriotIsFun = "YES!";
// console.log(typeof JavaScriotIsFun);

// let year;
// console.log(year);
// console.log(typeof year);

// year = 1991;
// console.log(typeof year);

// console.log(typeof null);
// let age = 30;
// age = 31;

// const birthYear = 1991;
// // birthYear = 1990;

// // const job;

// var job = "programmer";
// job = "teacher";

// lastName = "Makhatadze";
// console.log(lastName);

// Math operators
// const now = 2037;
// const ageSandro = now - 2005;
// const ageSalome = now - 2004;
// console.log(ageSandro, ageSalome);

// console.log(ageSandro * 2, ageSandro / 10, 2 ** 3);

// const firstName = "Sandro";
// const lastName = "Makhatadze";
// console.log(firstName + " " + lastName);

// // Assigment operators
// let x = 10 + 5;
// x += 10; // x = x + 10 = 25
// x *= 4; // x = x * 4 = 100
// x++; // x = x + 1;
// x--;
// x--;
// console.log(x);

// // Comparison operators
// console.log(ageSandro > ageSalome); // true or false // <, >, <=, >=
// console.log(ageSalome >= 18); // true or false

// const isFullAge = ageSalome >= 18;

// console.log(now - 2005 > now - 2004); // true or false

// const now = 2037;
// const ageSandro = now - 2005;
// const ageSalome = now - 2004;

// console.log(now - 2005 > now - 2004);

// console.log(25 - 10 - 5);

// let x, y;
// x = y = 25 - 10 - 5; // x = y = 10, x = 10
// console.log(x, y);

// const averageAge = (ageSandro + ageSalome) / 2;
// console.log(ageSandro, ageSalome, averageAge);

// const firstName = "Sandro";
// const job = "bezdelnik";
// const birthYear = 2005;
// const year = 2024;

// const sandro =
//   "I'm " + firstName + ", a " + (year - birthYear) + " Years old " + job + "!";

// console.log(sandro);

// const sandroNew = `I'm ${firstName}, a ${year - birthYear} years old ${job}!`;
// console.log(sandroNew);

// console.log(`Just a regular string...`);

// console.log(
//   "String with \n\
// multiple \n\
// lines"
// );

// console.log(`String
// with
// multiple
// lines`);

// const age = 2;

// if (age >= 18) {
//   console.log("Salome can start driving license 🚗");
// } else {
//   const yearsLeft = 18 - age;
//   console.log(`Salome is too young. Wait another ${yearsLeft} years`);
// }

// const birthYear = 2004;

// let century;
// if (birthYear >= 2000) {
//   century = 21;
// } else {
//   century = 20;
// }
// console.log(century);

///////////////////////////////////  TYPE CONVERSION
// const inputYear = "1991";
// console.log(Number(inputYear));
// console.log(Number(inputYear) + 18);

// console.log(Number("sandro"));
// console.log(typeof NaN);

// console.log(String(23), 23);

// //////////////////////////////////  TYPE COERCION

// console.log("I am " + 23 + " Years old");
// console.log("23" - "10" - 3);
// console.log("23" / "2");

// let n = "1" + 1;
// n = n - 1;
// console.log(n);

//////////////////////////////// FALSY VALUES
// console.log(Boolean(0));
// console.log(Boolean(undefined));
// console.log(Boolean("Sandro"));
// console.log(Boolean({}));

// const money = 0;
// if (money) {
//   console.log("Don't spend it all");
// } else {
//   console.log("You should get a job!");
// }

// let height = 123;
// if (height) {
//   console.log("YAY! Height is defined");
// } else {
//   console.log("Height is UNDEFINED");
// }

// const age = 18;
// if (age === 18) console.log("You hust become an adult!!!");

// if (age == 18) console.log("You hust become an adult!!!");

// const favorite = Number(prompt("whats your favorite number"));
// console.log(favorite);

// if (favorite === 23) {
//   console.log("cool! 23 is an amazing number");
// } else if (favorite === 7) {
//   console.log("7 ic wava ra.");
// } else if (favorite === 9) {
//   console.log("9 is also a cool number!");
// } else {
//   console.log("number is not 23 or 7");
// }

// if (favorite !== 23) {
//   console.log("Why not 23?");
// }

// const hasDriversLicense = true;
// const hasGoodVision = true;

// console.log(hasDriversLicense && hasGoodVision);
// console.log(hasDriversLicense || hasGoodVision);
// console.log(!hasDriversLicense);

// const shouldDrive = hasDriversLicense && hasGoodVision;

// // if (shouldDrive) {
// //   console.log("Salome is able to drive");
// // } else {
// //   console.log("Ver gaatarebs, me ar vadzlev uflebas");
// // }

// const isTired = false;
// console.log(hasDriversLicense || hasGoodVision || isTired);

// if (hasDriversLicense && hasGoodVision && !isTired) {
//   console.log("Salome is able to drive!");
// } else {
//   console.log("Ver gaatarebs, me ar vadzlev uflebas");
// }

// const day = "friday";

// switch (day) {
//   case "monday":
//     console.log("Plan busas naxva");
//     console.log("Go to busas saxli");
//     break;
//   case "tuesday":
//     console.log("Gavuaro busas stepshi");
//     break;
//   case "wednsday":
//   case "thursday":
//     console.log("Busasos naxva");
//     break;
//   case "friday":
//     console.log("Chems bususas vakoco trakucaze");
//     break;
//   case "saturday":
//   case "sunday":
//     console.log("Gaviseirnot me da busam");
//     break;
//   default:
//     console.log("Not a valid day!");
// }

// if (day === "monday") {
//   console.log("Plan busas naxva");
//   console.log("Go to busas saxli");
// } else if (day === "thuesday") {
//   console.log("Gavuaro busas stepshi");
// } else if (day === "wednsday" || day === "thurdsday") {
//   console.log("Busasos naxva");
// } else if (day === "friday") {
//   console.log("Chems bususas vakoco trakucaze");
// } else if (day === "saturday" || day === "sunday") {
//   console.log("Gaviseirnot me da busam");
// } else {
//   console.log("Not a valid day!");
// }

// const age = 23;
// // age >= 18
// //   ? console.log("I like drinking wine 🍷")
// //   : console.log("I like drinking water 🥃");

// const drink = age >= 18 ? "wine 🍷" : "water 🥃";
// console.log(drink);

// let drink2;
// if (age >= 18) {
//   drink2 = "wine 🍷";
// } else {
//   drink2 = "water 🥃";
// }
// console.log(drink2);

// console.log(`I like to drink ${age >= 18 ? "wine 🍷" : "water 🥃"}`);

// const bill = 275;
// const tip = bill <= 300 && bill >= 50 ? bill * 0.15 : bill * 0.2;
// console.log(
//   `The bill was ${bill}, the tip was ${tip}, and the total value ${bill + tip}`
// );

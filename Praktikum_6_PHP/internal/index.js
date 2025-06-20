function contohLet() {
  let y = 10;
  if (true) {
    let y = 20;
    console.log(y);
  }
  console.log(y);
}

contohLet(); //

function contohConts() {
  const x = 10;
  if (true) {
    const x = 20;
    console.log(x);
  }
  console.log(x);
}

let nama = "Diland Pros";
let umur = 20;
let isStudent = true;
let hobbies = ["Membaca", "Menulis", "Menggambar"];
let address = {
  street: "Jalan Raya",
  city: "Jakarta",
  country: "Indonesia",
};

const name = "Irul";

if (name === "Candi") {
  console.log(`Hello ${name}`);
} else {
  console.log(`Hello selamat datang ${name}`);
}

const matrix = [
  [
    [
      [1, 2, 3],
      [3, 2, 1],
    ],
    [
      [3, 2, 1],
      [2, 1, 3],
    ],
    [
      [2, 1, 2],
      [3, 3, 3],
    ],
    [
      [2, 2, 2],
      [2, 2, 2],
    ],
  ],
];

console.table(matrix);

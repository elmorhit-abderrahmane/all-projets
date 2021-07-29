class User {
    constructor(name, email) {
        this.name = name;
        this.email = email;
        this.sayhello = function () {

        };

    }
    sayhello() {
        return `hello ${this.name}`;
    }
}
let User1 = new user("abderrahmane");
let User2 = new user(" khalid ");

console.log(User1);
console.log(User2);

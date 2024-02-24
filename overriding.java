class Animal {
    public void makeSound() {
        System.out.println("The animal makes a sound");
    }
}

class Cat extends Animal {
    public void makeSound() {
        System.out.println("The cat says Meow");
    }
}

class Dog extends Animal {
    public void makeSound() {
        System.out.println("The dog says Woof");
    }
}

 class Maina {
    public static void main(String[] args) {
        Animal animal = new Animal();
        animal.makeSound(); // Output: The animal makes a sound

        Cat cat = new Cat();
        cat.makeSound(); // Output: The cat says Meow

        Dog dog = new Dog();
        dog.makeSound(); // Output: The dog says Woof
    }
}

class Parent {
  int num = 100;

  Parent() {
    System.out.println("Constructor of Parent class");
  }

  void display() {
    System.out.println("Display method of Parent class");
  }
}

class Child extends Parent {
  String name;

  Child(String name, int age) {
    super();
    this.name = name;
    System.out.println("Constructor of Child class");
  }

  // Child() {
  //   super();
  //   System.out.println("Constructor of Child class");
  // }
}

public class Main {
  public static void main(String[] args) {
    Child obj = new Child("John", 10);
    obj.display();
  }
}
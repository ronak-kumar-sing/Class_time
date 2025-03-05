
interface Shape {
  default void area() {
    System.out.print("finding area..");
  }
}

class Circle implements Shape {
  public void area() {
    System.out.print("Area is "+(3.14 *5*5));
  }
}
public class Main {
  public static void main(String[] args) {
    Child obj = new Child("John", 10);
    obj.display();
  }
}
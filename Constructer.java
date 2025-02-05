

class Rectangle {
  private int l, b;

  // Default constructor
  public Rectangle() {
    l = 0;
    b = 0;
  }

  // Parameterized constructor
  public Rectangle(int n, int m) {
    l = n;
    b = m;
  }

  // Method to calculate and display the area
   void area() {
    System.out.println("Area of rectangle is: " +(l * b));
  }
   public static void main(String args[]) {
    // Creating objects using different constructors
    Rectangle r1 = new Rectangle();  // Using default constructor
    Rectangle r2 = new Rectangle(10, 20);  // Using parameterized constructor

    // Calling the area method for both objects
    r1.area();
    r2.area();
  }
}

// Renamed class to "ConstructorDemo" (class names should start with uppercase letters)


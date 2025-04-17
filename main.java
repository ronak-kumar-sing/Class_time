import java.io.*;

public class main {
  public static void main(string[] arg) {
    try {
      BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
      String input = br.readLine();
      int n = Integer.parseInt(input);
      int[] arr = new int[n];
      for (int i = 0; i < n; i++) {
        arr[i] = Integer.parseInt(br.readLine());
      }
      System.out.println("Array length: " + arr.length);
    } catch (IOException e) {
      e.printStackTrace();
    } catch (NumberFormatException e) {
      System.out.println("Invalid input. Please enter a number.");
    }
  }
  public static void main(String[] args) {
    main.main(args);
  }
}
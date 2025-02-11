class Stringexample {
    public static void main(String[] args) {
        String l1 = "I love java";
        String s1 = new String("I love java");
        String l2 = "I love java";
        String s2 = new String("I love java");

        System.out.println("Though literals 1 " + l1);
        System.out.println("Through new keyword 1 " +s1) ;
        System.out.println("Though literals 2 " +l2) ;
        System.out.println("Through new keyword 2 " + s2);

        System.out.println("l1 == s1 : " + (l1 == s1));
        System.out.println("l1 == l2 : " + (l1 == l2));
        System.out.println("s1 == s2 : " + (s1 == s2)); // two different objects
        System.out.println("l1.equals(s1) : " + l1.equals(s1));
        System.out.println("l1.equals(l2) : " + l1.equals(l2));// contents of two objects are same
        System.out.println("Tim".equals("tim")); // false
        System.out.println("I love java".equals(s1)); // true


        System.out.println(s1.charAt(3));
        System.out.println(s1.indexOf('v'));
        System.out.println(s1.lastIndexOf('v'));

        System.out.println(s1.substring(2, 6));

        System.out.println(s1.replace('v', 'V'));

        String s3 = new String(s1.toUpperCase());

        System.out.println(s3);

        String replace = s1.replace("love", "hate");
        System.out.println(replace);

    }
}

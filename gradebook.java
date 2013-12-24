

package gradebook;

import java.util.ArrayList;
import java.util.Scanner;

public class Gradebook {

    public static void main(String[] args) 
       {
        ArrayList<Student> students = new ArrayList<Student>();
        Scanner sc = new Scanner(System.in);
        String choice = "y";
        int i = 0;
        while(choice.equalsIgnoreCase("y")){
            System.out.println("Please enter a student's name: ");
            String name = sc.next();
            students.add(new Student(name));
            String choice2 = "y";
            while(choice2.equalsIgnoreCase("y")){
                System.out.println("Please enter a grade: ");
                students.get(i).addGrade(sc.nextInt());
                System.out.print("Would you like to add another grade? (y/n): ");
                choice2 = sc.next();
                }
            
        System.out.print("Would you like to add another student? (y/n): ");
        choice = sc.next();
        i++;
        }
    //for(int x = 0; x < students.size(); x++)
    //System.out.println(students.get(x).getName() + ": " + students.get(x).getAverage());
    String choice3 = "y";
    while(choice3.equalsIgnoreCase("y")){
        System.out.println("Which student's average would you like to see? ");
        String find = sc.next();
        for (Student s : students){
            if (s.getName().equalsIgnoreCase(find)){
                System.out.println(find + "'s average is " + s.getAverage());
                }
            }
        System.out.println("Would you like to view another student's average? (y/n) ");
        choice3 = sc.next();
        }
    System.out.println("Goodbye!");
    }
        }
    
       



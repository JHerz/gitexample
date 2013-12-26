

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
                boolean valid = false;
                while (valid == false){
                    System.out.println("Please enter a grade: ");
                    int grade = sc.nextInt();
                    if (grade<0 || grade>100){
                        System.out.println("Sorry, a grade must be between 1 and 100");
                        valid = false;
                        }   
                    else{
                        valid = true;
                        students.get(i).addGrade(grade);
                        }   
                }  
                System.out.print("Would you like to add another grade? (y/n): ");
                choice2 = sc.next();
				 while(!choice2.equalsIgnoreCase("y")&& !choice2.equalsIgnoreCase("n")){
                    System.out.println("please enter either \"y\" or \"n\"");
                    choice2 = sc.next();
                    }
            }
            
        System.out.print("Would you like to add another student? (y/n): ");
        choice = sc.next();
        while(!choice.equalsIgnoreCase("y")&& !choice.equalsIgnoreCase("n")){
            System.out.println("please enter either \"y\" or \"n\"");
            choice = sc.next();
            }
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
        while(!choice3.equalsIgnoreCase("y")&& !choice3.equalsIgnoreCase("n")){
            System.out.println("please enter either \"y\" or \"n\"");
            choice3 = sc.next();
            }
		}
    System.out.println("Goodbye!");
    }
        }
    
       



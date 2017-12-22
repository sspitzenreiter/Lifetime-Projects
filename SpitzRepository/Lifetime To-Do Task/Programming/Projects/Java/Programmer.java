class Employee {
	
	int salary = 80000;
}

class Programmer extends Employee {
static int bonus = 10000;
static int bonus3 = 40000;
static int bonusp = bonus +=bonus3;
public static void main (String args[]){
Programmer p = new Programmer();
System.out.println("Salary :" + p.salary);
System.out.println("Bonus :" + bonus);
System.out.println("P :" + p);
}
}
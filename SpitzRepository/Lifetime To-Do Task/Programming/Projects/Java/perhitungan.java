class Node {
public int value;
public Node next;
};

public class perhitungan extends Node{
	public static void main(String args[]){
Node x;
Node y;
Node z;

x = new Node();
y = new Node();
z = new Node();

x.value = 1;
y.value = 2;
z.value = 3;

x.next = y;
y.next = z;
z.next = x;

System.out.println(x.next);


}}

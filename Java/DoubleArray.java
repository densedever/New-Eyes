import java.util.Arrays; // for Arrays.stream()

public class DoubleArray
{
	// doubles each element of an int array, places the result into another array, and prints the result
	public static void main(String[] args)
	{
		int[] ints = {1, 2, 3, 4, 5}; // A list of ints to double
		// doubled, the array is [2, 4, 6, 8, 10]

		// ==================== PROCEDURAL ====================
		
		int[] proceduralResult = new int[ints.length]; // new int array to store the result
		
		// double the array
		for(int i = 0; i < ints.length; i++) // loop 'i' from 0 to len - 1 (through every position in the array)
		{
			proceduralResult[i] = ints[i] * 2; // double the int at position 'i'
		}
		
		// print the result
		System.out.print("Procedural result: ");
		printArray(proceduralResult);
		
		// ==================== FUNCTIONAL ====================
		// SIGNIFICANTLY slower (<1ms vs ~60ms) than the procedural version
		
		// double the array and place the result into a new array
		int[] functionalResult = Arrays.stream(ints).map(i -> i * 2).toArray();
		
		// print the result
		System.out.print("Functional result: ");
		printArray(functionalResult);
	}
	
	// simple method to print an array, doesn't check bounds
	private static void printArray(int[] array)
	{
		System.out.print("[" + array[0]); // print the first separately to avoid excessive commas (will fail on an empty array)
		for(int i = 1; i < array.length; i++) // loop through the array
		{
			System.out.print(", " + i); // print a comma followed by the current int
		}
		System.out.println("]"); // closing bracket
	}
}

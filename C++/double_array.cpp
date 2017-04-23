#include <iostream> // for std::cout and std::endl

// DO NOT USE "using namespace std;"

// doubles each element of an int array and prints the result
int main()
{
	int len = 5; // the number of ints
	int ints[] = {1, 2, 3, 4, 5}; // A list of ints to double
	// doubled, the array is [2, 4, 6, 8, 10]
	
	// double the array
	for(int i = 0; i < len; i++) // loop 'i' from 0 to len - 1 (through every position in the array)
	{
		ints[i] = ints[i] * 2; // double the int at position 'i'
	}
	
	// print the array
	std::cout << "[" << ints[0]; // print the first separately to avoid excessive commas
	for(int i = 1; i < len; i++) // loop 'i' from 1 to (len - 1) (through every position in the array except 0)
	{
		std::cout << ", " << ints[i]; // print a comma, then the int at position 'i'
	}
	std::cout << "]" << std::endl; // closing bracket and newline
	
	return 0;  // success
}

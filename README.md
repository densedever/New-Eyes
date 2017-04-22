# New-Eyes
A code compendium comparing different programming paradigms. Check paradigms.md to read up on a few different possible paradigms and what they are.

Everyone is encouraged to submit a ton of small (1-100 lines) programs. There are a lot of beginners to coding, so the purpose of this repo is:

 * to showcase different programming styles
 * to teach people how to translate code into different paradigms if they're learning a new one
 * to help new learners see a lot of code written in different ways
 * to have a single source of truth for all the most common programs we admins see around many programming-related Facebook groups. 
 
 No longer will you have to ask "How do I write this?"

Programs should have these criteria:
 * between 1 and 100 significant lines of code
 * need explanatory comments (this is intended for beginners)
 * do not need to have any specific purpose (the point is to see the same code in different ways)
 * identifiers should be descriptively named, if not commented
 * comments should not take the form 
 ```
 /*
  * @param ...
  * ...
 */
 ```
 * for a small function because come on, that takes up too much space and it's not like I'm gonna be using doxygen or anything. They're small code snippets, let's be real here.
 
The structure of the files should take a form that is readable and indicates the paradigms used. The comparison is meant to be side-by-side (or over/under, whatever). Example:

```
Double - a program to double the values of a list of integers.
Language: Node

Procedural:

let nums = [1, 2, 3, 4, 5]
// iterates over the list, setting each element to double itself
for(let i = 0; i < nums.length; i++) {
    nums[i] *= 2;
}

Functional:

let nums = [1, 2, 3, 4, 5]
// defines a version of nums where every list element is doubled
let doubleNums = nums.map(i => 2*i)

Prototype-Oriented:

function Doubled(list) {
	this.list = list || []
	return this.list.map(i => 2*i)
}

// define a doubled list as a data type
var dubs = new Doubled([2, 4, 6]) // => [4, 8, 12]


```

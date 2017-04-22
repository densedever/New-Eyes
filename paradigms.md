Here are a few common programming paradigms:

**Imperative** - a set of instructions telling the computer how to complete a task step-by-step, utilizing state-transitions and loops. It's by far the most popular, familiar, and widespread paradigm, and is useful when the benefits from fine-grained control and speed outweigh the need for mathematical rigor. 

Its workhorses are variables containing values and program state, and its method of computation is state mutation by updating the values of variables and performing I/O operations with streams of data.

Emphasizes algorithmic methods of problem-solving by emulating the actions of the CPU in a more readable fashion.

Representative languages: C, Basic, Pascal, Fortran, Go

**Object-Oriented** - your data and actions on that data are wrapped up in classes and kept separate from one another to attempt to eliminate cross-contamination not only of identifier names, but of accidental mutation from outside code. Useful for large, data-heavy projects that benefit from abstraction, generality, and reusability.

Its workhorses are objects (defined by classes) and computation is often done in an imperative manner, but hidden away behind methods that you just pull out and use without concerning yourself about how they work. There are different types of object-oriented programming, such as class-based OOP (Java), prototype-based OOP (JavaScript), and message-based OOP (Smalltalk).

Emphasizes generality, reuse, and data-hiding by boxing up related code into their own bubble-wrapped playpens.

Representative languages: Java, C#, Ruby, Python, Groovy

**Functional** - computation is done purely with expressions that, instead of performing computations, simply describe the result you want if you actually did the computation, and the computing is done for you behind-the-scenes. You tell the computer *what* you want instead of *how* you want your answer calculated. Statements, loops, classes, procedures, state mutation are not present, there's basically nothing but referentially-transparent expressions. Loops are done with aggregation (map/fold) or recursion. I/O and side effects are done with monadic structures or uniqueness types, and the code is equational in nature instead of algorithmic. Code is written as general as possible, and functions are composed and chained together to make larger computational structures.

Its workhorses are functions and often abstract or algebraic data types combined into typeclasses with a number of functions specific to said classes. Lists are used very liberally in place of counter variables in iterative constructs. Instead of data being the central pivot, as in imperative code, the fundamental building-blocks are *behaviors* that are composed together in endless ways.

Emphasizes readability, generality, code modularity, provability and correntness, and reuse and composition of already-defined functions.

Representative languages: Haskell, F#, ML, Lisp, Frege

**Stack-Oriented** - computation is done through the use of stacks and operations done on both the order of the stack items, and the data therein. Instead of a top-down execution path, functions and procedures are one-word atoms, and the code reads from left-to-right, computing as you go. Great when you need a language for embedded systems, as compilers are small and easily-built.

Its workhorses are stacks and operations on them, with all the usual familiar data types. Its method of computation is pushing and popping stack items through functions that pop their needed arguments off the stack, do some calculation, and push the result back onto the stack. Calculating sin(x), for example, is done by pushing x onto the stack, and calling the sin function that pops x and pushes the result back on.

Emphasizes code reuse, brevity, and composition of modular elements.

Representative languages: Forth, Factor, Onyx, Joy


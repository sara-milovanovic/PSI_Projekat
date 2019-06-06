-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2019 at 09:03 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_with_zac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `IdRegistrovani` int(11) NOT NULL,
  `Radi_od` date NOT NULL,
  PRIMARY KEY (`IdRegistrovani`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IdRegistrovani`, `Radi_od`) VALUES
(14, '2019-04-04'),
(16, '2019-04-04'),
(17, '2019-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `IdFAQ` int(11) NOT NULL AUTO_INCREMENT,
  `Pitanje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Odgovor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdFAQ`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`IdFAQ`, `Pitanje`, `Odgovor`) VALUES
(9, 'Im a professor and I want to work with you, how can I contact you?', 'Our email is codewithzac@gmail.com, just write to us.'),
(10, 'I forgot my email, what can I do?', 'Just go to the login page, click the \"Forgot your email\" link and you will get a new password to your mail.'),
(11, 'When will there be more courses?', 'Our team is working on that, you can expect new courses in November.'),
(12, 'How can I change my password?', 'Go to My Informations page, click on Change Informations button and there you can change your password.');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

DROP TABLE IF EXISTS `komentari`;
CREATE TABLE IF NOT EXISTS `komentari` (
  `IdKomentari` int(11) NOT NULL AUTO_INCREMENT,
  `Tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DatumVreme` date DEFAULT NULL,
  `IdRegistrovani` int(11) DEFAULT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdKomentari`),
  KEY `R_14` (`IdRegistrovani`),
  KEY `R_16` (`IdKurs`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

DROP TABLE IF EXISTS `kurs`;
CREATE TABLE IF NOT EXISTS `kurs` (
  `IdKurs` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ocena` float DEFAULT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdKurs`),
  UNIQUE KEY `Ime` (`Ime`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`IdKurs`, `Ime`, `Ocena`, `Status`) VALUES
(1, 'C', 4.5, 'dostupan'),
(2, 'Java', 0, 'nedostupan'),
(3, 'Scratch', 0, 'nedostupan');

-- --------------------------------------------------------

--
-- Table structure for table `materijali_na_cekanju`
--

DROP TABLE IF EXISTS `materijali_na_cekanju`;
CREATE TABLE IF NOT EXISTS `materijali_na_cekanju` (
  `IdMaterijali_na_cekanju` int(11) NOT NULL AUTO_INCREMENT,
  `Tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdOblast` int(11) NOT NULL,
  PRIMARY KEY (`IdMaterijali_na_cekanju`),
  KEY `R_25` (`IdOblast`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materijali_na_cekanju`
--

INSERT INTO `materijali_na_cekanju` (`IdMaterijali_na_cekanju`, `Tekst`, `IdOblast`) VALUES
(67, 'C was invented to write an operating system called UNIX.  C is a successor of B language which was introduced around the early 1970s.  The language was formalized in 1988 by the American National Standard Institute (ANSI).', 3),
(68, 'Multi-dimensional arrays C supports multidimensional arrays. The simplest form of the multidimensional array is the two-dimensional array.', 5),
(69, 't is always a good practice to assign a NULL value to a pointer variable in case you do not have an exact address to be assigned. This is done at the time of variable declaration. A pointer that is assigned NULL is called a null pointer.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `oblast`
--

DROP TABLE IF EXISTS `oblast`;
CREATE TABLE IF NOT EXISTS `oblast` (
  `IdOblast` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Materijal` text COLLATE utf8_unicode_ci,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdOblast`),
  KEY `R_17` (`IdKurs`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oblast`
--

INSERT INTO `oblast` (`IdOblast`, `Ime`, `Materijal`, `IdKurs`) VALUES
(3, 'Introduction', 'C is a procedural programming language. It was initially developed by Dennis Ritchie between 1969 and 1973. It was mainly developed as a system programming language to write operating system. The main features of C language include low-level access to memory, simple set of keywords, and clean style, these features make C language suitable for system programming like operating system or compiler development.Many later languages have borrowed syntax/features directly or indirectly from C language. Like syntax of Java, PHP, JavaScript and many other languages is mainly based on C language. C++ is nearly a superset of C language.', 1),
(4, 'Data types', 'Each variable in C has an associated data type. Each data type requires different amounts of memory and has some specific operations which can be performed over it. Let us briefly describe them one by one:Following are the examples of some very common data types used in C:  char: The most basic data type in C. It stores a single character and requires a single byte of memory in almost all compilers.int: As the name suggests, an int variable is used to store an integer. float: It is used to store decimal numbers (numbers with floating point value) with single precision. double: It is used to store decimal numbers with double precision.', 1),
(5, 'Arrays', 'Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.Instead of declaring individual variables, such as number0, number1, ..., and number99, you declare one array variable such as numbers and use numbers[0], numbers[1], and ..., numbers[99] to represent individual variables. A specific element in an array is accessed by an index.  All arrays consist of contiguous memory locations. The lowest address corresponds to the first element and the highest address to the last element.', 1),
(6, 'For loop', 'A for loop is a repetition control structure that allows you to efficiently write a loop that needs to execute a specific number of times.  Syntax The syntax of a for loop in C programming language is −for ( init; condition; increment ) {    statement(s); } Here is the flow of control in a \'for\' loop −The init step is executed first, and only once. This step allows you to declare and initialize any loop control variables. You are not required to put a statement here, as long as a semicolon appears.Next, the condition is evaluated. If it is true, the body of the loop is executed. If it is false, the body of the loop does not execute and the flow of control jumps to the next statement just after the \'for\' loop.After the body of the \'for\' loop executes, the flow of control jumps back up to the increment statement. This statement allows you to update any loop control variables. This statement can be left blank, as long as a semicolon appears after the condition.The condition is now evaluated again. If it is true, the loop executes and the process repeats itself (body of loop, then increment step, and then again condition). After the condition becomes false, the \'for\' loop terminates.', 1),
(7, 'While loop', 'while loop in C programming repeatedly executes a target statement as long as a given condition is true.  Syntax The syntax of a while loop in C programming language is −while(condition) {    statement(s); } Here, statement(s) may be a single statement or a block of statements. The condition may be any expression, and true is any nonzero value. The loop iterates while the condition is true.When the condition becomes false, the program control passes to the line immediately following the loop.', 1),
(8, 'Switch/Case', 'A switch statement allows a variable to be tested for equality against a list of values. Each value is called a case, and the variable being switched on is checked for each switch case.The expression used in a switch statement must have an integral or enumerated type, or be of a class type in which the class has a single conversion function to an integral or enumerated type.You can have any number of case statements within a switch. Each case is followed by the value to be compared to and a colon.The constant-expression for a case must be the same data type as the variable in the switch, and it must be a constant or a literal.When the variable being switched on is equal to a case, the statements following that case will execute until a break statement is reached.When a break statement is reached, the switch terminates, and the flow of control jumps to the next line following the switch statement.Not every case needs to contain a break. If no break appears, the flow of control will fall through to subsequent cases until a break is reached.A switch statement can have an optional default case, which must appear at the end of the switch. The default case can be used for performing a task when none of the cases is true. No break is needed in the default case.', 1),
(9, 'Pointers', 'What are Pointers? A pointer is a variable whose value is the address of another variable, i.e., direct address of the memory location. Like any variable or constant, you must declare a pointer before using it to store any variable address. The general form of a pointer variable declaration is −  type *var-name; Here, type is the pointer\'s base type; it must be a valid C data type and var-name is the name of the pointer variable. The asterisk * used to declare a pointer is the same asterisk used for multiplication. However, in this statement the asterisk is being used to designate a variable as a pointer. Take a look at some of the valid pointer declarations −int    ip;    / pointer to an integer */ double dp;    / pointer to a double */ float  fp;    / pointer to a float */ char   ch     / pointer to a character */The actual data type of the value of all pointers, whether integer, float, character, or otherwise, is the same, a long hexadecimal number that represents a memory address. The only difference between pointers of different data types is the data type of t', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ocena`
--

DROP TABLE IF EXISTS `ocena`;
CREATE TABLE IF NOT EXISTS `ocena` (
  `IdOcena` int(11) NOT NULL AUTO_INCREMENT,
  `Vrednost` float DEFAULT NULL,
  `IdRegistrovani` int(11) DEFAULT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdOcena`),
  KEY `R_11` (`IdRegistrovani`),
  KEY `R_13` (`IdKurs`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ocena`
--

INSERT INTO `ocena` (`IdOcena`, `Vrednost`, `IdRegistrovani`, `IdKurs`) VALUES
(7, 4, 21, 1),
(8, 5, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `odgovor`
--

DROP TABLE IF EXISTS `odgovor`;
CREATE TABLE IF NOT EXISTS `odgovor` (
  `Tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Redni_br` int(11) NOT NULL,
  `IdPitalica` int(11) NOT NULL,
  `Tacan` int(11) NOT NULL,
  PRIMARY KEY (`IdPitalica`,`Redni_br`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `odgovor`
--

INSERT INTO `odgovor` (`Tekst`, `Redni_br`, `IdPitalica`, `Tacan`) VALUES
('The program may crash if some important data gets overwritten.', 1, 31, 1),
('The element will be set to 0.', 2, 31, 0),
('The compiler would report an error.', 3, 31, 0),
('The array size would appropriately grow.', 4, 31, 0),
('ptr is array of pointers to 10 integers', 1, 32, 0),
('ptr is a pointer to an array of 10 integers', 2, 32, 1),
('ptr is an array of 10 integers', 3, 32, 0),
('ptr is an pointer to array', 4, 32, 0),
('Base address of the array', 1, 33, 1),
('Value of elements in array', 2, 33, 0),
('First element of the array', 3, 33, 0),
('Address of the last element of array', 4, 33, 0),
('True', 1, 34, 1),
('False', 2, 34, 0),
('Yes', 1, 35, 1),
('No', 2, 35, 0),
('free()', 1, 36, 1),
('Representation of NULL pointer', 1, 37, 1),
('Representation of void pointer', 2, 37, 0),
('Error', 3, 37, 0),
('None of above', 4, 37, 0),
('char p = *malloc(100);', 1, 38, 0),
('char *p = (char) malloc(100);', 2, 38, 0),
('char p = (char)malloc(100);', 3, 38, 1),
('char p = (char *)(malloc)(100);', 4, 38, 0),
('stdio.h and stddef.h', 1, 39, 1),
('stdio.h', 2, 39, 0),
('stddef.h', 3, 39, 0),
('math.h', 4, 39, 0),
('2,4,4', 1, 40, 1),
('function', 1, 41, 1),
('A keyword used to create variables', 1, 42, 0),
('A variable that stores address of an instruction', 2, 42, 0),
('A variable that stores address of other variable', 3, 42, 1),
('->', 1, 43, 1),
('*', 1, 44, 1),
('&', 2, 44, 0),
('&&', 3, 44, 0),
('||', 4, 44, 0),
('No', 1, 45, 1),
('Yes', 2, 45, 0),
('No', 1, 46, 1),
('Yes', 2, 46, 0),
('Float', 1, 47, 1),
('Integer', 2, 47, 0),
('Character', 3, 47, 0),
('enum', 4, 47, 0),
('1989', 1, 48, 1),
('1999', 2, 48, 0),
('2009', 3, 48, 0),
('1972', 4, 48, 0),
('procedural', 1, 49, 1),
('object oriented', 2, 49, 0),
('.c', 1, 50, 1),
('.h', 2, 50, 1),
('.cpp', 3, 50, 0),
('.java', 4, 50, 0),
('Dennis Ritchie', 1, 51, 1),
('Ken Thompson', 2, 51, 0),
('Brian Kernighan', 3, 51, 0),
('Yes', 1, 52, 1),
('No', 2, 52, 0),
('No', 1, 53, 0),
('Yes', 2, 53, 1),
('In some cases', 3, 53, 0),
('Symbolic Data', 1, 54, 1),
('Alphanumeric Data', 2, 54, 0),
(' Numeric Data', 3, 54, 0),
('Alphabetic Data', 4, 54, 0),
('Symbolic', 1, 55, 0),
('Alphanumeric', 2, 55, 1),
('Alphabetic', 3, 55, 0),
('Numeric', 4, 55, 0),
('24-bit', 1, 56, 1),
('8-bit', 2, 56, 0),
('32-bit', 3, 56, 0),
('64-bit', 4, 56, 0),
('variables', 1, 57, 1),
('real', 1, 58, 1),
('float', 2, 58, 0),
('int', 3, 58, 0),
('char', 4, 58, 0),
('True', 1, 59, 1),
('False', 2, 59, 0),
('Source Program', 1, 60, 1),
('Object Program', 2, 60, 0),
('Assembled Program', 3, 60, 0),
('Compiled Program', 4, 60, 0),
('10', 1, 61, 1),
('9', 2, 61, 0),
('0', 3, 61, 0),
('1', 4, 61, 0),
(' When x is less than one hundred', 1, 62, 1),
('When x is greater than one hundred', 2, 62, 0),
(' When x is equal to one hundred', 3, 62, 0),
('While it wishes', 4, 62, 0),
('0', 1, 63, 0),
('Infinitely', 2, 63, 0),
('1', 3, 63, 1),
('Variable', 4, 63, 0),
('No', 1, 64, 1),
('Yes', 2, 64, 0),
('No', 1, 65, 1),
('Yes', 2, 65, 0),
('code with Zac', 1, 66, 0),
('It will print nothing	', 2, 66, 1),
('Runtime error	', 3, 66, 0),
('Compilation error	', 4, 66, 0),
('No', 1, 67, 0),
('Yes', 2, 67, 1),
('do while', 1, 68, 1),
('while', 2, 68, 0),
('for', 3, 68, 0),
('no', 1, 69, 1),
('no', 1, 70, 1),
('1,2,3,4,5', 1, 71, 1),
('0,1,2,3,4,5', 2, 71, 0),
('1,2,3,4', 3, 71, 0),
('Zac', 1, 72, 1),
('Compiler error', 2, 72, 0),
('No Output', 3, 72, 0),
('None of the above', 4, 72, 0),
('FLOWER YELLOW', 1, 73, 1),
('FLOWER FRUITS', 2, 73, 0),
(' FLOWER YELLOW FRUITS', 3, 73, 0),
('Compiler error', 4, 73, 0),
(' OMG its working', 1, 74, 1),
('No Output', 2, 74, 0),
('Compiler error', 3, 74, 0),
('break', 1, 75, 1),
('allows', 1, 76, 1),
('Yes', 1, 77, 1),
('No', 2, 77, 0),
('yes', 1, 78, 1);

-- --------------------------------------------------------

--
-- Table structure for table `odslusani`
--

DROP TABLE IF EXISTS `odslusani`;
CREATE TABLE IF NOT EXISTS `odslusani` (
  `IdRegistrovani` int(11) NOT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdRegistrovani`,`IdKurs`),
  KEY `R_8` (`IdKurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pitalica`
--

DROP TABLE IF EXISTS `pitalica`;
CREATE TABLE IF NOT EXISTS `pitalica` (
  `IdPitalica` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdOblast` int(11) NOT NULL,
  PRIMARY KEY (`IdPitalica`),
  KEY `R_18` (`IdOblast`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pitalica`
--

INSERT INTO `pitalica` (`IdPitalica`, `Status`, `Tekst`, `Tip`, `IdOblast`) VALUES
(31, 'aktivna', 'What will happen if in a C program you assign a value to an array element whose subscript exceeds the size of array?', 'radio', 5),
(32, 'aktivna', 'What does the following declaration mean? int (*ptr)[10]?', 'checkbox', 5),
(33, 'aktivna', 'In C, if you pass an array as an argument to a function, what actually gets passed?', 'list', 5),
(34, 'aktivna', 'A pointer to a block of memory is effectively same as an array', 'radio', 5),
(35, 'aktivna', 'Does this mentioning array name gives the base address in all the contexts?', 'checkbox', 5),
(36, 'aktivna', 'function can be used to free the memory allocated by calloc()', 'Fill the box', 5),
(37, 'aktivna', 'What is (void*)0?', 'radio', 9),
(38, 'aktivna', 'char *p; p = (char*) malloc(100);', 'checkbox', 9),
(39, 'aktivna', 'In which header file is the NULL macro defined?', 'list', 9),
(40, 'aktivna', 'How many bytes are occupied by near, far and huge pointers (DOS)? (write with , )', 'Fill the box', 9),
(41, 'aktivna', 'In C p. language, a ___ prototype is a declaration of the function that just specifies the functions interface and extracts the body of the function. By defining the function, we get to know what action a particular function is going to perform.', 'Fill the box', 3),
(42, 'aktivna', 'A pointer is', 'checkbox', 9),
(43, 'aktivna', 'If a variable is a pointer to a structure, then which of the following operator is used to access data members of the structure through the pointer variable?', 'Fill the box', 9),
(44, 'aktivna', 'The operator used to get value at address stored in a pointer variable is', 'list', 9),
(45, 'aktivna', 'Is there any difference int the following declarations?', 'radio', 5),
(46, 'aktivna', 'Are the expressions arr and &arr same for an array of 10 integers?', 'list', 5),
(47, 'aktivna', 'Which of the following cannot be checked in a switch-case statement?', 'radio', 8),
(48, 'aktivna', 'C has been standardized by the American National Standards Institute since ...', 'radio', 3),
(49, 'aktivna', 'C is an imperative ___ language.', 'list', 3),
(50, 'aktivna', 'Filename extensions in C are :', 'checkbox', 3),
(51, 'aktivna', 'Who designed C programming language?', 'radio', 3),
(52, 'aktivna', 'Are a case reserved word?', 'list', 3),
(53, 'aktivna', 'Is following program correct? main() {     printf(\"hello, world\\n\"); }', 'checkbox', 3),
(54, 'aktivna', 'Which of the following is not a data type?', 'radio', 4),
(55, 'aktivna', '*@Ac# is a type of ______________ data.', 'checkbox', 4),
(56, 'aktivna', ' Which of the following is not a valid representation in bits?', 'list', 4),
(57, 'aktivna', 'What are the entities whose values can be changed called?', 'Fill the box', 4),
(58, 'aktivna', 'Which of the following is not a basic data type in C language?', 'radio', 4),
(59, 'aktivna', 'BOOLEAN is a type of data type which basically gives a tautology or fallacy.', 'radio', 3),
(60, 'aktivna', 'The program written by the programmer in high level language is called ', 'list', 4),
(61, 'aktivna', 'What is the final value of x when the code int x; for(x=0; x<10; x++) {} is run?', 'radio', 6),
(62, 'aktivna', 'When does the code block following while(x<100) execute?', 'radio', 7),
(63, 'aktivna', 'How many times is a do while loop guaranteed to loop?', 'checkbox', 7),
(64, 'aktivna', 'Can we use string value/variable in switch test condition?', 'list', 8),
(65, 'aktivna', 'Can we use continue instead of break to move program’s execution at the starting of switch?', 'checkbox', 8),
(66, 'aktivna', 'What will be output when you will execute switch(TRUE){         printf(\"code with Zac\");      }   ?', 'checkbox', 8),
(67, 'aktivna', ' Is nested loop possible?', 'checkbox', 7),
(68, 'aktivna', 'Which loop statement is executed at least once even loop test condition if false?', 'list', 7),
(69, 'aktivna', 'Can we use continue statement without using loop? (small caps)', 'Fill the box', 7),
(70, 'aktivna', 'The statement for(;;) are correct in C? (small caps)', 'Fill the box', 6),
(71, 'aktivna', 'Witch int values k will use in for(k=1; k <= 5; k++); ?', 'checkbox', 6),
(72, 'aktivna', 'What is the output of this program? for(;;)     {   printf(\"Zac\\n\");     break;  }', 'list', 6),
(73, 'aktivna', 'What is the output of this program? for(printf(\"FLOWER \"); printf(\"YELLOW \"); printf(\"FRUITS \"))     {   break;  }', 'radio', 6),
(74, 'aktivna', 'What is the output of this program? do 	{  printf(\"OMG its working!\"); } while(7>10);', 'list', 7),
(75, 'aktivna', 'We can use _____ statement to break the flow of control after every case block.', 'Fill the box', 8),
(76, 'aktivna', 'A switch statement _____ (allows/not allows) a variable to be tested for equality against a list of values.', 'Fill the box', 8),
(77, 'aktivna', 'When a break statement is reached, the switch terminates.', 'radio', 8),
(78, 'aktivna', 'The statement for (i=1,j=1;i<10 && j<10; i++, j++)  are correct in C? (small caps)', 'Fill the box', 6);

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `IdRegistrovani` int(11) NOT NULL,
  PRIMARY KEY (`IdRegistrovani`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`IdRegistrovani`) VALUES
(15),
(18);

-- --------------------------------------------------------

--
-- Table structure for table `registrovani`
--

DROP TABLE IF EXISTS `registrovani`;
CREATE TABLE IF NOT EXISTS `registrovani` (
  `IdRegistrovani` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Prezime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_mail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdRegistrovani`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `e_mail` (`e_mail`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrovani`
--

INSERT INTO `registrovani` (`IdRegistrovani`, `Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES
(14, 'Sara', 'Milovanovic', 'saramilovanovic997@gmail.com', '$2y$10$KwDWt/7uvcJy79tsOdIEduyfpOASj//DpLud.RIoaKzckAOutQfHa', 'Sara'),
(15, 'tasha', 'Sekularac', 'tasha@etf.bg.ac.rs', '$2y$10$1PSqgP7mlbe3tlt.Cr.Woud.0YAq2WDqfa1K354VyyGZVcCoHlHGS', 'Tasha'),
(16, 'jokic', 'Jokic', 'nedeljkojokic97@gmail.com', '$2y$10$I46vN/h..o73ddx9SJt7U.98EayT0/GOH3U1GZXonAFllvM2RxnIK', 'Nedeljko'),
(17, 'Iva', 'Veljkovic', 'veljkovic.iva@gmail.com', '$2y$10$CEQexyIuG1T1rbBWwEtPi.dpeNk/YTFbEtCWbLYoKMrComY2vW8hW', 'Iva'),
(18, 'drazen', 'Draskovic', 'drazen.draskovic@etf.bg.ac.rs', '$2y$10$MxWFH6nO7UESI9zXH794J.gu6YiRZdvJrAcxbLggurZB9eB0KwIxa', 'Drazen'),
(19, 'pera', 'Peric', 'pera@gmail.com', '$2y$10$1mV.B.ilTCWahqLDKPtBROt5/ysW1r6G9RlE71M9X04o.MjzGqxOe', 'Pera'),
(20, 'zika', 'Zikic', 'zika@gmail.com', '$2y$10$RaOC2jCl/qmCrncTl4i3EuznhiCVR7ayM8WqQwE5VrP8jljGTTErq', 'Zika'),
(21, 'mika', 'Mikic', 'mika@gmail.com', '$2y$10$UF4VfWE.yaoSpio.RfBVVOETc/kPuNmVOQPPBnBfDZmVAxp9DDhJu', 'Mika'),
(22, 'jova', 'Jovic', 'jova@gmail.com', '$2y$10$hMLpevbKlx5FwZA80DdrduyYdqN612ICMLU0k8GXs.ZMmGQPeel1u', 'Jova'),
(23, 'simonitza', 'Denic', 'ds@gmail.com', '$2y$10$3Rzra/3Q8NoS.6I9qs5WMuelgOTVcwCosrbcYgkrSrbObkx9WaeE6', 'Simona'),
(24, 'jana', 'Milovanovic', 'msarajana@gmail.com', '$2y$10$xZBhAR8uw7GETnOd8oE.QO4WIM88apksOZfV6kEgeZkxgTpkfw7.S', 'janica');

-- --------------------------------------------------------

--
-- Table structure for table `rezultat`
--

DROP TABLE IF EXISTS `rezultat`;
CREATE TABLE IF NOT EXISTS `rezultat` (
  `IdRezultat` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Procenat_tacnih` float DEFAULT NULL,
  `IdOblast` int(11) NOT NULL,
  `IdRegistrovani` int(11) NOT NULL,
  PRIMARY KEY (`IdRezultat`),
  KEY `R_23` (`IdOblast`),
  KEY `R_24` (`IdRegistrovani`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezultat`
--

INSERT INTO `rezultat` (`IdRezultat`, `Status`, `Procenat_tacnih`, `IdOblast`, `IdRegistrovani`) VALUES
(7, 'pao', 25, 6, 20),
(8, 'polozio', 100, 3, 20),
(9, 'pao', 0, 3, 21),
(10, 'pao', 0, 3, 23),
(11, 'polozio', 50, 3, 24),
(12, 'polozio', 50, 4, 20),
(13, 'polozio', 50, 8, 20),
(14, 'polozio', 75, 7, 20);

-- --------------------------------------------------------

--
-- Table structure for table `slusa`
--

DROP TABLE IF EXISTS `slusa`;
CREATE TABLE IF NOT EXISTS `slusa` (
  `IdRegistrovani` int(11) NOT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdRegistrovani`,`IdKurs`),
  KEY `R_6` (`IdKurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `IdRegistrovani` int(11) NOT NULL,
  `Najbolji` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdRegistrovani`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`IdRegistrovani`, `Najbolji`) VALUES
(19, 'ne'),
(20, 'ne'),
(21, 'ne'),
(22, 'ne'),
(23, 'ne'),
(24, 'da');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `R_1` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `R_14` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_16` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materijali_na_cekanju`
--
ALTER TABLE `materijali_na_cekanju`
  ADD CONSTRAINT `R_25` FOREIGN KEY (`IdOblast`) REFERENCES `oblast` (`IdOblast`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `oblast`
--
ALTER TABLE `oblast`
  ADD CONSTRAINT `R_17` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ocena`
--
ALTER TABLE `ocena`
  ADD CONSTRAINT `R_11` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_13` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `odgovor`
--
ALTER TABLE `odgovor`
  ADD CONSTRAINT `R_26` FOREIGN KEY (`IdPitalica`) REFERENCES `pitalica` (`IdPitalica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `odslusani`
--
ALTER TABLE `odslusani`
  ADD CONSTRAINT `R_7` FOREIGN KEY (`IdRegistrovani`) REFERENCES `student` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_8` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pitalica`
--
ALTER TABLE `pitalica`
  ADD CONSTRAINT `R_18` FOREIGN KEY (`IdOblast`) REFERENCES `oblast` (`IdOblast`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `R_3` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rezultat`
--
ALTER TABLE `rezultat`
  ADD CONSTRAINT `R_23` FOREIGN KEY (`IdOblast`) REFERENCES `oblast` (`IdOblast`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_24` FOREIGN KEY (`IdRegistrovani`) REFERENCES `student` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slusa`
--
ALTER TABLE `slusa`
  ADD CONSTRAINT `R_5` FOREIGN KEY (`IdRegistrovani`) REFERENCES `student` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_6` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `R_2` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

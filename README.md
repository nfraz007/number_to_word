# NumberToWord
A php file to convert any number to word form.

# Documentation
Full documentation [Click here](https://nfraz007.github.io/NumberToWord/)

Live demo [Click here](http://nazishfraz.co.nf/number_to_word)

# Setup

Setup is very easy, just import the file into your project and you are all set.

```
include("NumberToWord.php");
```

or

```
require 'NumberToWord.php';
```

# Convert a number
To convert any number to its word form, create an instance of NumberToWord class. you can then call the convert() function on the NumberToWord object, passing one parameter as number you want to convert

* Input must be a integer value in string format.

* **Maximum limit of length of input string = 99**

```
$obj = new NumberToWord();
echo $obj->convert("123");
```

> one hundred twenty-three

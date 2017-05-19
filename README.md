# NumberToWord
A php file to convert any number to word form.

# Documentation
You can find the documentation at https://nfraz007.github.io/NumberToWord/

## Setup

First, import the file NumberToWord.php

```
require 'NumberToWord.php';
```

### Function name and parameter
To convert any number to its word form, you have to call a function convert(), which take one parameter as string and give a output in json. Please see the function detail given below.

name : convert()

input : string

output : json

### Maximum limit of length of input string = 99

### Convert number
```
  // call convert(string) funtion, it will return a json string.
  $output = convert('123');
  $output = convert('1a');
  $output = convert('0');
  
  /*
    {"status":"success", "input":"123", "output":"one hundred twenty-three"}
    {"status":"error", "input":"1a", "output":"not a valid number"}
    {"status":"success", "input":"0", "output":"zero"}
  */
```

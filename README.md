# numberToWord
A php file to convert any number to word form.

[Click here for demo](http://nfraz.co.nf/demo/numberToWord/demo.php)
============================================================

## Usage

First, import the file numberToWord.php

```import github.com/nfraz007/numberToWord```

### Function name and parameter
name : convert()
input : string
output : json

### Maximum limit of length of input string = 99

### Convert number
```go
  // call convert(string) funtion, it will resturn a json string.
  $output = convert('123');
  $output = convert('1a');
  $output = convert('0');
  
  /*
    {"status":"success", "input":"123", "output":"One hundred twenty-three"}
    {"status":"error", "input":"1a", "output":"not a valid number"}
    {"status":"success", "input":"0", "output":"Zero"}
  */
```

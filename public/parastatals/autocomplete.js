$(function() {  
    var availableTags = [  
      "Para",  
      "AppleScript",  
      "Asp",  
      "BASIC",  
      "C",  
      "C++",  
      "Clojure",  
      "COBOL",  
      "ColdFusion",  
      "Erlang",  
      "Fortran",  
      "Groovy",  
      "Haskell",  
      "Java",  
      "JavaScript",  
      "Lisp",  
      "Perl",  
      "PHP",  
      "Python",  
      "Ruby",  
      "Scala",  
      "Scheme"  
    ];  
    $( "#parastatals" ).autocomplete({  
      source: availableTags  
    });  
  });  
$(function() {  
    var availableTags = [  
      "MInistry",  
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
    $( "#ministry" ).autocomplete({  
      source: availableTags  
    });  
  }); 
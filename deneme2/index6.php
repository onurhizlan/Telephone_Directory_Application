<html>
  <head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="typeahead.js"></script>
    </head>
    <body>
     <input type="text" name="typeahead">
    </body>
    </html>
	
	 <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>
	

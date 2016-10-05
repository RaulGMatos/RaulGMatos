<?

//   require and include
//   require and include commands allow us to use one file in several different PHP scripts
//   files to be included can contain plain text, html, or php code enclosed in the delimiters 
//   by convention files usually end in .inc but do not have to
//
//   require and include differ mainly in the way PHP processes them
//
//   PHP replaces require with the contents of the file (even if the line containing require is never executed)
//   include is processed only when the statement is executed correctly and returns true (or false)
//   if based on a condition use include
//
//   require_once and include_once are used when we include a file and we do not want to include it again
//   after the file has been included PHP ignores any staements that tr to include t again (good when including functions)

// include("top.inc"); ?>

<?

//   file writing
//   fopen  --- before we can write to a file we must establish a connection by using fopen
//   fopen takes two arguments, the file name and the access mode
//   a file pointer (a PHP variable) is needed for operations to the file
//   "w" is the file access mode for writing
//   "w" creates a new file if the file does not exist
//   "w" access mode will overwrite the file
//   when opened for writing the file position indicator points to where the next operation will be performed
//   fputs --- write a line to the file
//   fputs takes two arguments, the file pointer (a PHP variable) and the information to be written
//   an optional third argument specifies the maximum line length in bytes
//   fclose --- use fclose to close the file connection
//   access modes
//     r --- open for reading only, place file position indicator at the start of the file
//     r+ --- open for reading and writing, place file position indicator at the start of the file
//     w --- open for writing only, place file position indicator at the start of the file, create if file does not exist
//     w+ --- open for reading and writing, place file position indicator at the start of the file, create if file does not exist
//     a --- open for writing only, place file position indicator at the end of the file, create if file does not exist
//     a+ --- open or reading and writing, place file position indicator at the end of the file, create if file does not exist

$my_file_name = "tmp/data1.html";       #  place the name of the file into a string (file exists with proper chmod)
$my_data = ' <html><head><title>basic php 00</title></head><body>Experiments and excursions into php (file investigtions).</body></html>';

# open a file and attach to file pointer

	if (! ( $my_file_pointer  =  fopen($my_file_name, "w"))){
		print ("Error:  ");
		print ("  $my_file_name could not be written or created\n ");
		exit;    # exit script
	}// end if
	
fputs ($my_file_pointer, $my_data, 1024);
fclose ($my_file_pointer);

print '<p>Here is a link to the file we just created : <a href=" ' . "$my_file_name" . ' ">' . "$my_file_name" . '</a><p>';

#   read example
#   file --- the file function may be used to auto open, read, and close a file
#   file takes the file name as an argument and returns the contents as an array

	$contents = file($my_file_name);	     # hazzah!
	
	print "<pre>";
      print_r ($contents);
    print "<pre>";
?>
 
<? 
// include("bottom.inc"); 
?>

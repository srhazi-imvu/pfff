<?php
/*
 * Purpose: Check whether client disconnected
 * Example: 
 * 
 * Output: 
 */
function connection_aborted() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns connection status bitfield
 * Example: 
 * 
 * Output: 
 */
function connection_status() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Check if the script timed out
 * Example: 
 * 
 * Output: 
 */
function connection_timeout() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns the value of a constant
 * Example:   
 *   <?php
 *   
 *   define("MAXSIZE", 100);
 *   
 *   echo MAXSIZE;
 *   echo constant("MAXSIZE"); // same thing as the previous line
 *   
 *   
 *   interface bar {
 *       const test = 'foobar!';
 *   }
 *   
 *   class foo {
 *       const test = 'foobar!';
 *   }
 *   
 *   $const = 'test';
 *   
 *   var_dump(constant('bar::'. $const)); // string(7) "foobar!"
 *   var_dump(constant('foo::'. $const)); // string(7) "foobar!"
 *   
 *   ?>
 * 
 * Output: 
 */
function constant(String $name, String $this_class = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Defines a named constant
 * Example:   
 *   <?php
 *   define("CONSTANT", "Hello world.");
 *   echo CONSTANT; // outputs "Hello world."
 *   echo Constant; // outputs "Constant" and issues a notice.
 *   
 *   define("GREETING", "Hello you.", true);
 *   echo GREETING; // outputs "Hello you."
 *   echo Greeting; // outputs "Hello you."
 *   
 *   ?>
 * 
 * Output: 
 */
function define(String $name, Variant $value, Boolean $case_insensitive = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Checks whether a given named constant exists
 * Example:   
 *   <?php
 *   /* Note the use of quotes, this is important.  This example is checking
 *    * if the string 'TEST' is the name of a constant named TEST  * / 
 *   if (defined('TEST')) {
 *       echo TEST;
 *   }
 *   ?>
 * 
 * Output: 
 */
function defined(String $name, String $this_class = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Equivalent to  <function>exit</function>
 * Example: 
 * 
 * Output: 
 */

/*
 * Purpose: Output a message and terminate the current script
 * Example:   
 *   <?php
 *   
 *   $filename = '/path/to/data-file';
 *   $file = fopen($filename, 'r')
 *       or exit("unable to open file ($filename)");
 *   
 *   ?>
 * 
 * Output:   
 *    Shutdown: shutdown()
 *    Destruct: Foo::__destruct()
 *    
 */

/*
 * Purpose: Evaluate a string as PHP code
 * Example:   
 *   <?php
 *   $string = 'cup';
 *   $name = 'coffee';
 *   $str = 'This is a $string with my $name in it.';
 *   echo $str. "\n";
 *   eval("\$str = \"$str\";");
 *   echo $str. "\n";
 *   ?>
 * 
 * Output:   
 *   This is a $string with my $name in it.
 *   This is a cup with my coffee in it.
 */

/*
 * Purpose: Tells what the user's browser is capable of
 * Example:   
 *   <?php
 *   echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
 *   
 *   $browser = get_browser(null, true);
 *   print_r($browser);
 *   ?>
 * 
 * Output:   
 *   Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040803 Firefox/0.9.3
 *   
 *   Array
 *   (
 *       [browser_name_regex] => ^mozilla/5\.0 (windows; .; windows nt 5\.1; .*rv:.*) gecko/.* firefox/0\.9.*$
 *       [browser_name_pattern] => Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:*) Gecko/* Firefox/0.9*
 *       [parent] => Firefox 0.9
 *       [platform] => WinXP
 *       [browser] => Firefox
 *       [version] => 0.9
 *       [majorver] => 0
 *       [minorver] => 9
 *       [cssversion] => 2
 *       [frames] => 1
 *       [iframes] => 1
 *       [tables] => 1
 *       [cookies] => 1
 *       [backgroundsounds] =>
 *       [vbscript] =>
 *       [javascript] => 1
 *       [javaapplets] => 1
 *       [activexcontrols] =>
 *       [cdf] =>
 *       [aol] =>
 *       [beta] => 1
 *       [win16] =>
 *       [crawler] =>
 *       [stripper] =>
 *       [wap] =>
 *       [netclr] =>
 *   )
 */
function get_browser(String $user_agent = null_string, Boolean $return_array = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}


/*
 * Purpose: Syntax highlighting of a file
 * Example: 
 * 
 * Output:   
 *   AddType application/x-httpd-php-source .phps
 */
function highlight_file(String $filename, Boolean $ret = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: &Alias;  <function>highlight_file</function>
 * Example: 
 * 
 * Output: 
 */
function show_source(String $filename, Boolean $ret = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Syntax highlighting of a string
 * Example:   
 *   <?php
 *   highlight_string('<?php phpinfo(); ?>');
 *   ?>
 * 
 * Output:   
 *   <code><font color="#000000">
 *   <font color="#0000BB">&lt;?php phpinfo</font><font color="#007700">(); </font><font color="#0000BB">?&gt;</font>
 *   </font>
 *   </code>
 */
function highlight_string(String $str, Boolean $ret = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Set whether a client disconnect should abort script execution
 * Example:   
 *   <?php
 *   // Ignore user aborts and allow the script
 *   // to run forever
 *   ignore_user_abort(true);
 *   set_time_limit(0);
 *   
 *   echo 'Testing connection handling in PHP';
 *   
 *   // Run a pointless loop that sometime 
 *   // hopefully will make us click away from 
 *   // page or click the "Stop" button.
 *   while(1)
 *   {
 *       // Did the connection fail?
 *       if(connection_status() != CONNECTION_NORMAL)
 *       {
 *           break;
 *       }
 *   
 *       // Sleep for 10 seconds
 *       sleep(10);
 *   }
 *   
 *   // If this is reached, then the 'break' 
 *   // was triggered from inside the while loop
 *   
 *   // So here we can log, or perform any other tasks
 *   // we need without actually being dependent on the 
 *   // browser.
 *   ?>
 * 
 * Output: 
 */
function ignore_user_abort(Boolean $setting = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Pack data into binary string
 * Example:   
 *   <?php
 *   $binarydata = pack("nvc*", 0x1234, 0x5678, 65, 66);
 *   ?>
 * 
 * Output: 
 */
function pack(String $format) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
 $args = func_num_args(); // fake code to say variable #args
 
}

/*
 * Purpose:    Check the PHP syntax of (and execute) the specified file
 * Example: 
 * 
 * Output:   
 *   php -l somefile.php
 */
function php_check_syntax(String $filename, String &$error_message = null) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Return source with stripped comments and whitespace
 * Example:   
 *   <?php
 *   // PHP comment here
 *   
 *   /*
 *    * Another PHP comment
 *     * / 
 *   
 *   echo        php_strip_whitespace(__FILE__);
 *   // Newlines are considered whitespace, and are removed too:
 *   do_nothing();
 *   ?>
 * 
 * Output:   
 *   <?php
 *    echo php_strip_whitespace(__FILE__); do_nothing(); ?>
 */
function php_strip_whitespace(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Delay execution
 * Example:   
 *   <?php
 *   
 *   // current time
 *   echo date('h:i:s') . "\n";
 *   
 *   // sleep for 10 seconds
 *   sleep(10);
 *   
 *   // wake up !
 *   echo date('h:i:s') . "\n";
 *   
 *   ?>
 * 
 * Output:   
 *   05:31:23
 *   05:31:33
 */
function sleep(Int32 $seconds) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Delay execution in microseconds
 * Example:   
 *   <?php
 *   
 *   // Current time
 *   echo date('h:i:s') . "\n";
 *   
 *   // wait for 2 seconds
 *   usleep(2000000);
 *   
 *   // back!
 *   echo date('h:i:s') . "\n";
 *   
 *   ?>
 * 
 * Output:   
 *   11:13:28
 *   11:13:30
 */
function usleep(Int32 $micro_seconds) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Delay for a number of seconds and nanoseconds
 * Example:   
 *   <?php
 *   // Careful! This won't work as expected if an array is returned
 *   if (time_nanosleep(0, 500000000)) {
 *       echo "Slept for half a second.\n";
 *   }
 *   
 *   // This is better:
 *   if (time_nanosleep(0, 500000000) === true) {
 *       echo "Slept for half a second.\n";
 *   }
 *   
 *   // And this is the best:
 *   $nano = time_nanosleep(2, 100000);
 *   
 *   if ($nano === true) {
 *       echo "Slept for 2 seconds, 100 microseconds.\n";
 *   } elseif ($nano === false) {
 *       echo "Sleeping failed.\n";
 *   } elseif (is_array($nano)) {
 *       $seconds = $nano['seconds'];
 *       $nanoseconds = $nano['nanoseconds'];
 *       echo "Interrupted by a signal.\n";
 *       echo "Time remaining: $seconds seconds, $nanoseconds nanoseconds.";
 *   }
 *   ?>
 * 
 * Output: 
 */
function time_nanosleep(Int32 $seconds, Int32 $nanoseconds) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose:    Make the script sleep until the specified time
 * Example:   
 *   <?php
 *   
 *   //returns false and generates a warning
 *   var_dump(time_sleep_until(time()-1));
 *   
 *   // may only work on faster computers, will sleep up to 0.2 seconds
 *   var_dump(time_sleep_until(microtime(true)+0.2));
 *   
 *   ?>
 * 
 * Output: 
 */
function time_sleep_until(Double $timestamp) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Generate a unique ID
 * Example:   
 *   <?php
 *   /* A uniqid, like: 4b3403665fea6  * / 
 *   printf("uniqid(): %s\r\n", uniqid());
 *   
 *   /* We can also prefix the uniqid, this the same as 
 *    * doing:
 *    *
 *    * $uniqid = $prefix . uniqid();
 *    * $uniqid = uniqid($prefix);
 *     * / 
 *   printf("uniqid('php_'): %s\r\n", uniqid('php_'));
 *   
 *   /* We can also activate the more_entropy parameter, which is 
 *    * required on some systems, like Cygwin. This makes uniqid()
 *    * produce a value like: 4b340550242239.64159797
 *     * / 
 *   printf("uniqid('', true): %s\r\n", uniqid('', true));
 *   ?>
 * 
 * Output: 
 */
function uniqid(String $prefix = null_string, Boolean $more_entropy = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Unpack data from binary string
 * Example:   
 *   <?php
 *   $array = unpack("c2chars/nint", $binarydata);
 *   ?>
 * 
 * Output: 
 */
function unpack(String $format, String $data) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets system load average
 * Example:   
 *   <?php
 *   $load = sys_getloadavg();
 *   if ($load[0] > 80) {
 *       header('HTTP/1.1 503 Too busy, try again later');
 *       die('Server too busy. Please try again later.');
 *   }
 *   ?>
 * 
 * Output: 
 */
function sys_getloadavg() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

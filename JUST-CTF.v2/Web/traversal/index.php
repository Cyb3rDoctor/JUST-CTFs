<!DOCTYPE html>
		<h2>What is a Directory Traversal attack?</h2>
<p>Properly controlling access to web content is crucial for running a secure web server. Directory traversal or <a href="https://www.acunetix.com/blog/articles/path-traversal/">Path Traversal</a> is an HTTP attack which allows attackers to access restricted directories and execute commands outside of the web server&#8217;s root directory.</p>
<p>Web servers provide two main levels of security mechanisms</p>
<ul>
<li>Access Control Lists (ACLs)</li>
<li>Root directory</li>
</ul>
<p>An Access Control List is used in the authorization process. It is a list which the web server&#8217;s administrator uses to indicate which users or groups are able to access, modify or execute particular files on the server, as well as other access rights.</p>
<p><img class="alignleft size-full wp-image-791" title="Directory Traversal Attacks" src="https://www.acunetix.com/wp-content/uploads/2012/10/PTMFOG00000002841.gif" alt="What is a Directory Traversal Attack?" width="223" height="339" /></p>

<!--hint: try to use http://url/traversal/?page=traversal/hint.txt -->
<?php
    $page = $_GET['page']; // index.php
    include("/var/www/html/" . $page);
?>


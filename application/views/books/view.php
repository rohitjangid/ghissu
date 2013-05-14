<?php
	@$isbn=$_GET['isbn'];
	if($isbn != ''){
	header("Location: ".$isbn); 
	exit;
	}
?>	
<?php
echo "<li><img src='{$image}' /></li>";
echo '<li><table><tr><td colspan="2"><h2>'.$book['title'].'</h2></td></tr>';
echo '<tr><td>By: </td><td>'.$book['author'].'</td></tr>';
echo '<tr><td>Publisher: </td><td>'.$publisher.'</td></tr>';
echo '<tr><td>ISBN: </td><td>'.$isbn.'</td></tr>';
echo '<tr><td>Binding: </td><td>'.$binding.'</td></tr>';
if ($pages)
{
	echo '<tr><td>Pages: </td><td>'.$pages.'</td></tr>';
}
echo '<tr><td>Language: </td><td>'.$language.'</td></tr>';
echo '<tr><td> Category: </td><td>'.$category.'</td></tr>';
echo '<tr><td>Description: </td><td>'.$description.'</td></tr></table></li>';
?>
<li id="form">
<form action='' method='get'>
<em>Search a book: <em><input type='text' name='isbn'>
<input type='submit' value='Search'>
</form>
</li>
<li id="home">
<a href='../'>Or go home</a>
</li>
</ul>
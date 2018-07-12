//An array of splash texts.
var splash = new Array('splash.txt', 'index.html', 'Flippity.github.io', 'iovid', ':0', 'Back to the lab again', 'yo yo yo, everybody', 'Insert Racist Text Here', 'Why did the chicken cross the road?', 'All heil plankton', 'Karl Marx, more like, communism', 'Insensitive comment here', '-|Hello|-', 'index.php', 'Javascript', 'mySQL', 'Hosted by yours truly', 'M&M is a Wrapper');

//Changes a text box to have a random splash text.
document.getElementById("sub-heading").innerHTML = splash[Math.floor(Math.random() * (splash.length))];
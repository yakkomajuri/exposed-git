# Commands Cheat Sheet

```php -v```

Check if you have PHP installed / the PHP version you have

```mkdir exposed-git```

Create a new directory named ```exposed-git```

```cd exposed-git```

"Change Directory" -> Enter ```exposed-git/```

```git init```

Initialize a new ```.git/``` directory

```echo "<h1>I will be hacked soon!</h1>" > index.php```

Create a file named ```index.php``` with the specified content

```php -S localhost:8000```

Run the PHP server on ```localhost:8000```

```touch config.php```

Create a new file named ```config.php```

```echo "<h1>You really thought you could hack me?</h1>" > error.php```

Create a file named ```error.php``` with the specified content

```git add .```

"Add" all files in the directory to git (i.e. create their objects)

```git commit -m "first commit"```

Create a commit object with the changes made (and added!) since the previous commit

```mkdir .git/objects/f4```

Create a new subdirectory inside ```objects/``` for the incoming file 

```curl localhost:8000/.git/objects/f4/52d4085347400afa8751aae3a5184d73113628 --output ./.git/objects/f4/52d4085347400afa8751aae3a5184d73113628```

Download the file with specified hash from the server and add it in its respective location in the local repository

```git cat-file -p <HASH>```

Print to the console the content of the file specified by hash ```<HASH>``` in human-readable format.

```git cat-file -t <HASH>```

Print to the console the type of the file specified by hash ```<HASH>``` in human-readable format. Possibilities: tree; blob; commit; annotated tag.





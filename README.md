## Footer template

In /patterns/footer there is a dynamic footer. To use it for projects you need make some steps:

1. Create `$year`
```
//get current data for dynamic footer
$data = getdate();
$year = $data["year"];
```

2. Connect footer to project.
To connect the better method is to use file_get_contents
```
$footer = file_get_contents('https://raw.githubusercontent.com/.../footer.php');
if($footer !== false) {
    eval('?>' . $footer);
} else {
    echo '<!-- Footer loading error -->';
}
```
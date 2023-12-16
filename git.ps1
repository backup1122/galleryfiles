# List of files
$fileList = @("f/r/31",  "f/r/32", "f/r/33")

# Loop through each file
foreach ($file in $fileList) {
    # Git add
    git add $file

    # Git commit
    git commit -m "$file"

    # Git push to origin master
    git push origin master

    # Print filename
    Write-Output "File '$file' done"
}

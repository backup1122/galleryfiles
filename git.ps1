# List of files
$fileList = @("f/r/23",  "f/r/25", "f/r/26", "f/r/27", "f/r/28", "f/r/29", "f/r/3", "f/r/30", "f/r/4", "f/r/5", "f/r/6", "f/r/7", "f/r/8", "f/r/9")

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

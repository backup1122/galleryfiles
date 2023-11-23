Get-ChildItem -Recurse -Include *.* -File | 
ForEach-Object{
    Rename-Item -Path $_.FullName -NewName ( $_.BaseName.SubString(0, 150) + $_.Extension )
    }
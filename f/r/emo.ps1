$Files = gci | where {$_.Name -match "[^\u0020-\u007F]"}

$Files | ForEach-Object {
$OldName = $_.Name
$NewName = $OldName -replace "[^\u0020-\u007F]", ""
ren $_ $NewName
}
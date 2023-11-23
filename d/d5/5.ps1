Get-ChildItem '*.webp' | Rename-Item -NewName { $_.Name -Replace 'webp','jpg' }
Get-ChildItem '*.jfif' | Rename-Item -NewName { $_.Name -Replace 'jfif','jpg' }

command = "cmd /c ""http-server -p 5656"
Set WshShell = CreateObject("WScript.Shell")
ReturnCode = WshShell.Run(command, 0, True)
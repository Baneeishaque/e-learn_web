Dim message, sapi
 message = InputBox(vbcrlf)
 Set sapi = CreateObject("sapi.spvoice")
 sapi.Speak message
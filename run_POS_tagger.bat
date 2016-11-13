

@ECHO OFF

cd ../../..
cd c:\TreeTagger

set PATH=C:\TreeTagger\bin;%PATH%

tag-english C:\wamp\www\enes_dict\newfile.txt > temp.txt


"C:\Windows\System32\cmd.exe" 


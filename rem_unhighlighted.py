# -*- coding: cp1252 -*-
		
pos=open('C:/TreeTagger/temp.txt').read()


pos=pos.split()
for n,w in enumerate(pos):
	if pos[n].isupper() and len(pos[n]) < 6 and len(pos[n]) > 1 and pos[n].isalpha() and pos[n-1]== pos[n+1]:
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and len(pos[n]) < 6 and len(pos[n]) > 1 and pos[n].isalpha() and '|' in pos[n-3]:
		pos[n]=' |'+ pos[n]+'| '
	elif pos[n].isupper() and len(pos[n]) < 6 and len(pos[n]) > 1 and pos[n].isalpha() and '|' in pos[n+3]:
		pos[n]=' |'+ pos[n]+'| '


for n,w in enumerate(pos):
	if w=='</s>':
		pos[n]='</s>\n'
	

for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'NP':
		pos[n]=' |'+ pos[n]+'| '

		

for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'ART':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'UH':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'VBP':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'LS':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'DT':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'CARD':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'APPRART':
		pos[n]=' |'+ pos[n]+'| '

		


for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'ADJD':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'VVPP':
		pos[n]=' |'+ pos[n]+'|'

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'PTKNEG':
		pos[n]=' |'+ pos[n]+'|'

		

for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'CD':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'NN':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'NNS':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'VBN':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'ADJA':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== ' PPOSAT':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'NE':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'IN':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'VBZ':
		pos[n]=' |'+ pos[n]+'| '

		

for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'VBD':
		pos[n]=' |'+ pos[n]+'| '

		

for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'FW':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== ';':
		pos[n]='; |'+ pos[n]+'| ;'

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'JJ':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'LS':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'RB':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'VB':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== ':':
		pos[n]=': |'+ pos[n]+'| :'

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'VBG':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'PP$':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if pos[n].isupper() and pos[n]== 'WP$':
		pos[n]=' |'+ pos[n]+'| '

		
for n,w in enumerate(pos):
	if w=='<unknown>':
		pos[n]=pos[n-2]

		
for n,w in enumerate(pos):
	if w=='@card@':
		pos[n]=pos[n-2]

		

for n,w in enumerate(pos):
	if w=='.':
		pos[n]=''

for n,w in enumerate(pos):
	if w==' SENT ':
		pos[n]=' . |.| . '

for n,w in enumerate(pos):
	if w=='$.':
		pos[n]=' . |.| . '

for n,w in enumerate(pos):
	if w=='$,':
		pos[n]=','

pos=' '.join(pos)
pos=pos.replace("( $( ("," ( |$(| (")
pos=pos.replace(") $( ) "," ) |$(| )")
pos=pos.replace("/ $( /","/| $( |/")
pos=pos.replace(", , , ", ", |,| , ")
pos=pos.replace("( ( (", "( |(| ( ")
pos=pos.replace(") ) )", ") |)| ) ")
pos=pos.replace("|SENT|", " . |.| . ")

pos=pos.replace("; : ;", " ; |:| ;")
pos=pos.replace(": : :", " : |:| :")
pos=pos.replace("- : -", " - |:| -")
pos=pos.replace("!  . |.| .  !", "! |.| !")
pos=pos.replace("« ) «", " «| ) |«")
pos=pos.replace("« ( «", " «| ( |«")
pos=pos.replace("} ) }", "}| ) |}")
pos=pos.replace("{ ( {", "{| ( |{")
pos=pos.replace("# # #", "#| # |#")
pos=pos.replace("?   . |.| .   ?", "? |.| ?")
pos=pos.replace("!   . |.| .   !", "! |.| !")
pos=pos.replace("... : ...", "...| : |...")
pos=pos.replace(":  . |.| .  :", ": |.| :")
pos=pos.replace(";  . |.| .  ;", "; |.| ;")

outputfile=open('C:/wamp/www/rem_dupl_Across5/factored.txt', 'w')
outputfile.write(pos)
outputfile.close()


pos=open('C:/wamp/www/rem_dupl_Across5/factored.txt').read()


factored=pos
factored=factored.split()

for n,w in enumerate(factored):
	if w=='</s>':
		factored[n]='</s>\n'
for n,w in enumerate(factored):
         factored[1] = ""
for n,w in enumerate(factored):
         factored[3] = ""

for n,w in enumerate(factored):
         factored[7] = ""

factored=' '.join(factored)

factored=factored.replace("| ","|")

factored=factored.split()
for n,w in enumerate(factored):
	if '|' not in w:
		factored[n]=''
	
factored=' '.join(factored)
factored=factored.replace("| "," ")
factored=factored.replace("/","")
factored=factored.replace(" ","")
outputfile=open('C:/wamp/www/rem_dupl_Across5/lemma_syntax.txt', 'w')
outputfile.write(factored)
outputfile.close()

###############################




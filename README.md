##Update Site  
If anyone is going to do any fixes - please do not just do any changes or fixes in the html page itself. 
It needs to be done in the php template, located under template/page, or template/region. Once you are done 
with changes please compile these file and generate html using following command ./php2html.sh

Changes to the common header or footer need to be done via head.tpl.php, header.tpl.php or footer.tpl 
under template/region. 
If change is done to the header or footer then regenerate all the html pages.
Use the php2html.sh script to compile all the modified template files in one shoot.

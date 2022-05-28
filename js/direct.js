setTimeout(function() {
var howMany = 10; 
var page = new Array(howMany+1);
page[0]="https://wahyu9kdl.github.io/index.html";
page[1]="https://wahyu9kdl.github.io/Bootstrap.html";
page[2]="https://wahyu9kdl.github.io/DASHBOARD/PROJECTS/ANIMATION/Generator-Color.html";
page[3]="https://wahyu9kdl.github.io/DASHBOARD/PROJECTS/MIKROVER/CHECK-DNS.html";
page[4]="https://wahyu9kdl.github.io/DASHBOARD/TOOLS/CANVAS.html";
page[5]="https://wahyu9kdl.github.io/DASHBOARD/TOOLS/LEAN-WEB.html
page[6]="https://wahyu9kdl.github.io/HTML/TOOLS/Markdown/markdown-css.html";
page[7]="https://wahyu9kdl.github.io/HTML/htmltemplategenerator-gh-pages/index.html";
page[8]="https://wahyu9kdl.github.io/DASHBOARD/TOOLS/CodeSandbox.html";
page[9]="https://wahyu9kdl.github.io/quran-digital/";
page[10]="https://wahyu9kdl.github.io/AL-HIKMAH/";

function rndnumber(){
var randscript = -1;
while (randscript < 0 || randscript > howMany || isNaN(randscript)){
randscript = parseInt(Math.random()*(howMany+1));
}
return randscript;
}
quo = rndnumber();
quox = page[quo];
window.location=(quox);
}, 1000);

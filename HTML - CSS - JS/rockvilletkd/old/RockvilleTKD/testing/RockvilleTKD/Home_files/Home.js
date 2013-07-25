// Created by iWeb 3.0.4 local-build-20130112

function writeMovie1()
{detectBrowser();if(windowsInternetExplorer)
{document.write('<object id="id2" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" width="336" height="205" style="height: 205px; left: 769px; position: absolute; top: 52px; width: 336px; z-index: 1; "><param name="src" value="Media/Tourny%20Trailer-1080p.mov" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="scale" value="tofit" /><param name="volume" value="100" /><param name="loop" value="false" /></object>');}
else if(isiPhone)
{document.write('<object id="id2" type="video/quicktime" width="336" height="205" style="height: 205px; left: 769px; position: absolute; top: 52px; width: 336px; z-index: 1; "><param name="src" value="Home_files/Tourny%20Trailer-1080p-1.jpg"/><param name="target" value="myself"/><param name="href" value="../Media/Tourny%20Trailer-1080p.mov"/><param name="controller" value="true"/><param name="scale" value="tofit"/></object>');}
else
{document.write('<object id="id2" type="video/quicktime" width="336" height="205" data="Media/Tourny%20Trailer-1080p.mov" style="height: 205px; left: 769px; position: absolute; top: 52px; width: 336px; z-index: 1; "><param name="src" value="Media/Tourny%20Trailer-1080p.mov"/><param name="controller" value="true"/><param name="autoplay" value="false"/><param name="scale" value="tofit"/><param name="volume" value="100"/><param name="loop" value="false"/></object>');}}
setTransparentGifURL('Media/transparent.gif');function applyEffects()
{var registry=IWCreateEffectRegistry();registry.registerEffects({shadow_0:new IWShadow({blurRadius:1,offset:new IWPoint(0.0000,-0.0000),color:'#000000',opacity:0.230000}),stroke_0:new IWPhotoFrame([IWCreateImage('Home_files/Freestyle_01.png'),IWCreateImage('Home_files/Freestyle_02.png'),IWCreateImage('Home_files/Freestyle_03.png'),IWCreateImage('Home_files/Freestyle_06.png'),IWCreateImage('Home_files/Freestyle_09.png'),IWCreateImage('Home_files/Freestyle_08.png'),IWCreateImage('Home_files/Freestyle_07.png'),IWCreateImage('Home_files/Freestyle_04.png')],null,2,0.802632,3.000000,3.000000,3.000000,3.000000,22.000000,24.000000,23.000000,25.000000,166.000000,222.000000,166.000000,222.000000,null,null,null,0.100000),shadow_2:new IWShadow({blurRadius:2,offset:new IWPoint(0.0000,-1.0000),color:'#000000',opacity:0.500000}),shadow_1:new IWShadow({blurRadius:2,offset:new IWPoint(0.0000,-1.0000),color:'#000000',opacity:0.500000})});registry.applyEffects();}
function hostedOnDM()
{return false;}
function onPageLoad()
{loadMozillaCSS('Home_files/HomeMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');adjustLineHeightIfTooBig('id3');adjustFontSizeIfTooBig('id3');adjustLineHeightIfTooBig('id4');adjustFontSizeIfTooBig('id4');adjustLineHeightIfTooBig('id5');adjustFontSizeIfTooBig('id5');detectBrowser();adjustLineHeightIfTooBig('id6');adjustFontSizeIfTooBig('id6');adjustLineHeightIfTooBig('id7');adjustFontSizeIfTooBig('id7');adjustLineHeightIfTooBig('id8');adjustFontSizeIfTooBig('id8');Widget.onload();fixupAllIEPNGBGs();fixAllIEPNGs('Media/transparent.gif');applyEffects()}
function onPageUnload()
{Widget.onunload();}

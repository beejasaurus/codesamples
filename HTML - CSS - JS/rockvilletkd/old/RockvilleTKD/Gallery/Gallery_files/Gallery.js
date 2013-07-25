// Created by iWeb 3.0.4 local-build-20130103

function createMediaStream_id2()
{return IWCreateMediaCollection("http://www.RockvilleTKD.com/RockvilleTKD/Gallery/Gallery_files/rss.xml",true,255,["No photos yet","%d photo","%d photos"],["","%d clip","%d clips"]);}
function initializeMediaStream_id2()
{createMediaStream_id2().load('http://www.RockvilleTKD.com/RockvilleTKD/Gallery',function(imageStream)
{var entryCount=imageStream.length;var headerView=widgets['widget5'];headerView.setPreferenceForKey(imageStream.length,'entryCount');NotificationCenter.postNotification(new IWNotification('SetPage','id2',{pageIndex:0}));});}
function layoutMediaGrid_id2(range)
{createMediaStream_id2().load('http://www.RockvilleTKD.com/RockvilleTKD/Gallery',function(imageStream)
{if(range==null)
{range=new IWRange(0,imageStream.length);}
IWLayoutPhotoGrid('id2',new IWPhotoGridLayout(2,new IWSize(272,204),new IWSize(272,41),new IWSize(327,260),27,27,0,new IWSize(50,51)),new IWPhotoFrame([IWCreateImage('Gallery_files/kids_ul.png'),IWCreateImage('Gallery_files/kids_top.jpg'),IWCreateImage('Gallery_files/kids_ur.png'),IWCreateImage('Gallery_files/kids_right.png'),IWCreateImage('Gallery_files/kids_lr.png'),IWCreateImage('Gallery_files/kids_bottom.png'),IWCreateImage('Gallery_files/kids_ll.png'),IWCreateImage('Gallery_files/kids_left.png')],null,0,0.500000,118.000000,0.000000,132.000000,0.000000,174.000000,44.000000,176.000000,58.000000,60.000000,63.000000,60.000000,63.000000,null,null,null,0.300000),imageStream,range,(null),null,1.000000,null,'../Media/slideshow.html','widget5',null,'widget6',{showTitle:true,showMetric:true})});}
function relayoutMediaGrid_id2(notification)
{var userInfo=notification.userInfo();var range=userInfo['range'];layoutMediaGrid_id2(range);}
function onStubPage()
{var args=window.location.href.toQueryParams();parent.IWMediaStreamPhotoPageSetMediaStream(createMediaStream_id2(),args.id);}
if(window.stubPage)
{onStubPage();}
setTransparentGifURL('../Media/transparent.gif');function hostedOnDM()
{return false;}
function onPageLoad()
{IWRegisterNamedImage('comment overlay','../Media/Photo-Overlay-Comment.png')
IWRegisterNamedImage('movie overlay','../Media/Photo-Overlay-Movie.png')
loadMozillaCSS('Gallery_files/GalleryMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');NotificationCenter.addObserver(null,relayoutMediaGrid_id2,'RangeChanged','id2')
adjustLineHeightIfTooBig('id3');adjustFontSizeIfTooBig('id3');adjustLineHeightIfTooBig('id4');adjustFontSizeIfTooBig('id4');Widget.onload();fixupAllIEPNGBGs();fixAllIEPNGs('../Media/transparent.gif');initializeMediaStream_id2()
performPostEffectsFixups()}
function onPageUnload()
{Widget.onunload();}

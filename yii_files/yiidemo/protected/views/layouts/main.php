<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/SpryMenuBarHorizontal.css" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <script type="text/javascript">
    <!--
    function MM_swapImgRestore() { //v3.0
      var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
    }
    function MM_preloadImages() { //v3.0
      var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
        var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
        if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
    }

    function MM_findObj(n, d) { //v4.01
      var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
      if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
      for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
      if(!x && d.getElementById) x=d.getElementById(n); return x;
    }

    function MM_swapImage() { //v3.0
      var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
       if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
    }
//-->
    </script>

</head>

<body>
<center>

<div id="top">
 <div id="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" width="258" height="103" /></div>
 <div id="userDiv">

  <div id="signOut"> <?php if(Yii::app()->user->isGuest){ ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login"> Sign in</a><?php }else {?><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout"> Sign out</a><?php }?></div>

  <div id="userBg">
    <div id="user"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/user.jpg" width="38" height="39" /></div>
   <div id="MainName"><?php if(Yii::app()->user->isGuest){ ?>Guest<?php }else{ echo Yii::app()->user->name; }?></div>
      <?php if(!Yii::app()->user->isGuest){ ?>
   <div id="user_bttns">
    <div id="user_inbox"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','<?php echo Yii::app()->request->baseUrl; ?>/images/inbox_bttn2.jpg',1)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/inbox_bttn.jpg" name="Image3" width="85" height="32" border="0" id="Image3" /></a></div>
    <div id="user_posting"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','<?php echo Yii::app()->request->baseUrl; ?>/images/post_bttn2.jpg',1)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/post_bttn.jpg" name="Image4" width="130" height="32" border="0" id="Image4" /></a></div>
   </div>
    <?php }?>
  </div>
  <div id="Welcome"></div>



 </div>
 <div id="menu">
   <div id="curve"></div>
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li id="nav_home"><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index">Home</a>
      </li>
      <li id="nav_posting"><a href="<?php echo Yii::app()->request->baseUrl; ?>/post/create">Posting</a>
       <ul>

         <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/post/index">View All</a></li>
           <?php if(!Yii::app()->user->isGuest){ ?>
               <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/post/create">Add Post</a></li>
         <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/post/index">My Posting</a></li>
    <?php }?>
       </ul>
      </li>
      <li id="nav_phy"><a href="#">Physicians</a>

      </li>
      <li id="nav_jou"><a href="#">Journals &amp; News</a></li>
      <li><a href="#">Opportunities</a></li>
    </ul>
    <div id="myAccnt"> <?php if(!Yii::app()->user->isGuest){ ?><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image14','','<?php echo Yii::app()->request->baseUrl; ?>/images/myAccountBttn2.jpg',1)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/myAccountBttn1.jpg" name="Image14" width="122" height="45" border="0" id="Image14" /></a><?php }?></div>
    <div id="search">
   <div id="search_labl">Search :</div>
   <div id="search2">
    <form action="" method="get">
      <input id="textBox" name="" type="text" style="border:0" />
      <div id="go"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','<?php echo Yii::app()->request->baseUrl; ?>/images/go2.jpg',1)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/go.jpg" name="Image8" width="34" height="31" border="0" id="Image8" /></a></div>
    </form>
   </div>
  </div>
  </div>
</div>

<div id="middleDiv">
   	<?php echo $content; ?>
</div>
 <div id ="footer">
 <div id ="footer1">
<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Privacy Policy</a>
 </div>
  <div id ="footer2">
 All Rights Reserved : DocMingle
 </div>
</div>
</center>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>

</body>
</html>
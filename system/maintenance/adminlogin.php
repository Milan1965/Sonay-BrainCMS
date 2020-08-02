<style>
.form-control-dayhab {
	margin-top: 10px;
	text-align: center;
    width: 13%;
    padding: 0.5rem 0.75rem;
    font-size: 12px;
    line-height: 1.25;
    color: #464a4c;
    background-color: #fff;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
    -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic");/*!
</style>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noodp"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
      <meta name="Keywords" content="ddos, tools, if you are reading this fuck you, not really so, yes, maybe we will open ? :D">
      <meta name="description" content="Dayhab, building your future...">
      <title>Dayhab ~ Onderhoud</title>
      <link rel="shortcut icon" href="/favi.ico">
      <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800|Open+Sans:300,400,600,700,800" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="/assets/css/app.css?v=2">
      <link rel="stylesheet" type="text/css" href="/assets/css/default.css">
      <link rel="stylesheet" type="text/css" href="/system/maintenance/css/style.css?v=2">
   </head>
   <body>
      <div id="page-loader">
         <div class="container-mid">
            
            <div class="spinner-container">
               <div class="css-spinner"></div>
            </div>
         </div>
      </div>
      <div id="main">
         <section id="hero" class="hero hero-2">
            <div class="front-content page-enter-animated">
               <div class="container-mid">
			   <center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-3756831148216609" data-ad-slot="9111847811"></ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script></center>
                <img class="img-responsive logo" src="/dayhab.png" alt="logo" style="width:230px;height:68px;"><br>
			<form method="post"><center>
			<div style="max-width:13%;"><?php User::Login(); ?></div></center>
				<input class="form-control-dayhab" type="text" id="username" name="username" placeholder="<?php echo $lang['Iusername']; ?>"></br>
				<input class="form-control-dayhab" type="password" id="password" name="password" placeholder="<?php echo $lang['Ipassword']; ?>"></br>
				<button type="submit" style="margin-top:10px;width:13%;" class="btn btn-success" name="login"><div style="color: white"><b><?= $lang["Ilogin"] ?></b></div>
			</button>
			</form>
               </div>
               <a href="/index" style="width: 60px;text-align: center;padding-top: 4px;" class="scroll-down">Terug</a>
               <div class="controls"> <i class="volume-button fa fa-volume-up"></i> <i class="pause-button ti-control-pause"></i> </div>
            </div>
            <div class="background-content page-enter-animated">
               <div class="level-1">
                  <div class="bg-overlay"></div>
                  <div class="bg-pattern"></div>
                  <div id="canvas">
                     <canvas class="bg-effect layer" data-depth="0.2"></canvas>
                  </div>
               </div>
               <div class="level-2">
                  <div class="dzsparallaxer auto-init allbody" data-options="{mode_scroll: 'fromtop', animation_duration: '2' , direction: 'reverse'}">
                     <div class="dzsparallaxer--target">
                        <div class="bg-image layer" data-depth="0.04"></div>
                        <div class="bg-video layer" data-depth="0.04"></div>
                        <div class="bg-color layer" data-depth="0.04"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         
      </div>
      <script type="text/javascript" src="/assets/js/app.js"></script> 
   </body>
</html>
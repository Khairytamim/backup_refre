<style>
.caption1{
  display:inline-block;
  position:relative;
  margin-bottom:10px;
  overflow:hidden;
  background:#fff;
  transition:background 0.3s ease-in-out;
}

.caption1:hover{
  background:rgba(0,0,0,0);
}

.caption1 img{
  display:block;
  max-width:100%;
  transition:transform 0.3s ease-in-out;
}

.caption1:hover img{
  transform:translateX(100%);
}


.caption1::before,
.caption1::after{
  box-sizing:border-box;
  position:absolute;
  width:100%;
  z-index:-1;
  background:#fff;
  transform:translateX(-30%);
  transition:transform 0.3s ease-in-out;
}


.caption1::before {
    content: attr(data-title);
    height: 60%;
    color: #e45d25;
    font-size: 1.5em;
    font-weight: 500;
    padding: 30px;
}
 
.caption1::after {
    content: attr(data-description);
    top: 60%;
    height: 40%;
    color: #404040;
    font-size: 1em;
    font-weight: 700;
    padding: 20px 30px;
}


.caption1:hover::before,
.caption1:hover::after{
  transform:translateX(0%);
}
.image-thumbnails{
  width: 100%;
}
.dp {
-webkit-clip-path: circle(50% at 50% 50%);
clip-path: circle(50% at 50% 50%);
}
</style>



<div class="container">
    <div class="row" style="margin-top: 3em">
        <div style="text-align: center">
            <img class="dp" style="width: 15%" src="https://s-media-cache-ak0.pinimg.com/736x/4c/95/9b/4c959b5ee7b396f836ee3e24f3812535.jpg">
            <h4 style="color:#e45d25">Lauren Mayberry</h4>
            <span style="color: white; background-color: #e45d25; padding: 0.5em"><b>❤ 4.312</b></span><br><br>
            <b>Surbabaya, Indonesia</b><br>
            <i>"Saya adalah pemain band, asik asik josss..."</i>
            
        </div>
    </div>
    <div class="row" style="margin-top: 4em">
        <div class="col s4">
            <a class="caption1 modal-trigger" href="#image-modal" data-title="Lorem Ipsum Dolor Sit Amet consectetur, adipisci velit" data-description="❤ 1.241 #Zilch #ownline #mantap">
                <img class="image-thumbnails" src="https://s-media-cache-ak0.pinimg.com/736x/4c/95/9b/4c959b5ee7b396f836ee3e24f3812535.jpg">
            </a>
        </div>
        <div class="col s4">
            <a class="caption1 modal-trigger" href="#image-modal" data-title="Lorem Ipsum Dolor Sit Amet consectetur, adipisci velit" data-description="❤ 635">
                <img class="image-thumbnails" src="http://marieclaire.media.ipcdigital.co.uk/11116/00008c4b8/36b0/Lauren-Chvrches.jpg">
            </a>
        </div>
        <div class="col s4">
            <a class="caption1 modal-trigger" href="#image-modal" data-title="Lorem Ipsum Dolor Sit Amet consectetur, adipisci velit" data-description="❤ 134">
                <img class="image-thumbnails" src="http://i.imgur.com/w0Z3b3N.jpg">
            </a>
        </div>
        <div class="col s4">
            <a class="caption1 modal-trigger" href="#image-modal" data-title="Lorem Ipsum Dolor Sit Amet consectetur, adipisci velit" data-description="❤ 264">
                <img class="image-thumbnails" src="http://img04.deviantart.net/7c20/i/2014/219/7/1/lauren_mayberry_chvrches_by_lukefinch-d7u2pjn.png">
            </a>
        </div>
        <div class="col s4">
            <a class="caption1 modal-trigger" href="#image-modal" data-title="Lorem Ipsum Dolor Sit Amet consectetur, adipisci velit" data-description="❤ 842">
                <img class="image-thumbnails" src="http://peanutchuck.com/photos/2015/03/lauren-eve-mayberry-singer-911097189931494057_1635978657.jpg">
            </a>
        </div>
        <div class="col s4">
            <a class="caption1 modal-trigger" href="#image-modal" data-title="Lorem Ipsum Dolor Sit Amet consectetur, adipisci velit" data-description="❤ 149">
                <img class="image-thumbnails" src="http://i.imgur.com/weR75On.jpg">
            </a>
        </div>
    </div>
</div>


<div id="image-modal" class="modal modal-fixed-footer">
    <div class="modal-content">
      <img class="image-thumbnails" src="https://s-media-cache-ak0.pinimg.com/736x/4c/95/9b/4c959b5ee7b396f836ee3e24f3812535.jpg">
    </div>
  </div>
  
  
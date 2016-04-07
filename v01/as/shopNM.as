
// FUNCIONES PARALLAX

function enableBtns (e:Boolean):void
{
	for (var i:uint = 0; i < ei.length; i++)
	{
		var btn:MovieClip = ei[i].clip.area_mc;
		btn.mouseEnabled = e;
	}
}

function initBtn (btn:MovieClip):void
{
	btn.useHandCursor = true;
	btn.buttonMode = true;
	btn.mouseChildren=false;
}

function trackMouse (evt:Event):void
{
	var mousePos:Number = stage.mouseX;
	moveItem (bg_mc, 0 - (mousePos / bgDamp));

	for (var i:uint = 0; i < ei.length; i++)
	{
		var bocadillo:MovieClip = ei[i].clip;
		moveItem (bocadillo, ei[i].xPos - (mousePos / ei[i].damp));
	}
}


function startParallax ():void
{
	stage.addEventListener (MouseEvent.MOUSE_MOVE, trackMouse);
}


function stopParallax ():void
{
	stage.removeEventListener (MouseEvent.MOUSE_MOVE, trackMouse);
}



//BOCADILLO FUNCTIONS

function picRoll (evt:Event):void
{
	var mc:MovieClip = evt.target.parent.p_mc;
	twistItem (mc, picPush, 0);
}

function picOut (evt:Event):void
{
	var mc:MovieClip = evt.target.parent.p_mc;
	twistItem (mc, 0, 0);
}

function picClick (evt:Event):void
{
	stopParallax ();
	enableBtns (false);

	currBocadillo = evt.target.parent;
	currBocadilloNum = Number(currBocadillo.name.substr(1));

	bocadilloHolder.setChildIndex (currBocadillo, ei.length - 1);

	blurItems (blurAmount);

	Tweener.addTween (currBocadillo,{rotationX:0, z:-50, x:0, time:0.5, transition:"easeInOutSine", onComplete:cierraPantalla});
}


function bocadilloFunction():void { 


	for (var i:uint = 0; i < ei.length; i++)
	{
		var bocadilloMC:bocadillo = new bocadillo();
		ei[i].clip = bocadilloMC;
		bocadilloMC.name = "p" + i;
		bocadilloMC.z = ei[i].zPos;
		bocadilloMC.x = ei[i].xPos;
		bocadilloMC.y = bocadilloYpos;

		bocadilloMC.p_mc.txt.text = ei[i].tee;

		var bmap:Bitmap = new Bitmap(new ei[i].image(0,0));
		bocadilloMC.p_mc.image_mc.addChild (bmap);

		var btn:MovieClip = bocadilloMC.area_mc;
		initBtn (btn);
		btn.addEventListener (MouseEvent.ROLL_OVER, picRoll);
		btn.addEventListener (MouseEvent.ROLL_OUT, picOut);
		btn.addEventListener (MouseEvent.CLICK, picClick);

		bocadilloHolder.addChild (bocadilloMC);
	}

}

// FUNCIONES MOVER

function moveItem(mc:MovieClip, xpos:Number):void
		{
			Tweener.addTween(mc,{x:xpos, time:1, transition:"easeOutBack"});
		}


function twistItem (mc:MovieClip, rX:Number, rY:Number):void
{
	Tweener.addTween (mc,{rotationX:rX, rotationY:rY, time:0.5, transition:"easeOutBack"});
}


function twistBocadillo (evt:Event):void
{
	twistItem (currBocadillo, 0, currBocadillo.mouseX / 50);
}


function blurItems (amount:Number):void
{
	blurItem (bg_mc, amount);

	for (var i:uint = 0; i < ei.length; i++)
	{
		var bocadillo:MovieClip = ei[i].clip;

		if (bocadillo != currBocadillo)
		{
			blurItem (bocadillo, amount);
		}
	}
}
function blurItem (mc:MovieClip, amount:Number):void
{
	var blur:BlurFilter = new BlurFilter();
	blur.blurX = amount;
	blur.blurY = amount;
	blur.quality = BitmapFilterQuality.HIGH;
	mc.filters = [blur];
	
}


function removeDetection (me:MouseEvent):void
{


}


function initClose ():void
{

	var closebtn2:closeBtn = new closeBtn();
	closebtn2.x = 160;
	closebtn2.y = 775;
	addChild (closebtn2);
	initBtn (closebtn2);
	closebtn2.addEventListener (MouseEvent.CLICK, removeDetection);

}


bocadilloFunction();

startParallax ();

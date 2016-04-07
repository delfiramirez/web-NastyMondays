 package com.segonquart
{
	import caurina.transitions.Tweener;
	import caurina.transitions.properties.*;
	
	import flash.display.*;
	import flash.events.*;
	import flash.filters.BitmapFilterQuality;  
	import flash.filters.BlurFilter;
	

	public class SuperBocadillo extends MovieClip
	{
		
		private var ei:Array = new Array(
		{zPos:500,	xPos:-500,	damp:7, image:soren, depth:0, tee:"SOREN"}, 
		{zPos:700,	xPos:300,	damp:8, image:madmax,depth:1,tee:"MADMAX"},
		{zPos:500,	xPos:600,	damp:6, image:bocadilloAlbum, depth:2, tee:"ALBUM"},
		{zPos:300,	xPos:-50,	damp:4, image:topten, depth:3, tee:"TOP TEN NM"});
		
		private var bocadilloYpos = 320; 
		private var bgDamp:Number = 20; 
		private var picPush:Number = 5; 
		private var blurAmount:Number = 7; 
		private var currBocadillo_mc:MovieClip;
		private var currBocadilloNum:Number; 
		private var bocadilloHolder_mc:MovieClip = new MovieClip(); 
		private var closebtn2:closebtn;
		
		function SuperBocadillo()
		{
			addChild(bocadilloHolder_mc);
			bocadilloHolder_mc.x=0;
			bocadilloHolder_mc.y=0;
			
			FilterShortcuts.init();
			
			initStage();
			
			Tweener.addTween (bocadilloHolder_mc,{alpha:0,time:1,transition:"linear"});
		}
				
		private function initStage():void
		{
			for(var i:uint = 0; i < ei.length; i++){
				var bocadilloMC:bocadillo = new bocadillo();
				ei[i].clip = bocadilloMC;
				bocadilloMC.name = "p" + i;
				bocadilloMC.z = ei[i].zPos;
				bocadilloMC.x = ei[i].xPos;
				bocadilloMC.y = bocadilloYpos;
				
				bocadilloMC.p_mc.txt.text = ei[i].tee;
				
				var bmap:Bitmap = new Bitmap( new ei[i].image(0,0) );
				bocadilloMC.p_mc.image_mc.addChild(bmap);
				
				var btn:MovieClip = bocadilloMC.area_mc;
				
				initBtn(btn);
				
				btn.addEventListener(MouseEvent.ROLL_OVER, picRoll);
				btn.addEventListener(MouseEvent.ROLL_OUT, picOut);
				btn.addEventListener(MouseEvent.CLICK, picClick);
				
				bocadilloHolder_mc.addChild(bocadilloMC);
			}
		
			startParallax();
		}
			
		private function initBtn(btn:MovieClip):void
		{
			btn.useHandCursor = true;
			btn.buttonMode = true;
		}
		
		private function startParallax():void
		{
			stage.addEventListener(MouseEvent.MOUSE_MOVE, trackMouse);
		}
		
		private function stopParallax():void
		{
			stage.removeEventListener(MouseEvent.MOUSE_MOVE, trackMouse);
		}

		private function trackMouse(evt:Event):void
		{
			var mousePos:Number = stage.mouseX;
			moveItem(bg_mc, 0 - (mousePos / bgDamp));
			
			for(var i:uint = 0; i < ei.length; i++){
				var bocadillo:MovieClip = ei[i].clip;
				moveItem(bocadillo, ei[i].xPos - (mousePos / ei[i].damp));
			}
		}
		
		// ***** bocadillo FUNCTIONS *****
		
		private function picRoll(evt:Event):void
		{
			var mc:MovieClip = evt.target.parent.p_mc;
			twistItem(mc, picPush, 0);
		}
			
		private function picOut(evt:Event):void
		{
			var mc:MovieClip = evt.target.parent.p_mc;
			twistItem(mc, 0, 0);
		}
			
		private function picClick(evt:Event):void
		{
			stopParallax();
			enableBtns(false);
			
			currBocadillo_mc = evt.target.parent;
			currBocadilloNum = Number(currBocadillo_mc.name.substr(1));
			
			bocadilloHolder_mc.setChildIndex(currBocadillo_mc, ei.length - 1);
			
			blurItems(blurAmount);
			
			Tweener.addTween(currBocadillo_mc,{rotationX:0, z:-50, x:0, time:0.5, transition:"easeInOutSine", onComplete:initClose});
		}
				
		private function enableBtns(e:Boolean):void
		{
			for(var i:uint = 0; i < ei.length; i++){
				var btn:MovieClip = ei[i].clip.area_mc;
				btn.mouseEnabled = e;
			}
		}

		private function moveItem(mc:MovieClip, xpos:Number):void
		{
			Tweener.addTween(mc,{x:xpos, time:1, transition:"easeOutBack"});
		}
		
		private function twistItem(mc:MovieClip, rX:Number, rY:Number):void
		{
			Tweener.addTween(mc,{rotationX:rX, rotationY:rY, time:0.5, transition:"easeOutBack"});
		}
		
		private function twistbocadillo(evt:Event):void
		{
			twistItem(currBocadillo_mc, 0, currBocadillo_mc.mouseX / 50);
		}
			
		private function blurItems(amount:Number):void
		{
			blurItem(bg_mc, amount);
			
			for(var i:uint = 0; i < ei.length; i++){
				var bocadillo:MovieClip = ei[i].clip;
				
				if(bocadillo != currBocadillo_mc){
					blurItem(bocadillo, amount);
				}
			}
		}
			
		private function blurItem(mc:MovieClip, amount:Number):void
		{
			var blur:BlurFilter = new BlurFilter();  
			blur.blurX = amount;
			blur.blurY = amount;
			blur.quality = BitmapFilterQuality.LOW;  
			mc.filters = [blur];  
		}
	
		private function initClose():void
		{
			stage.addEventListener(MouseEvent.MOUSE_MOVE, twistbocadillo);

			closebtn2.x = -160;
			closebtn2.y = 775;
			initBtn(closebtn2);
			closebtn2.addEventListener(MouseEvent.CLICK, removeDetails);
			currBocadillo_mc.p_mc.addChild(closebtn2);
		}
		
		private function removeDetails(evt:Event):void
		{
			currBocadillo_mc.p_mc.removeChildAt(numChildren);
			
			stage.removeEventListener(MouseEvent.MOUSE_MOVE, twistbocadillo);
			
			currBocadillo_mc.rotationY = 0;
			blurItems(0);

			Tweener.addTween(currBocadillo_mc,{rotationX:0, z:ei[currBocadilloNum].zPos, x:ei[currBocadilloNum].xPos, time:0.3, transition:"easeOutSine", onComplete:startAgain});
			
			bocadilloHolder_mc.setChildIndex(currBocadillo_mc, ei[currBocadilloNum].depth);
		}
		
		private function startAgain():void
		{
			startParallax();
			enableBtns(true);
		}
	}
}

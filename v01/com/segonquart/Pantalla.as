﻿package com.segonquart
{
	import caurina.transitions.*;
	import caurina.transitions.Tweener;
	import caurina.transitions.properties.*;
	import caurina.transitions.properties.FilterShortcuts;
	import caurina.transitions.properties.ColorShortcuts;
	ColorShortcuts.init();
	FilterShortcuts.init();

	import flash.display.LoaderInfo;
	import flash.system.System;
	import flash.display.StageDisplayState;
	import flash.system.Security;
	Security.loadPolicyFile ("http://www.segonquart.com/webnasty/xml/nm.xml");

	import flash.display.DisplayObjectContainer;
	import flash.display.DisplayObject;
	import com.yahoo.astra.fl.managers.AlertManager;

	import flash.display.*;
	import flash.events.*;
	import flash.text.*;
	import flash.geom.*;
	import flash.display.Shape;
	import flash.display.GradientType;

	import flash.utils.Timer;
	import flash.events.TimerEvent;

	import flash.events.KeyboardEvent;
	import flash.ui.Keyboard;

	import flash.filters.*;
	import flash.filters.GlowFilter;
	import flash.filters.BitmapFilterQuality;
	import flash.filters.BlurFilter;

	import flash.net.*;
	
	import flash.media.Sound;  

	import com.segonquart.segonquartContextMenu;
	import com.segonquart.MenuTop;

	public class Pantalla extends MovieClip
	{

		private var area_mc:MovieClip;
		private var p_mc:MovieClip;
		private var txt:TextField;
		private var bg_mc:MovieClip;

		private var barraDrag:MovieClip;
		private var marc_mc:MovieClip;
		private var shine_bg:MovieClip;

		private var myTimer:Timer = new Timer(2000,1);
		private var myTimerCorto:Timer = new Timer(1000,1);
		private var myTimerLargo:Timer = new Timer(4000,1);

		private var closebtn:closeBtn = new closeBtn();
		private var closebtn2:closeBtn = new closeBtn();
		private var arcade_mc:MovieClip;
		private var infoButton:Object;

		private var bitmap:BitmapData;
		private var angle:Number = 0;
		private var _offset:Number = 0;

		//FORM

		private var idUsuario:String = null;
		private var nombreUsuario:String = "";
		private var ape1:String = "";
		private var emailUsuario:String = "";
		private var passwordUsuario:String = "";

		private var sexoUsuario:String = "";
		private var especialidadUsuario:String = "";
		private var cpUsuario:String = "";
		private var provinciaUsuario:String = "";
		private var direccionUsuario:String = "";
		private var telUsuario:String = "";

		private var dLlum_mc:MovieClip;
		private var bLlum_mc:MovieClip;
		private var button_5:MovieClip;

		private var speaker1:MovieClip;

		private var bg1:MovieClip;
		private var bg2:MovieClip;
		private var oShop_mc:MovieClip;
		private var pFemale_mc:MovieClip;
		private var dtable_mc:MovieClip;
		private var sign_mc:MovieClip;

		private var oArmRobot_mc:MovieClip;
		private var oBombox1_mc:MovieClip;

		private var oRev_mc:MovieClip;
		private var oorevox_mc:MovieClip;

		private var oRevox2_mc:MovieClip;
		private var oToy2_mc:MovieClip;
		private var oToy1_mc:MovieClip;
		private var oCar1_mc:MovieClip;
		private var oCD_mc:MovieClip;
		private var ocar3_mc:MovieClip;
		private var ocassete_mc:MovieClip;

		private var oMusic_mc:MovieClip;

		private var oBici_mc:MovieClip;
		private var orayban2_mc:MovieClip;
		private var oRayban1_mc:MovieClip;
		private var button_4:MovieClip;
		private var oradio_mc:MovieClip;

		private var oTape1_mc:MovieClip;
		private var oBombox2_mc:MovieClip;
		private var oConsol_mc:MovieClip;

		private var oMario_mc:MovieClip;
		private var oCine_mc:MovieClip;
		private var oTrans_mc:MovieClip;
		private var oWakeBoard_mc:MovieClip;
		private var oScalbox_mc:MovieClip;
		private var oTrekki_mc:MovieClip;
		private var oRobot4_mc:MovieClip;
		private var oRobot3_mc:MovieClip;
		private var oRobot5_mc:MovieClip;

		//DETAIL

		private var cross1:MovieClip;
		private var cross2:MovieClip;
		private var cross3:MovieClip;
		private var cross4:MovieClip;
		private var cross5:MovieClip;
		private var cross6:MovieClip;
		private var cross7:MovieClip;
		private var cross8:MovieClip;
		private var cross9:MovieClip;
		private var cross10:MovieClip;

		//POSTERS

		private var pPrn_mc:MovieClip;
		private var button_2:MovieClip;
		private var pRobot_mc:MovieClip;
		private var oPoster5_mc:MovieClip;
		private var oPoster6_mc:MovieClip;
		private var pBeatles_mc:MovieClip;
		private var pTeam_mc:MovieClip;
		private var pNM_mc:MovieClip;
		private var button_:MovieClip;

		//NEWS
		
		private var oRSS_mc:MovieClip;

		private var button_4:MovieClip;
		private var oComeDisc_mc:MovieClip;
		private var oNenon_mc:MovieClip;
		private var ocan_mc:MovieClip;

		private var tatoo_mc:MovieClip;
		private var contenedor:MovieClip;

		private var mem:String = "";

		private var glowIn:GlowFilter = new GlowFilter(0x27CCC2,.8,15,15,4,2);
		private var glowOut:GlowFilter = new GlowFilter(0x27CCC2,0,15,15,4,2);
		
		private var staticSound:Sound = new StaticSound(); 
		
		private var topMenu:MovieClip;
		
		private var sorenBtn:MovieClip;
		private var maxBtn:MovieClip;
		private var toptenBtn:MovieClip;
		private var vipBtn:MovieClip;
		private var salaBtn:MovieClip;
		private var regBtn:MovieClip;
		private var tiquetBtn:MovieClip;
		private var albumBtn:MovieClip;
		private var gameBtn:MovieClip;
		
		private var fsb_txt:TextField = " ";

		public function Pantalla()
		{
			stage.frameRate = 31;
			bg1.addEventListener (MouseEvent.CLICK, bocataUno);

			traceObjects ();
			checkResize ();
		}

		private function onOverScale (e:MouseEvent):void
		{
			Tweener.removeTweens (e.currentTarget);
			Tweener.addTween (e.currentTarget,{scaleX:1.2,scaleY:1.2,transition:"easeOutSine",time:.2});
		}
		
		private function onOutScale (e:MouseEvent):void
		{
			Tweener.removeTweens (e.currentTarget);
			Tweener.addTween (e.currentTarget,{scaleX:0,scaleY:0,transition:"Linear",time:.1});
			Tweener.addTween (bocTres, {alpha:0, time:1, transition:"easeoutelastic"});
		}

		private function checkResize ():void
		{
			stage.addEventListener (Event.RESIZE, resizeStage);
		}
		
		private function resizeStage (event:Event):void
		{
			stage.align = StageAlign.TOP;

			bg_mc.x = 0;
			bg_mc.y = 0;
			bg_mc.width = stage.stageWidth;
			bg_mc.height = stage.stageHeight;
		}

		private function clearChildren (target:MovieClip):void
		{
			var num:int = target.numChildren;

			for (var i:int = 0; i < num; i++)
			{
				target.removeChildAt (0);
			}
		}
		
		private function traceObjects ():void
		{
			trace ("Stage: Number of Children: " + stage.numChildren);
			trace ("Object Description: " + stage.getChildAt(0).toString());// DragDropShift
			traceDisplayList (stage);
		}

		private function traceDisplayList (container:DisplayObjectContainer, indentString:String = ""):void
		{
			var child:DisplayObject;
			for (var i:uint=0; i < container.numChildren; i++)
			{
				child = container.getChildAt(i);
				trace (indentString, child, child.name, "(depth: " + child.parent.getChildIndex(child) + ")");
				if (container.getChildAt(i) is DisplayObjectContainer)
				{
					traceDisplayList (DisplayObjectContainer(child), indentString + "    ");
				}
			}
		}

	}

}

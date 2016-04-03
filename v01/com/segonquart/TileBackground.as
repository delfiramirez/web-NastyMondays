package com.segonquart
{
	import flash.display.Bitmap;
	import flash.display.BlendMode;
	import flash.display.GradientType;
	import flash.display.Shape;
	import flash.display.SpreadMethod;
	import flash.display.Sprite;
	import flash.geom.Matrix;

	public class TileBackground extends Sprite
	{
		private var tileImage:Bitmap;
		private var colors:Array;
		private var alphas:Array;
		private var ratio:Number;
		
		private var bmp:Bitmap;
		private var degradado:Shape;
		
		public function TileBackground(tileImage:Bitmap, colors:Array, alphas:Array, ratio:Number = 0.5)
		{
			this.tileImage = tileImage;
			this.tileImage.smoothing = true;
			this.colors = colors;
			this.alphas = alphas;
			this.ratio = ratio;
		}
		
		public function update(_width:Number, _height:Number):void
		{
			var matrix:Matrix = new Matrix();
			graphics.clear();
			graphics.beginBitmapFill(tileImage.bitmapData, matrix, true, true);
			graphics.drawRect(0, 0, _width, _height);
			graphics.endFill();
			
			matrix.identity();
			matrix.createGradientBox(2.0*_width, 2.0*_height, 0, -0.5*_width, -0.75*_height);
			
			graphics.beginGradientFill(GradientType.RADIAL, colors, alphas, [0, Math.round(ratio*255), 255], matrix, SpreadMethod.PAD);
			graphics.drawRect(0, 0, _width, _height);
			graphics.endFill();
		}
		
	}
}
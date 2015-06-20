/* MooFlow Viewer (extra JS MooFlowViewer.js)
 * v0.1dev useViewer:true
 */
MooFlow.implement({

	attachViewer: function(){
		return this;
	},
	flowStart: function(){
		this.hideIcon();
	},
	
	flowComplete: function(){
		this.createIconTip();
	},
	
	createIconTip: function(){
		var cur = this.getCurrent();
		if(!$chk(cur.rel)||!$chk(cur.href)) return;
		this.tipFx = new Fx({link:'cancel'});
		if(!$chk(this.icon)) { this.icon = new Element('a').addClass('show').setStyles({'display':'none','opacity':'0'}).inject(this.MooFlow); }
		this.icon.addEvent('click', this.onClickView.bind(this, cur));
		this.icon.addEvent('mouseenter', this.showTip.bind(this, cur));
		this.icon.addEvent('mouseleave', this.hideTip.bind(this, cur));
		if(!$chk(this.tip)){ this.tip = new Element('div').addClass('tooltip').setStyles({'display':'none','opacity':'0'}).inject(this.MooFlow); }
		this.tip.set('html', cur.alt);
		this.icon.addClass(cur.rel.toLowerCase());
		this.icon.setStyle('display','block').fade(0.6);
	},

	showTip: function(cur){
		this.tip.setStyles({'top':100,'display':'block'});
		this.tipFx = new Fx.Morph(this.tip,{link:'cancel'}).start({'opacity': 0.8, 'top': this.icon.getCoordinates().top-this.tip.getSize().y-100});
	},
	
	hideTip: function(cur){
		this.tipFx.start({'opacity': 0, 'top': 100});
	},

	hideIcon: function(){
		if($chk(this.icon) && $chk(this.icon.getParent())) this.icon.destroy();
		if($chk(this.tip) && $chk(this.tip.getParent())) this.tip.destroy();
		this.icon = this.tip = null;	
	},
	
	onClickView: function(cur){
		switch (cur.rel.toLowerCase()){
			case 'image':
			this.loadImage(cur);
			break;
			case 'link':
			window.open(cur.href, cur.target || '_blank');
			break;
			default:
		}
	},
	
	loadImage: function(cur){
		this.icon.removeClass('image').addClass('viewerload');
		this.image = new Asset.image(cur.href, {onload: this.showImage.bind(this)});
	},
	
	showImage: function(){
		var cur = this.getCurrent();
		var c = cur.con.getFirst().getCoordinates();
		this.image.inject(document.body);
		this.image.addEvent('click', this.hideImage.bind(this));
		this.image.setStyles({'left':c.left,'top':c.top,'width':c.width,'height':c.height,'position':'absolute','z-index':'103'});
		var imageFx = new Fx.Morph(this.image, {transition: Fx.Transitions.Sine.easeOut});
		var to = {x: this.image.get('width'), y: this.image.get('height')};
		var box = document.getSize(), scroll = document.getScroll();
		var pos = {x: scroll.x + ((box.x - to.x) / 2).toInt(), y: scroll.y + ((box.y - to.y) / 2).toInt() };
		var vars = {left: pos.x, top: pos.y, width: to.x, height: to.y};
		imageFx.start(vars);
	},
	
	hideImage: function(){
		this.icon.removeClass('viewerload').addClass('image');
		this.image.dispose();
	}
});

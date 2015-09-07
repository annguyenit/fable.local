/******************************************************************************/
/******************************************************************************/

;(function($,doc,win) 
{
	"use strict";
	
	var PBBox=function(object,option)
	{
		/**********************************************************************/
		
		var $this=$(object);
		var $option=option;

		/**********************************************************************/

		this.build=function() 
		{
			var helper=new PBHelper();
			helper.hover($this.find('.pb-box-content').find('a'),$option,true);		
		};
	};
	
	/**************************************************************************/
	
	$.fn.PBBox=function(option) 
	{
		var buttton=new PBBox(this,option);
		buttton.build();
	};
	
	/**************************************************************************/

})(jQuery,document,window);

/******************************************************************************/
/******************************************************************************/